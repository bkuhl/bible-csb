<?php

declare(strict_types=1);

namespace tests;

use BKuhl\BibleCSB\Book\Genesis;
use BKuhl\BibleCSB\Book\John;
use BKuhl\BibleCSB\Book\FirstTimothy;
use BKuhl\BibleCSB\BookEnum;
use BKuhl\BibleCSB\BookFactory;
use BKuhl\BibleCSB\BookResolver;
use BKuhl\ScriptureRanges\Interfaces\BookInterface as ScriptureRangesBookInterface;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class BookResolverTest extends TestCase
{
    private BookResolver $resolver;
    private BookFactory $bookFactory;

    protected function setUp(): void
    {
        $this->bookFactory = new BookFactory();
        $this->resolver = new BookResolver($this->bookFactory);
    }

    #[Test]
    public function testCanResolveReturnsTrueForScriptureRangesBookInterface(): void
    {
        $book = new Genesis();
        
        $this->assertTrue($this->resolver->canResolve($book));
    }

    #[Test]
    public function testCanResolveReturnsTrueForBookEnum(): void
    {
        $this->assertTrue($this->resolver->canResolve(BookEnum::GENESIS));
        $this->assertTrue($this->resolver->canResolve(BookEnum::JOHN));
        $this->assertTrue($this->resolver->canResolve(BookEnum::FIRST_TIMOTHY));
    }

    #[Test]
    public function testCanResolveReturnsTrueForString(): void
    {
        $this->assertTrue($this->resolver->canResolve('Gen'));
        $this->assertTrue($this->resolver->canResolve('John'));
        $this->assertTrue($this->resolver->canResolve('1 Tim'));
        $this->assertTrue($this->resolver->canResolve('invalid'));
    }

    #[Test]
    public function testCanResolveReturnsTrueForInteger(): void
    {
        $this->assertTrue($this->resolver->canResolve(1));
        $this->assertTrue($this->resolver->canResolve(43));
        $this->assertTrue($this->resolver->canResolve(54));
        $this->assertTrue($this->resolver->canResolve(999));
    }

    #[Test]
    #[DataProvider('invalidTypesProvider')]
    public function testCanResolveReturnsFalseForInvalidTypes(mixed $input): void
    {
        $this->assertFalse($this->resolver->canResolve($input));
    }

    public static function invalidTypesProvider(): array
    {
        return [
            'array' => [[]],
            'null' => [null],
            'boolean' => [true],
            'float' => [1.5],
            'object' => [new \stdClass()],
        ];
    }

    #[Test]
    public function testResolveReturnsBookInstanceForScriptureRangesBookInterface(): void
    {
        $book = new Genesis();
        
        $resolved = $this->resolver->resolve($book);
        
        $this->assertSame($book, $resolved);
    }

    #[Test]
    #[DataProvider('bookEnumProvider')]
    public function testResolveReturnsBookInstanceForBookEnum(BookEnum $bookEnum, string $expectedName, int $expectedId): void
    {
        $resolved = $this->resolver->resolve($bookEnum);
        
        $this->assertInstanceOf(ScriptureRangesBookInterface::class, $resolved);
        $this->assertEquals($expectedName, $resolved->name());
        $this->assertEquals($expectedId, $resolved->position());
    }

    public static function bookEnumProvider(): array
    {
        return [
            'Genesis' => [BookEnum::GENESIS, 'Genesis', Genesis::ID],
            'John' => [BookEnum::JOHN, 'John', John::ID],
            'First Timothy' => [BookEnum::FIRST_TIMOTHY, '1 Timothy', FirstTimothy::ID],
        ];
    }

    #[Test]
    #[DataProvider('integerProvider')]
    public function testResolveReturnsBookInstanceForInteger(int $bookId, string $expectedName): void
    {
        $resolved = $this->resolver->resolve($bookId);
        
        $this->assertInstanceOf(ScriptureRangesBookInterface::class, $resolved);
        $this->assertEquals($expectedName, $resolved->name());
        $this->assertEquals($bookId, $resolved->position());
    }

    public static function integerProvider(): array
    {
        return [
            'Genesis' => [Genesis::ID, 'Genesis'],
            'John' => [John::ID, 'John'],
            'First Timothy' => [FirstTimothy::ID, '1 Timothy'],
        ];
    }

    #[Test]
    #[DataProvider('abbreviationProvider')]
    public function testResolveReturnsBookInstanceForString(string $abbreviation, string $expectedName, int $expectedId): void
    {
        $resolved = $this->resolver->resolve($abbreviation);
        
        $this->assertInstanceOf(ScriptureRangesBookInterface::class, $resolved);
        $this->assertEquals($expectedName, $resolved->name());
        $this->assertEquals($expectedId, $resolved->position());
    }

    public static function abbreviationProvider(): array
    {
        return [
            'Genesis' => ['Gen', 'Genesis', Genesis::ID],
            'John' => ['John', 'John', John::ID],
            'First Timothy' => ['1 Tim', '1 Timothy', FirstTimothy::ID],
        ];
    }

    #[Test]
    public function testResolveThrowsExceptionForInvalidInteger(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid book ID: 999');
        
        $this->resolver->resolve(999);
    }

    #[Test]
    public function testResolveThrowsExceptionForInvalidString(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid book abbreviation: InvalidBook');
        
        $this->resolver->resolve('InvalidBook');
    }

    #[Test]
    #[DataProvider('unsupportedTypesProvider')]
    public function testResolveThrowsExceptionForUnsupportedTypes(mixed $input, string $expectedMessage): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage($expectedMessage);
        
        $this->resolver->resolve($input);
    }

    public static function unsupportedTypesProvider(): array
    {
        return [
            'array' => [[], 'Unable to resolve book from: array'],
            'null' => [null, 'Unable to resolve book from: NULL'],
            'boolean' => [true, 'Unable to resolve book from: boolean(true)'],
            'float' => [1.5, 'Unable to resolve book from: double(1.5)'],
            'object' => [new \stdClass(), 'Unable to resolve book from: stdClass'],
        ];
    }

    #[Test]
    public function testResolverUsesProvidedBookFactory(): void
    {
        $mockFactory = $this->createMock(BookFactory::class);
        $mockBook = new Genesis();
        
        $mockFactory->expects($this->once())
            ->method('make')
            ->with(BookEnum::GENESIS)
            ->willReturn($mockBook);
        
        $resolver = new BookResolver($mockFactory);
        $result = $resolver->resolve(BookEnum::GENESIS);
        
        $this->assertSame($mockBook, $result);
    }

    #[Test]
    public function testResolverUsesDefaultBookFactory(): void
    {
        $resolver = new BookResolver();
        $result = $resolver->resolve(BookEnum::GENESIS);
        
        $this->assertInstanceOf(ScriptureRangesBookInterface::class, $result);
        $this->assertEquals('Genesis', $result->name());
    }
}
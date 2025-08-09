<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB;

use BKuhl\ScriptureRanges\Interfaces\BookInterface as ScriptureRangesBookInterface;
use BKuhl\ScriptureRanges\Interfaces\BookResolverInterface;

class BookResolver implements BookResolverInterface
{
    public function __construct(
        private readonly BookFactory $bookFactory = new BookFactory()
    ) {}

    public function canResolve(mixed $book): bool
    {
        return $book instanceof ScriptureRangesBookInterface 
            || $book instanceof BookEnum 
            || is_string($book) 
            || is_int($book);
    }

    public function resolve(mixed $book): ScriptureRangesBookInterface
    {
        if ($book instanceof ScriptureRangesBookInterface) {
            return $book;
        }

        if ($book instanceof BookEnum) {
            return $this->bookFactory->make($book);
        }

        if (is_int($book)) {
            try {
                $bookEnum = BookEnum::from($book);
                return $this->bookFactory->make($bookEnum);
            } catch (\ValueError) {
                throw new \InvalidArgumentException("Invalid book ID: $book");
            }
        }

        if (is_string($book)) {
            try {
                return $this->bookFactory->makeByAbbreviation($book);
            } catch (\InvalidArgumentException) {
                throw new \InvalidArgumentException("Invalid book abbreviation: $book");
            }
        }

        throw new \InvalidArgumentException(
            'Unable to resolve book from: ' . $this->getBookDescription($book)
        );
    }

    private function getBookDescription(mixed $book): string
    {
        if (is_object($book)) {
            return get_class($book);
        }
        
        return gettype($book) . '(' . var_export($book, true) . ')';
    }
}
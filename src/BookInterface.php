<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB;

interface BookInterface
{
    public function name(): string;
    public function position(): int;
    public function testament(): Testament;
    public function abbreviation(): string;
} 
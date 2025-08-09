<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Laravel;

use BKuhl\BibleCSB\BookFactory;
use BKuhl\BibleCSB\BookResolver;
use BKuhl\ScriptureRanges\ScriptureRangeBuilder;
use Illuminate\Support\ServiceProvider;

class BibleCSBServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(BookResolver::class, function ($app) {
            return new BookResolver($app->make(BookFactory::class));
        });

        $this->app->bind(ScriptureRangeBuilder::class, function ($app) {
            return new ScriptureRangeBuilder($app->make(BookResolver::class));
        });
    }

    public function boot(): void
    {
        //
    }
}
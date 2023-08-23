<?php

namespace Sherlockboy\MohiraiLaravel;

use Illuminate\Support\ServiceProvider;

class MohiraiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/mohirai.php' => config_path('mohirai.php')
        ]);
    }

    public function register(): void
    {
        $this->app->singleton(MohiraiApi::class, fn() => new MohiraiApi());
    }
}

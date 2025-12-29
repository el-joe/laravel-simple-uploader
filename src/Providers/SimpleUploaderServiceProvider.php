<?php

namespace Laravel\SimpleUploader\Providers;

use Illuminate\Support\ServiceProvider;

class SimpleUploaderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}

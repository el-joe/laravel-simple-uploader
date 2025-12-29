<?php

namespace Laravel\SimpleUploader;

use Illuminate\Support\ServiceProvider;

class SimpleUploaderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}

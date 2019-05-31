<?php

namespace Encore\PHPInfo;

use Encore\Admin\Facades\Admin;
use Illuminate\Support\ServiceProvider;

class PHPInfoServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(PHPInfo $extension)
    {
        if (! PHPInfo::boot()) {
            return ;
        }
        Admin::booting(function () {
            Admin::js('vendor/laravel-admin-ext/phpinfo/bar.js');
            Admin::css('vendor/laravel-admin-ext/phpinfo/foo.css');
        });
        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'phpinfo');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/phpinfo')],
                'phpinfo'
            );
        }

        $this->app->booted(function () {
            PHPInfo::routes(__DIR__.'/../routes/web.php');
        });


    }
}
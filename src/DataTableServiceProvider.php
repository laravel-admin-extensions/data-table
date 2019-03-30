<?php

namespace Jxlwqq\DataTable;

use Egulias\EmailValidator\Warning\ObsoleteDTEXT;
use Encore\Admin\Admin;
use Illuminate\Support\ServiceProvider;

class DataTableServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(DataTableExtension $extension)
    {
        if (!DataTableExtension::boot()) {
            return;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laravel-admin-data-table');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/data-table')],
                'laravel-admin-data-table'
            );
        }

        Admin::booting(function () {
            Admin::css('vendor/laravel-admin-ext/data-table/dataTables-1.10.19/dataTables.bootstrap.min.css');
            Admin::js('vendor/laravel-admin-ext/data-table/dataTables-1.10.19/jquery.dataTables.min.js');
            Admin::js('vendor/laravel-admin-ext/data-table/dataTables-1.10.19/dataTables.bootstrap.min.js');
        });

    }
}

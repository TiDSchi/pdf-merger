<?php namespace PdfMerger;

use Illuminate\Support\ServiceProvider;
use PdfMerger\PdfManage;

class PdfMergerServiceProvider extends ServiceProvider {

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('pdf-merger', function($app)
        {
            return new PdfManage();
        });
    }
} 
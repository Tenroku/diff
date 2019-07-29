<?php
/**
 * Created by PhpStorm.
 * User: ilaoniu
 * Date: 2019/7/29
 * Time: 19:31
 */

namespace Ilaoniu\Diff;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Diff::class, function () {
            return new Diff(config('diff.diff_options'), config('diff.renderer_options'));
        });

        $this->app->alias(Diff::class, 'diff');
    }

    public function provides()
    {
        return [Diff::class, 'diff'];
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/diff.php' => config_path('diff.php'),
        ]);
    }
}
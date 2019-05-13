<?php


namespace Qiwi\ServiceProviders;


use Illuminate\Contracts\Container\Container as Application;
use Illuminate\Foundation\Application as LaravelApplication;
use Laravel\Lumen\Application as LumenApplication;
use Illuminate\Support\ServiceProvider;
use Qiwi\Api\BillPayments;

/**
 * Class QiwiServiceProvider
 * @package Qiwi\ServiceProviders
 */
class QiwiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     * @var bool
     */
    protected $defer = true;

    /**
     * Holds path to Config File.
     *
     * @var string
     */
    protected $congigFilePath;

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->registerQiwi($this->app);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
       return ['qiwi', BillPayments::class];
    }

    /**
     * Setup the config
     *
     * @param \Illuminate\Contracts\Container\Container $app
     * @return void
     */
    protected function setupConfig(Application $app)
    {
        $configFilePath = __DIR__ . '/../../config/qiwi.php';
        if ($app instanceof LaravelApplication) {
            $this->publishes([$configFilePath => config_path('qiwi.php')]);
        } elseif ($app instanceof LumenApplication ) {
            $app->configure('qiwi');
        }

        $this->mergeConfigFrom($configFilePath, 'qiwi');
    }

    /**
     * Initialize Qiwi Payment SDK Library with Default Config
     *
     * @param \Illuminate\Contracts\Container\Container $app
     */
    protected function registerQiwi(Application $app)
    {
        $app->singleton(BillPayments::class, function ($app) {
            $config = $app['config'];
            $qiwi = new BillPayments(
                $config->get('qiwi.secret_key', false)
            );
            return $qiwi;
        });

        $app->alias(BillPayments::class, 'qiwi');
    }


}

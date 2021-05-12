<?php

namespace DRM\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
use Laravel\Ui\UiCommand;
use Laravel\Ui\AuthCommand;

class DRMServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('de-raaf-media', function ($command) {
            LaravelPreset::install();

            $command->info('All finished! Please compile your assets, and you are all set to go!');
        });
    }
}
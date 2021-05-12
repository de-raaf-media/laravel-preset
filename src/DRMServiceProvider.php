<?php

namespace DRM\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\PresetCommand;

class DRMServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('drm', function ($command) {
            Preset::install();

            $command->info('All finished! Please compile your assets, and you are all set to go!');
        });
    }
}

<?php

namespace DRM\LaravelPreset;

use Illuminate\Filesystem\Filesystem;
use Laravel\Ui\Presets\Preset;

class LaravelPreset extends Preset
{
    public static function install()
    {
//        static::updatePackages();
//        static::updateMix();
//        static::updateScripts();
//        static::updateStyles();
        static::updateIncludes();
    }

    public static function updateIncludes()
    {
        copy(__DIR__.'/stubs/includes/errors.blade.php', resource_path('views/includes/errors.blade.php'));
        copy(__DIR__.'/stubs/includes/messages.blade.php', resource_path('views/includes/messages.blade.php'));

    }

//    public static function updatePackageArray($packages)
//    {
//        return array_merge(['laravel-mix-tailwind' => '^0.1.0'], Arr::except($packages, [
//            'popper.js',
//            'lodash',
//            'jquery',
//            'bootstrap'
//        ]));
//    }
//
//    public static function updateMix()
//    {
//        copy(__DIR__.'/stubs/webpack.mix.js', base_path('webpack.mix.js'));
//    }
//
//    public static function updateScripts()
//    {
//        copy(__DIR__.'/stubs/app.js', resource_path('assets/js/app.js'));
//        copy(__DIR__.'/stubs/bootstrap.js', resource_path('assets/js/bootstrap.js'));
//    }
//
//    public static function updateStyles()
//    {
//        File::cleanDirectory(resource_path('assets/sass'));
//
//        File::put(resource_path('assets/sass/app.sass'), '');
//    }
}

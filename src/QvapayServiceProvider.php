<?php

namespace Qvapay\sdk;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QvapayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('sdk')
            ->hasConfigFile();
        //->hasViews()
            //->hasMigration('create_sdk_table')
            //->hasCommand(QvapayCommand::class);
    }
}

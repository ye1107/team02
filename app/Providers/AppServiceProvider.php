<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('dateearlier', function($attribute, $value, $parameters, $validator) {
            $lend_date = \Arr::get($validator->getData(), $parameters[0]);
            $lend_time = $value;
            $back_date = \Arr::get($validator->getData(), $parameters[1]);
            $back_time =  \Arr::get($validator->getData(), $parameters[2]);
            return Carbon::parse($back_date . ' ' . $back_time) >= Carbon::parse($lend_date . ' ' . $lend_time);
        });

    }
}

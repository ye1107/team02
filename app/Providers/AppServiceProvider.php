<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\pagination\paginator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

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
        Schema::defaultStringLength(191);
        Validator::extend('dateearlier', function($attribute, $value, $parameters, $validator) {
            $lend_date = \Arr::get($validator->getData(), $parameters[0]);
            $lend_time = $valuAe;
            $back_date = \Arr::get($validator->getData(), $parameters[1]);
            $back_time =  \Arr::get($validator->getData(), $parameters[2]);
            return Carbon::parse($back_date . ' ' . $back_time) >= Carbon::parse($lend_date . ' ' . $lend_time);
        });
        Paginator::defaultView('vendor.pagination.semantic-ui');
    }

   
}
<?php

namespace App\Providers;
use App\Services\Validation;
use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
	    Validator::resolver(function($translator, $data, $rules, $messages)
	    {
	        return new Validation($translator, $data, $rules, $messages);
	    });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
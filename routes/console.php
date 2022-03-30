<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SpecController;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('generateCustomer {name} {color} {number}' , function($name,$color,$number) {
    app(CustomerController::class)->generateCustomer($name,$color,$number);
    $this->info('Success');
});

Artisan::command('generateCustomers {number}' , function($number) {
    app(CustomerController::class)->generateCustomers($number);
    $this->info('Success');
});

Artisan::command('clearCustomers' , function() {
    app(CustomerController::class)->clear();
    $this->info('Success');
});

Artisan::command('populateList' , function() {
    app(CustomerController::class)->populateCustomers();
    $this->info('Success');
});
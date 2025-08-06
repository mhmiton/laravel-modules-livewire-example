<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Modules\Counter\Livewire\Counter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::get('volt', fn () => view('counter::index'))->name('counters.index');

    Route::get('counter-livewire', Counter::class);

    Volt::route('counter-livewire-class-volt', Counter::class);
    Volt::route('counter-livewire-volt', 'counter::counter-volt');
    Volt::route('counter-pages-volt', 'counter::counter-pages-volt');
    Volt::route('counter-pages-volt-functional', 'counter::counter-pages-volt-functional');
});

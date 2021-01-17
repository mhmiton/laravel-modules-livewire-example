<?php

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

Route::get('/', \Modules\Core\Http\Livewire\Pages\HomePage::class)->name('home');
Route::get('table', \Modules\Core\Http\Livewire\Pages\TablePage::class)->name('table');
Route::get('form', \Modules\Core\Http\Livewire\Pages\FormPage::class)->name('form');

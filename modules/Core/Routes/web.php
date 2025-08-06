<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', \Modules\Core\Livewire\Pages\HomePage::class)->name('home');
Route::get('table', \Modules\Core\Livewire\Pages\TablePage::class)->name('table');
Route::get('form', \Modules\Core\Livewire\Pages\FormPage::class)->name('form');

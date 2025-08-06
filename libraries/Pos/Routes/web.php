<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('pos', \Libraries\Pos\Livewire\Pages\PosPage::class)->name('pos');

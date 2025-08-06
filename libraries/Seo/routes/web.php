<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('seo', \Libraries\Chat\Livewire\Pages\ChatPage::class)->name('seo');

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('chat', \Libraries\Chat\Livewire\Pages\ChatPage::class)->name('chat');

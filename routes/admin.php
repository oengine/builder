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

use OEngine\Builder\Http\Livewire\Builder\Index;
use Illuminate\Support\Facades\Route;

Route::get('test-builder',Index::class);
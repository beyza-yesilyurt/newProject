<?php

use App\Http\Controllers\MainController;
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

Route::get('', [MainController::class, 'index'])->name('homepage');



Route::view('/sidebar','front.layouts.inc.sidebar')->name('sidebar');
Route::view('/header','front.layouts.inc.header')->name('header');
Route::view('/page_content','front.layouts.inc.page_content')->name('page_content');
Route::view('/slider','front.layouts.inc.slider')->name('slider');
Route::view('/head','front.layouts.inc.head')->name('head');
Route::view('/footer','front.layouts.inc.footer')->name('footer');
Route::view('/hide_header','front.layouts.inc.hide_header')->name('hide_header');

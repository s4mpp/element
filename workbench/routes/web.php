<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::view('/', 'home')->name('home');
 

Route::view('/badges', 'elements.badges')->name('badges');
Route::view('/buttons-and-links', 'elements.buttons-and-links')->name('buttons-and-links');
Route::view('/cards', 'elements.cards')->name('cards');
Route::view('/icons', 'elements.icons')->name('icons');
Route::view('/modals', 'elements.modals')->name('modals');
Route::view('/slide-overs', 'elements.slide-overs')->name('slide-overs');
Route::view('/inputs', 'elements.inputs')->name('inputs');
Route::view('/inputs', 'elements.inputs')->name('inputs');
Route::view('/tables', 'elements.tables')->name('tables');


Route::view('/alerts', 'elements.alerts')->name('alerts');
Route::prefix('/flash-messages')->group(function()
{
    Route::view('/', 'elements.flash_messages')->name('flash_messages');
    
    Route::get('/dispatch', function()
    {
        return back()
            ->with('message', 'Message with key message')
            ->with('success-message', 'Success message')
            ->with('info', 'Message with key info')
            ->with('warning-message', 'Message with key warning')
            ->with('error-message', 'Message with key error')
            ->with('info-message', 'Message with key info');

    })->name('dispatch_flash_message');
});

Route::prefix('/error-messages')->group(function()
{
    Route::view('/', 'elements.error_messages')->name('error_messages');
    
    Route::get('/dispatch', function()
    {
        return back()->withErrors('An error has occurred on default key')
        ->withErrors('An exception has occurred on exception key', 'exception-message')
        ->withErrors(['Error in error key', 'other error in error key'], 'error');

    })->name('dispatch_error_message');
});

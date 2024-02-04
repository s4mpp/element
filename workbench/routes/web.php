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
Route::view('/buttons', 'elements.buttons')->name('buttons');
Route::view('/cards', 'elements.cards')->name('cards');
Route::view('/icons', 'elements.icons')->name('icons');
Route::view('/modals', 'elements.modals')->name('modals');
Route::view('/slide-overs', 'elements.slide-overs')->name('slide-overs');

Route::view('/inputs', 'elements.inputs')->name('inputs');

Route::view('/alerts', 'elements.alerts')->name('alerts');

Route::prefix('/flash-messages')->group(function()
{
    Route::view('/', 'elements.flash_messages')->name('flash_messages');
    
    Route::get('/dispatch', function()
    {
        return back()
            ->with('message', 'Message with key "message" (default)')
            ->with('info', 'Message with key "info"')
            ->with('warning-message', 'Message with key "warning-message" with context warning')
            ->with('error-message', 'Message with key "error-message" with context danger')
            ->with('info-message', 'Message with key "info-message" with context info');

    })->name('dispatch_flash_message');
});

Route::prefix('/error-messages')->group(function()
{
    Route::view('/', 'elements.error_messages')->name('error_messages');
    
    Route::get('/dispatch', function()
    {
        return back()->withErrors('An error has occurred (key default)')
        ->withErrors('An exception has occurred (key exception-message)', 'exception-message');

    })->name('dispatch_error_message');
});

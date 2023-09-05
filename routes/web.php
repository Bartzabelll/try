<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\Index;
use App\Http\Livewire\User\Create;
use App\Http\Livewire\User\Edit;
use App\Http\Livewire\Room\Index as RoomIndex;
use App\Http\Livewire\Room\Edit as RoomEdit;
use App\Http\Livewire\Room\Create as RoomCreate;
use App\Http\Livewire\Event\Create as EventCreate;
use App\Http\Livewire\Event\Edit as EventEdit;
use App\Http\Livewire\Event\Index as EventIndex;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('user')->name('user.')->group(function(){
//
    Route::get('/',Index::class)->name('index');
    Route::get('/create',Create::class)->name('create');
    Route::get('edit/{user}', Edit::class)->name('edit');
});

Route::prefix('room')->name('room.')->group(function(){
    //
        Route::get('/',RoomIndex::class)->name('index');
        Route::get('create',RoomCreate::class)->name('create');
        Route::get('edit', RoomEdit::class)->name('edit');

    });

Route::prefix('event')->name('event.')->group(function(){
        //
            Route::get('/',EventIndex::class)->name('index');
            Route::get('create',EventCreate::class)->name('create');
            Route::get('edit/{event}', EventEdit::class)->name('edit');

        });

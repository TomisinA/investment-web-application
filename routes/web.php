<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeasController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\IdeaAssignationsController;

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

Route::get('/login', [UsersController::class, 'login'])
    ->name('login')
    ->middleware('guest');

Route::get('/register', [UsersController::class, 'create'])
    ->name('register')
    ->middleware('guest');

Route::post('/users', [UsersController::class, 'store'])
    ->name('create-user')
    ->middleware('guest');

Route::post('/users/auth', [UsersController::class, 'auth'])
    ->name('auth')
    ->middleware('guest');

Route::post('/logout', [UsersController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');



Route::get('/', [IdeasController::class, 'index'])
    ->name('show-ideas')
    ->middleware('auth');

Route::get('/ideas/create', [IdeasController::class, 'create'])
    ->name('create-idea-form')
    ->middleware('auth');

Route::post('/ideas', [IdeasController::class, 'store'])
    ->name('create-idea')
    ->middleware('auth');

Route::get('/ideas/edit/{idea}', [IdeasController::class, 'edit'])
    ->name('update-idea-form')
    ->middleware('auth');

Route::put('/ideas/{idea}', [IdeasController::class, 'update'])
    ->name('update-idea')
    ->middleware('auth');

Route::delete('/ideas/{idea}', [IdeasController::class, 'destroy'])
    ->name('delete-idea')
    ->middleware('auth');

Route::get('/ideas/{idea}', [IdeasController::class, 'show'])
    ->name('show-idea')
    ->middleware('auth');



Route::post('/assignations', [IdeaAssignationsController::class, 'store'])
    ->name('assign-idea')
    ->middleware('auth');

Route::get('/investors', [IdeaAssignationsController::class, 'investors'])
    ->name('investors')
    ->middleware('auth');

Route::get('/assignations', [IdeaAssignationsController::class, 'assignations'])
    ->name('assignations')
    ->middleware('auth');

Route::get('/accepted', [IdeaAssignationsController::class, 'accepted'])
    ->name('accepted-ideas')
    ->middleware('auth');

Route::get('/rejected', [IdeaAssignationsController::class, 'rejected'])
    ->name('rejected-ideas')
    ->middleware('auth');

Route::post('/assignations/accept/{idea}', [IdeaAssignationsController::class, 'accept'])
    ->name('accept-idea')
    ->middleware('auth');

Route::post('/assignations/reject/{idea}', [IdeaAssignationsController::class, 'reject'])
    ->name('reject-idea')
    ->middleware('auth');

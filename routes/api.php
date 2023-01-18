<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\UserController;

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('singIn', [AuthController::class, 'singIn']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::Get('me', [AuthController::class, 'me']);

});


    // permission Routes For Api
    Route::get('/permission',  [PermissionController::class, 'index'])->name('permissions.index');
	Route::get('/permission/create',  [PermissionController::class, 'store'])->name('permissions.create');
	Route::put('/permission/{id}',  [PermissionController::class, 'update'])->name('permissions.update');
	Route::any('/permission/{id}/destroy',  [PermissionController::class, 'destory'])->name('permissions.destroy');

    // User Routes For APi
    Route::get('/user',  [UserController::class, 'index'])->name('users.index');
	Route::post('/user/create',  [UserController::class, 'store'])->name('users.create');
	Route::put('/user/{id}',  [UserController::class, 'update'])->name('users.update');
	Route::delete('/user/{id}/destroy',  [UserController::class, 'destory'])->name('users.destroy');

    // Role Routes For Api
	Route::get('/role',  [RoleController::class, 'index'])->name('roles.index');
	Route::post('/role/create',  [RoleController::class, 'store'])->name('roles.create');
	Route::put('/role/{id}',  [RoleController::class, 'update'])->name('roles.update');
	Route::delete('/role/{id}/destroy',  [RoleController::class, 'destory'])->name('roles.destroy');
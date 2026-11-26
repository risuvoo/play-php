<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/services', function () {
    return view('services.index');
});

// users
Route::get('/users/{id}',[UserController::class, 'edit'])->whereNumber('id');
Route::get('/users/{name}',[UserController::class, 'show'])->whereAlpha('name');

// products
Route::get('/products/{category}/{id}',[ProductsController::class, 'show']);
Route::get('/products/{id}',[ProductsController::class, 'edit'])->whereUuid('id');

// profile
Route::get('/profile/{name?}',[ProfileController::class, 'show']);

// orders
Route::get('/orders/{id}',[OrdersController::class, 'show'])->whereNumber('id');

// dashboard
Route::get('/dashboard',function(){
    return "This is a dasboard route";
})->name('dashboard.index');

Route::get('/go-dashboard', function(){
    return redirect()->route('dashboard.index');
});

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',function(){
        return "This is admin dashboard route";
    });
    Route::get('/users',function(){
        return "This is admin users route";
    });
    Route::get('/reports', function(){
        return "This is admin reports route";
    });
});

// tasks
// Route::get('/tasks', [TaskController::class, 'index']);
// Route::get('/tasks/create', [TaskController::class, 'create']);
// Route::get('/tasks/{id}', [TaskController::class, 'show']);

Route::resource('/tasks', TaskController::class)->only(['index', 'show', 'destroy']);
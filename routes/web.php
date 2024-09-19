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

Route::get('/', function () {
    return view('client.home');
});

Route::prefix('/admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/categories', function () {
        return view('admin.categories.index');
    })->name('admin.categories.index');

    Route::get('/books', function () {
        return view('admin.books.index');
    })->name('admin.books.index');

    Route::get('/books/create', function () {
        return view('admin.books.create');
    })->name('admin.books.create');

    Route::get('/authors', function () {
        return view('admin.authors.index');
    })->name('admin.authors.index');

    Route::get('/countries', function () {
        return view('admin.countries.index');
    })->name('admin.countries.index');
    
    Route::get('/users', function () {
        return view('admin.users.index');
    })->name('admin.users.index');

    Route::get('/users/create', function () {
        return view('admin.users.create');
    })->name('admin.users.create');

    Route::get('/roles', function () {
        return view('admin.roles.index');
    })->name('admin.roles.index');

    Route::get('/ranks', function () {
        return view('admin.ranks.index');
    })->name('admin.ranks.index');

    Route::get('/currencies', function () {
        return view('admin.currencies.index');
    })->name('admin.currencies.index');

    Route::get('/transactions', function () {
        return view('admin.transactions.index');
    })->name('admin.transactions.index');

    Route::get('/discounts', function () {
        return view('admin.discounts.index');
    })->name('admin.discounts.index');
});

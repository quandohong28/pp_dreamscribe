<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FavouriteController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\RankController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VoucherController;
use App\Http\Controllers\Admin\WalletController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Client\BookController as ClientBookController;
use App\Http\Controllers\Client\HomeController;
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

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('client.home');
    Route::get('/books', [ClientBookController::class, 'index'])->name('client.books.index');
    Route::get('/books/{slug}', [ClientBookController::class, 'show'])->name('client.books.detail');
});

Route::prefix('/auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('auth.postLogin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('auth.postRegister');
    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgotPassword');
    Route::post('/forgot-password', [AuthController::class, 'postForgotPassword'])->name('auth.postForgotPassword');
    Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('auth.resetPassword');
    Route::post('/reset-password', [AuthController::class, 'postResetPassword'])->name('auth.postResetPassword');
});

Route::prefix('/admin')->group(function () {
    $resourceRoutes = [
        'categories' => CategoryController::class,
        'authors' => AuthorController::class,
        'books' => BookController::class,
        'users' => UserController::class,
        'chapters' => ChapterController::class,
        'comments' => CommentController::class,
        'contents' => ContentController::class,
        'countries' => CountryController::class,
        'currencies' => CurrencyController::class,
        'favourites' => FavouriteController::class,
        'histories' => HistoryController::class,
        'payments' => PaymentController::class,
        'ranks' => RankController::class,
        'transactions' => TransactionController::class,
        'vouchers' => VoucherController::class,
        'wallets' => WalletController::class,
    ];

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    foreach ($resourceRoutes as $key => $value) {
        Route::resource($key, $value);
    }
    
})->middleware('auth');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

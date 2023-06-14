<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'listNews']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    if (Auth::user()->is_admin == 1) {
        return redirect('admindashboard');
    }
    return redirect('user-dashboard');
});
Route::get('user-dashboard', [HomeController::class, 'view'])->name('user-dashboard');

// dashboard

Route::middleware('auth', 'adminrole')->group(function () {
    Route::get('admindashboard', [AdminController::class, 'index']);

    // usertable
    Route::get('user', [RegisterController::class, 'userTable']);
    // delete user
    Route::get('delete-user/{id}', [RegisterController::class, 'deleteUser']);
    // status change
    Route::get('active/{id}', [NewsController::class, 'active']);
    Route::get('deactive/{id}', [NewsController::class, 'deactive']);

    // role change
    Route::get('admin-user/{id}', [RegisterController::class, 'adminToUser']);
    Route::get('user-admin/{id}', [RegisterController::class, 'userToAdmin']);

    // newstable

    Route::get('news', [NewsController::class, 'newsTable']);

    Route::get('createnews', [NewsController::class, 'createNews']);

    // news save function
    Route::post('createnews-save', [NewsController::class, 'newsSave']);

    // edit news
    Route::get('edit-news/{id}', [NewsController::class, 'editNews']);

    // update news
    Route::post('update-news', [NewsController::class, 'updateNews']);
    // delete news
    Route::get('delete-news/{id}', [NewsController::class, 'deleteNews']);
});

// news datail
Route::get('news-id/{id}', [HomeController::class, 'newsDetail']);

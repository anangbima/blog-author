<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('auth.index');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::group(['prefix' => '/admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/posts', [AdminController::class, 'posts'])->name('admin.posts');
    Route::get('/tambah-posts', [AdminController::class, 'createPosts'])->name('admin.tambahPosts');
    Route::post('/proses-tambah-posts', [AdminController::class, 'prosesCreatePosts'])->name('admin.prosesTambahPosts');
    Route::get('/edit-posts/{id}', [AdminController::class, 'updatePosts'])->name('admin.editPosts');
    Route::post('/proses-edit-posts', [AdminController::class, 'prosesUpdatePosts'])->name('admin.prosesEditPosts');
    Route::get('/delete-posts/{id}', [AdminController::class, 'deletePosts'])->name('admin.deletePosts');
    Route::get('/accounts', [AdminController::class, 'accounts'])->name('admin.accounts');
    Route::get('/tambah-accounts', [AdminController::class, 'createAccounts'])->name('admin.tambahAccounts');
    Route::post('/proses-tambah-accounts', [AdminController::class, 'prosesCreateAccounts'])->name('admin.prosesTambahAccounts');
    Route::get('/edit-accounts', [AdminController::class, 'updateAccounts'])->name('admin.editAccounts');
    Route::post('/proses-edit-accounts', [AdminController::class, 'prosesUpdateAccounts'])->name('admin.prosesEditAccounts');
    Route::get('/delete-accounts', [AdminController::class, 'deleteAccounts'])->name('admin.deleteAccounts');

});
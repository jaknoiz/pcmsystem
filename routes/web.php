<?php

// routes/web.php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// เส้นทางสำหรับการเข้าสู่ระบบ
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('postlogin');

// เส้นทางสำหรับการลงทะเบียน
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signupsave'])->name('postsignup');;

// เส้นทางสำหรับการออกจากระบบ
Route::post('/logout', [AuthController::class, 'signOut'])->name('logout');

// เส้นทางสำหรับการจัดการข้อมูล
Route::get('/page', [AuthController::class, 'index'])->middleware('auth');
Route::get('/page/list', [AuthController::class, 'list'])->middleware('auth');
Route::get('/page/create', [AuthController::class, 'showCreateForm'])->middleware('auth');
Route::post('/page', [AuthController::class, 'add'])->middleware('auth');
Route::get('/page/{id}/edit', [AuthController::class, 'edit'])->middleware('auth');
Route::put('/page/{id}', [AuthController::class, 'update'])->middleware('auth');

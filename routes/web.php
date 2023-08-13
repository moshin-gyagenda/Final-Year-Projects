<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\NotificationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    
    
});
Route::controller(UserController::class)->group(function() {
    Route::get('/login', 'index')->name('login');
    Route::post('user-login', 'login')->name('user-login');
    Route::get('logout', 'logout')->name('logout');
    Route::get('/register', 'create')->name('register');
    Route::post('user-register', 'store')->name('user-register');
});
//codes for the admin dashboard
Route::group(['middleware' =>['auth:sanctum']], function() {
    //Admin Dashboard
    Route::controller(DashboardController::class)->group(function() {
        Route::get('dashboard', 'index')->name('dashboard');
 
    });
    //Student Admissions
    Route::controller(AdmissionController::class)->group(function() {
        Route::get('add-admission', 'index')->name('add-admission');
        Route::post('submit-admission', 'store')->name('submit-admission');
        Route::get('admission-list', 'create')->name('admission-list');
    });
    Route::controller(StudentController::class)->group(function() {
        Route::get('add-student', 'index')->name('add-student');
        Route::post('submit-student-details', 'store')->name('submit-student-details');
        Route::get('view-student', 'create')->name('view-student');
        Route::delete('/students/{student}', 'destroy')->name('student-delete');
        Route::get('/students/{student}/edit', 'edit')->name('student-details');
        Route::get('/students/{student}/update', 'show')->name('student-edit');
        Route::put('/students/{student}', 'update')->name('update-student');

    });
    //Teacher routes
    Route::controller(TeacherController::class)->group(function() {
        Route::get('add-teacher', 'index')->name('add-teacher');
        Route::post('submit-teacher-details', 'store')->name('submit-teacher-details');
        Route::get('teacher-list', 'create')->name('teacher-list');
    });

    Route::controller(NotificationController::class)->group(function() {
    Route::get('/notifications/{id}/markAsRead', 'markAsRead')->name('notifications.markAsRead');
    Route::get('/notifications/clear-all', 'clearAll')->name('notifications.clearAll');

    });

 });
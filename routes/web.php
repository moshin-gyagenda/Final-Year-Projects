<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\VisitorCheckController;

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
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
        Route::put('/admissions/{id}', 'update')->name('admissions.update');
        Route::get('/admissions/{id}',  'edit')->name('admissions.show');
    });
    
    Route::controller(NotificationController::class)->group(function() {
    Route::get('/notifications/{id}/markAsRead', 'markAsRead')->name('notifications.markAsRead');
    Route::get('/notifications/clear-all', 'clearAll')->name('notifications.clearAll');

    });

    Route::controller(VisitorController::class)->group(function() {
        Route::get('add-vistor', 'index')->name('add-vistor');
        Route::post('submit', 'store')->name('submit');
        Route::get('vistor-list', 'create')->name('vistor-list');
        Route::get('check-out', 'check')->name('check-out');
        });

        Route::controller(UserController::class)->group(function() {
            Route::get('create-user', 'createuser')->name('create-user');
            Route::post('submit-user', 'store')->name('submit-user');
            Route::get('view-users', 'show')->name('view-users');
        });

        Route::controller(VisitorCheckController::class)->group(function() {
            Route::post('/visitor/check-in',  'checkInVisitor')->name('visitor.check-in');
            Route::post('/visitor/check-out',  'checkOutVisitor')->name('visitor.check-out');
            Route::get('visitors-report', 'index')->name('visitors-report');
            Route::get('check-in', 'visitor')->name('check-in');
        }); 
 
    });
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlluserController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\AttendanceController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});



Route::get('/', function () {
    return view('auth.login');
});
Route::get('/dashbord', function () {
    return view('admin.index');
});
Route::get('/login', function () {
    return view('login');
});
Route::POST('/loginclick',[AlluserController::class,'login'])->name('loginclick');
Route::get('logout',[AlluserController::class,'logout'])->name('admin.logout');


// Users All Routes
Route::prefix('users')->group(function (){

    Route::get('/view' , [UserController::class , 'UserView'])->name('user.view');
    Route::get('/add' , [UserController::class , 'UserAdd'])->name('users.add');
    Route::post('/store' , [UserController::class , 'UserStore'])->name('users.store');

});

//Employee Attendance All Routes



Route::prefix('employees')->group(function(){

   
    Route::get('attendance/employee/view',[AttendanceController::class, 'AttendanceView'])->name('attendance.view');

    Route::get('attendance/employee/add',[AttendanceController::class, 'AttendanceAdd'])->name('employee.attendance.add');
  
    Route::post('attendance/employee/store',[AttendanceController::class, 'AttendanceStore'])->name('employee.attendance.store');

    Route::get('attendance/employee/edit/{date}',[AttendanceController::class, 'AttendanceEdit'])->name('employee.attendance.edit');

    Route::get('attendance/employee/details/{date}',[AttendanceController::class, 'AttendanceDetails'])->name('employee.attendance.details');

    Route::get('/attendance/search',[AttendanceController::class, 'search'])->name('search');

});



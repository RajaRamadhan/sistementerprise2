<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\AttendanceController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\CRMController;

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

// Redirect to login if user is not authenticated
Route::get('/', function () {
    return redirect('/dashboard');
});

// Dashboard route, only accessible by authenticated users
Route::get('/dashboard', function () {
    return view('admin.blank.index');
})->name('dashboard');


    // Route untuk Submenu 1
Route::get('/submenu1', [AdminController::class, 'submenu1'])->name('submenu1');

Route::resource('users', UserController::class);

Route::resource('roles', RoleController::class);

Route::resource('departments', DepartmentController::class);

Route::resource('employees', EmployeesController::class);
// Rute untuk Employees
Route::prefix('admin')->group(function () {
    Route::resource('employees', EmployeesController::class);
});

Route::resource('payroll', PayrollController::class);
Route::get('/payrolls', [PayrollController::class, 'index'])->name('payroll.index');

Route::resource('leave', \App\Http\Controllers\LeaveController::class);

Route::resource('attendance', AttendanceController::class);

//Email

Route::get('/send-email', [EmailController::class, 'send'])->name('admin.email.test');

Route::get('/send-promotion', [CRMController::class, 'showSendPromotionForm']);
Route::post('/send-promotion', [CRMController::class, 'sendPromotion'])->name('send.promotion');
Route::get('/send-promotion', [CRMController::class, 'showSendPromotionForm'])->name('send.promotion.form');

use App\Http\Controllers\PromotionController;
Route::get('/promotions', [PromotionController::class, 'index'])->name('crm.promotions');


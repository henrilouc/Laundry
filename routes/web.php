<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LaundryServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('verifyProfile')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/', function () {
    return view('welcome');
});
    Auth::routes();

Route::get('/comprar/{laundryServices?}',  [LaundryServiceController::class, 'index'])->name('laundryService');
Route::get('/buscar/',  [LaundryServiceController::class, 'show'])->name('laundryService.show');
Route::post('/comprar',  [LaundryServiceController::class, 'store'])->name('laundryService.form');

Route::get('/admin/solicitacoes', [UserController::class, 'search'])->name('user.search');

Route::get('/admin/pagamento', [LaundryServiceController::class, 'indexManage'])->name('manage');

Route::get('/admin/pagamentos', [LaundryServiceController::class, 'showPayments'])->name('manage.search');


Route::get('/admin/extrato', [LaundryServiceController::class, 'indexExtract'])->name('extract');

Route::get('/admin/extratos', [LaundryServiceController::class, 'extract'])->name('extract.search');

Route::get('/waiting', [LoginController::class, 'indexGuest'])->name('waiting');

Route::get('/admin' , [LoginController::class, 'indexAdmin'])->name('admin');

Route::get('/aprovar/{id}' , [UserController::class, 'approveRequest'])->name('admin.approve');
Route::get('/aprovar-pagamento/{id}' , [LaundryServiceController::class, 'approvePayin'])->name('admin.payinApprove');

Route::get('/rejeitar/{id}' , [UserController::class, 'rejectRequest'])->name('admin.reject');
Route::get('/rejeitar-pagamento/{id}' , [LaundryServiceController::class, 'rejectPayin'])->name('admin.payinReject');



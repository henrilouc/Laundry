<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\LaundryServiceController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SaleController;
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

Auth::routes();
Route::post('/registrando',  [\App\Http\Controllers\RegisterController::class, 'createUser'])->name('user.register');
Route::get('/registrar',  [\App\Http\Controllers\RegisterController::class, 'index'])->name('show.register');
Route::middleware('verifyProfile')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', function () {
        return view('auth.login');
    });

});

Route::middleware('user')->group(function () {

    Route::get('/comprar/{laundryServices?}',  [LaundryServiceController::class, 'index'])->name('laundryService');

    Route::post('/comprar',  [LaundryServiceController::class, 'store'])->name('laundryService.form');

    Route::get('/buscar/',  [LaundryServiceController::class, 'show'])->name('laundryService.show');
});

Route::middleware('pre_user')->group(function () {

    Route::get('/waiting', [LoginController::class, 'indexGuest'])->name('waiting');

});

Route::middleware('admin')->group(function () {
    Route::prefix('admin')->group(function (){

        Route::get('/solicitacoes', [UserController::class, 'search'])->name('user.search');

        Route::get('/pagamento', [LaundryServiceController::class, 'indexManage'])->name('manage');
        Route::post('/comprar',  [LaundryServiceController::class, 'adminStore'])->name('manageLaundryService.form');
        Route::post('/pagamento-avulso', [LaundryServiceController::class, 'storePayment'])->name('manage.form');
        Route::get('/compra', [LaundryServiceController::class, 'showPaymentManage'])->name('manage.store');
        Route::get('/pagamentos', [LaundryServiceController::class, 'showPayments'])->name('manage.search');

        Route::get('/gerir-venda', [SaleController::class, 'index'])->name('manageSale');
        Route::get('/gerir-vendas', [SaleController::class, 'show'])->name('manageSale.show');
        Route::post('/add-venda', [SaleController::class, 'store'])->name('manageSale.form');

        Route::get('/extrato', [LaundryServiceController::class, 'indexExtract'])->name('extract');
        Route::get('/extratos', [LaundryServiceController::class, 'extract'])->name('extract.show');

        Route::get('/gerir-preco', [PriceController::class, 'index'])->name('managePrice');
        Route::get('/gerir-precos', [PriceController::class, 'show'])->name('managePrice.show');
        Route::get('/remover-precos/{id}', [PriceController::class, 'softDelete'])->name('managePrice.deletes');
        Route::post('/add-preco', [PriceController::class, 'store'])->name('managePrice.form');

        Route::get('/gerir-roupa', [ClothController::class, 'index'])->name('manageCloth');
        Route::get('/gerir-roupas', [ClothController::class, 'show'])->name('manageCloth.show');
        Route::get('/remover-preco/{id}', [ClothController::class, 'softDelete'])->name('manageCloth.remove');
        Route::post('/add-roupa', [ClothController::class, 'store'])->name('manageCloth.form');

        Route::get('/dashboard', [LaundryServiceController::class, 'dashboard'])->name('dashboard');

        Route::get('/' , [LoginController::class, 'indexAdmin'])->name('admin');
    });

    Route::post('/aprovar' , [UserController::class, 'approveRequest'])->name('admin.approves');
    Route::get('/aprovar-pagamento/{id}' , [LaundryServiceController::class, 'approvePayin'])->name('admin.payinApprove');

    Route::get('/rejeitar/{id}' , [UserController::class, 'rejectRequest'])->name('admin.reject');
    Route::get('/rejeitar-pagamento/{id}' , [LaundryServiceController::class, 'rejectPayin'])->name('admin.payinReject');

    Route::get('/relatorio' , [ReportController::class, 'generatePDF'])->name('admin.report');
});




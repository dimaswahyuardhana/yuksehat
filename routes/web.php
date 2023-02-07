<?php

use App\Http\Controllers\Api\apiResepController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\DokterController as FrontendDokterController;
use App\Http\Controllers\Frontend\ObatController as FrontendObatController;
use App\Http\Controllers\Frontend\RsController as FrontendRsController;
use App\Http\Controllers\Frontend\TransactionController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\RsController;
use App\Http\Controllers\TransactionController as AdminTransactionController;
use App\Http\Controllers\UserController;
use App\Models\Obat;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//routing landingpage
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('landingpage.home');
});
Route::get('/about', function () {
    return view('landingpage.about');
});
Route::get('/contact', function () {
    return view('landingpage.kontak');
});

Route::get('/info', function () {
    return view('landingpage.info');
});
Route::get('/info_detail', function () {
    return view('landingpage.info_detail');
});

// dokter
Route::get('/doctor', [FrontendDokterController::class, 'index']);

// rs
Route::get('/daftar_rs', [FrontendRsController::class, 'index'])->name('daftar-rs');
Route::get('/detail-rs/{id}', [FrontendRsController::class, 'detail'])->name('detail-rs');

// obat
Route::get('/obat', function () {
    $obats = Obat::all();
    return view('landingpage.obat', compact('obats'));
});
Route::get('/beli_obat', function () {
    return view('landingpage.beli_obat');
});
Route::get('/detail_obat/{id}', [FrontendObatController::class, 'detail_obat']);

// sukses checkout
Route::get('/success', [TransactionController::class, 'success']);

Route::middleware(['auth'])->group(function () {
    // cart
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::post('/cart/{id}', [FrontendObatController::class, 'cartAdd'])->name('cart-add');
    Route::delete('/cart/{id}', [CartController::class, 'cartDelete'])->name('cart-delete');

    // checkout
    // Route::post('/pesan_obat', [CartController::class, 'pesan'])->name('pesan-obat');
    Route::post('/checkout', [TransactionController::class, 'store'])->name('chekout');

    // rumah sakit
    Route::get('/checkIn/{id}', [FrontendRsController::class, 'checkIn'])->name('form-check');
    Route::post('/checkIn', [FrontendRsController::class, 'store'])->name('checkIn');
});


Route::get('/login', function () {
    return view('landingpage.login');
});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    // controller dokter
    Route::resource('admin/dokter', DokterController::class);

    // controller obat
    Route::resource('admin/obat', ObatController::class);
    Route::get('/downloadExcel', [ObatController::class, 'exportExcel'])->name('download-excel');

    // controller resep
    Route::resource('admin-resep', ResepController::class);
    Route::get('/resep-cetak-pdf', [ResepController::class, 'exportPdf'])->name('resep-pdf');

    // controller user
    Route::resource('admin-user', UserController::class);
    Route::get('/downloadExcel/user', [UserController::class, 'exportExcel'])->name('download-excel-user');

    // controller pasien
    Route::resource('admin-pasien', PasienController::class);

    // controller RS
    Route::get('/rumah-sakit', [RsController::class, 'index'])->name('rumah-sakit');

    // controller Transaksi
    Route::resource('admin-transaksi', AdminTransactionController::class);

    // controller kamar
    Route::resource('admin-kamar', KamarController::class);

    // controller checkIn
    Route::resource('checkIn', CheckInController::class);
});



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route api
Route::get('/resep', [apiResepController::class, 'index']);
Route::get('/resep-detail/{id}', [apiResepController::class, 'getResep']);

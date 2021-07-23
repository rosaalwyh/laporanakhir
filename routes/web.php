<?php 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});

//User
    Route::view('/', 'page.user.home')->name('home');
    Route::view('/kuota', 'page.user.kuota')->name('kuotapkl');
    Route::view('/registrasi', 'authentikasi.admin.registrasi')->name('registrasi');
    Route::post('/create', 'UserController@create')->name('regis');
    Route::view('/login', 'authentikasi.admin.login')->name('login');
    Route::post('/proseslogin', 'LoginController@checklogin')->name('ceklogin'); 
    Route::view('/blank_page','blank_page')->name('blank_page');

//Admin 1
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['auth','IsAdmin', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'AdminController@index')->name('dashboard');
        Route::post('/logout', 'AdminController@logout')->name('logout');
        Route::get('/pendaftar', 'PendaftarController@index')->name('pendaftar');
        Route::post('/tambahpendaftar', 'PendaftarController@tambahPendaftar')->name('tambahpendaftar');
        Route::get('/peserta', 'PesertaController@index')->name('peserta');
        Route::get('/mentor', 'MentorController@index')->name('mentor');
        Route::get('/diklat', 'DiklatController@index')->name('diklat');
        Route::get('/pimpinan', 'PimpinanController@index')->name('pimpinan');
        Route::get('/nilai', 'NilaiController@index')->name('nilai');
    });
});

//User 2
Route::prefix('user')->name('user.')->group(function () {
    Route::middleware(['auth', 'IsUser' , 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'UserController@index')->name('dashboard');
    });
});

//BagianDiklat 3
Route::prefix('diklat')->name('diklat.')->group(function () {
    Route::middleware(['auth', 'IsDiklat', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'DiklatController@index')->name('dashboard');
    });
});

//Mentor 4
Route::prefix('mentor')->name('mentor.')->group(function () {
    Route::middleware(['auth', 'IsMentor', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'MentorController@index')->name('dashboard');
    });
});

//Pimpinan 5
Route::prefix('pimpinan')->name('pimpinan.')->group(function () {
    Route::middleware(['auth', 'IsPimpinan', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'PimpinanController@index')->name('dashboard');
    });
});

//Peserta 6
Route::prefix('peserta')->name('peserta.')->group(function () {
    Route::middleware(['auth', 'IsPeserta', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'PesertaController@index')->name('dashboard');
    });
});

//Pendaftar 7
Route::prefix('pendaftar')->name('pendaftar.')->group(function () {
    Route::middleware(['auth', 'IsPendaftar', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'PendaftarController@index')->name('dashboard');
    });
});
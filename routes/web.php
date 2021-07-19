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
    Route::view('/', 'welcome')->name('home');
    Route::view('/registrasi', 'authentikasi.admin.registrasi')->name('registrasi');
    Route::post('/create', 'LoginController@create')->name('regis');
    Route::view('/login', 'authentikasi.admin.login')->name('login');
    Route::post('/proseslogin', 'LoginController@checklogin')->name('ceklogin'); 
    Route::view('/blank_page','blank_page')->name('blank_page');

//Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['auth','IsAdmin', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'AdminController@index')->name('dashboard');
        Route::post('/logout', 'AdminController@logout')->name('logout');
    });
});

//User
Route::prefix('user')->name('user.')->group(function () {
    Route::middleware(['auth', 'IsUser' , 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'UserController@index')->name('dashboard');
    });
});

//BagianDiklat
Route::prefix('diklat')->name('diklat.')->group(function () {
    Route::middleware(['auth', 'isDiklat', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'DiklatController@index')->name('dashboard');
    });
});
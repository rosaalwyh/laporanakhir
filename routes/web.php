<?php 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MentorController;

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
        //User
        Route::get('/user', 'UserController@tambah')->name('user');
        Route::post('/user', 'UserController@addUser')->name('add_user');
        Route::get('/edit_user/{id}', 'UserController@show')->name('edit_user');
        Route::post('/update_user/{id}', 'UserController@update')->name('userupdate');
        // Admin
        Route::get('/dashboard', 'AdminController@index')->name('dashboard');
        Route::post('/logout', 'AdminController@logout')->name('logout');
        //Pendaftar
        Route::get('/pendaftar', 'PendaftarController@index')->name('pendaftar');
        // Route::post('/tambahpendaftar', 'PendaftarController@tambahPendaftar')->name('tambahpendaftar');
        //Peserta
        Route::get('/peserta', 'PesertaController@index')->name('peserta');
        Route::post('/tambahpeserta', 'PesertaController@tambahPeserta')->name('tambahpeserta');
        //Mentor
        Route::get('/mentor', 'MentorController@index')->name('mentor');
        Route::post('tambahmentor', 'MentorController@tambahMentor')->name('tambahmentor');
        //Diklat
        Route::get('/diklat', 'DiklatController@index')->name('diklat');
        Route::post('/creatediklat', 'DiklatController@tambahDiklat')->name('creatediklat');
        Route::match(['get','post'],'/editdiklat/{id}', 'DiklatController@edit')->name('editdiklat');
        //Pimpinan
        Route::get('/pimpinan', 'PimpinanController@index')->name('pimpinan');
        Route::post('/tambahpimpinan', 'PimpinanController@tambahPimpinan')->name('tambahpimpinan');
        //Nilai
        Route::get('/nilai', 'NilaiController@index')->name('nilai');
        Route::get('/formnilai/{id}', 'NilaiController@formEmailNilai')->name('formsurat');
        Route::post('/kirim-nilai/{id}','NilaiController@sendNilai')->name('sendNilai');
        //Sertifikat
        Route::get('/sertifikat', 'SertifikatController@index')->name('sertifikat');
        Route::get('/formsertifikat/{id}', 'SertifikatController@formEmailSertifikat')->name('formsertifikat');
        Route::post('/kirim-sertifikat/{id}','SertifikatController@sendSertifikat')->name('sendSertifikat');
        //Surat Balasan
        Route::get('/suratbalasan', 'SuratBalasanController@index')->name('suratbalasan');
        Route::post('/tambahsuratbalasan', 'SuratBalasanController@addSurat')->name('tambahsuratbalasan');
        Route::get('/formsurat/{id}', 'SuratBalasanController@formEmailSurat')->name('formsurat');
        Route::post('/kirim-email/{id}','SuratBalasanController@sendSuratBalasan')->name('sendSuratBalasan');
    });
});

//User 2
Route::prefix('user')->name('user.')->group(function () {
    Route::middleware(['auth', 'IsUser' , 'PreventBackHistory'])->group(function () {
        // Route::get('/dashboard', 'UserController@index')->name('dashboard');
        Route::post('/logout', 'UserController@logout')->name('logout');
        Route::get('/pengajuan', 'PendaftarController@pengajuan')->name('pengajuan');
        Route::post('/addpendaftar', 'PendaftarController@addPendaftar')->name('addpendaftar');
    });
});

//BagianDiklat 3
Route::prefix('diklat')->name('diklat.')->group(function () {
    Route::middleware(['auth', 'IsDiklat', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'DiklatController@getDataDiklat')->name('dashboard');
        Route::post('creatediklat', 'DiklatController@tambahDiklat')->name('creatediklat');
        Route::get('/pendaftar/rekomendasi/{id}', 'DiklatController@rekomendasi')->name('rekomendasi');
        Route::get('/pendaftar/penuh/{id}', 'DiklatController@penuh')->name('penuh');
    });
});

//Mentor 4
Route::prefix('mentor')->name('mentor.')->group(function () {
    Route::middleware(['auth', 'IsMentor', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'MentorController@getDataMentor')->name('dashboard');
    });
});

//Pimpinan 5
Route::prefix('pimpinan')->name('pimpinan.')->group(function () {
    Route::middleware(['auth', 'IsPimpinan', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'PimpinanController@getDataPimpinan')->name('dashboard');
        Route::get('/pendaftar/terima/{id}', 'PimpinanController@terima')->name('terima');
        Route::get('/pendaftar/tolak/{id}', 'PimpinanzController@tolak')->name('tolak');
    });
});

//Peserta 6
Route::prefix('peserta')->name('peserta.')->group(function () {
    Route::middleware(['auth', 'IsPeserta', 'PreventBackHistory'])->group(function () {
        Route::get('/dashboard', 'PesertaController@getDataPeserta')->name('dashboard');
    });
});

//Pendaftar 7
Route::prefix('pendaftar')->name('pendaftar.')->group(function () {
    Route::middleware(['auth', 'IsPendaftar', 'PreventBackHistory'])->group(function () {
        // Route::get('/pengajuan', 'PendaftarController@pengajuan')->name('dashboard');
        Route::get('/dashboard', 'PendaftarController@pengajuan')->name('dashboard');
        Route::get('/suratbalasan', 'PendaftarController@surat')->name('suratbalasan');
    });
});
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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

Route::get('login', function () {
    return view('client.auth.login');
})->name('login');
Route::post('/log-masuk', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('log-masuk');

Route::get('/register2', function () {
    return view('client.auth.register');
});
Route::post('daftar', [App\Http\Controllers\UserController::class, 'store'])->name('daftar');

Route::get('/daftarAkaun', function () {
    return view('client.auth.daftarAkaun');
});

Route::get('/test', function () {
    return view('client.auth.test');
});

Route::get('/testValidation', function () {
    return view('client.testValidation');
});

Route::middleware(['auth'])->group(function () {

    // Route::post('daftar',[UserController::class, 'store'])->name('daftar');
    // Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::get('logout',[UserController::class, 'logout'])->name('logout');

    // Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    // Route::get('logout',[Auth\LoginController::class, 'logout'])->name('logout');

    Route::get('/forgotPassword', function () {
        return view('client.auth.forgotPassword');
    });

    Route::get('/profile-user', function () {
        return view('client.pages-account-settings-account');
    });

    Route::get('/reset-password', function () {
        return view('client.pages-account-settings-security');
    });

    Route::get('/dashboard', function () {
        return view('client.dashboard.dashboard');
    });

    ## permohonan BKIL
    Route::get('/permohonan', function () {
        return view('client.forms.form-permohonan');
    });
    // Route::post('permohonanBKIL', 'PermohonanController@store')->name('permohonanBKIL');
    Route::post('permohonanBKIL', [App\Http\Controllers\PermohonanController::class, 'store'])->name('permohonanBKIL');

    ## senarai projek
    Route::get('/listProject', function () {
        // return view('client.datatable.datatable-listProject');
        return view('client.datatable.tables-datatables-basic');
    });

    Route::get('/lta', function () {
        return view('client.navbar.app-calendar');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});

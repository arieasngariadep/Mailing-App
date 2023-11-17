<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

/*p
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/user', function () {
    // me-return view
    return view('user.user');
    });
route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');

route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function (){
    route::get('/home', [HomeController::class, 'halamandashboard'])->name('home');
    route::get('/register', [RegisterController::class, 'register_surat'])->name('register');
    route::post('/importregister', [RegisterController::class, 'registerImportExcel'])->name('importregister');
    route::get('/exportsurat', [RegisterController::class, 'registersuratExport'])->name('exportsurat');
    route::get('/createsurat', [RegisterController::class, 'createSurat'])->name('createsurat');
    route::post('/prosestambah', [RegisterController::class, 'prosesCreate'])->name('prosestambah');
    route::get('/editsurat/{id}', [RegisterController::class, 'editSurat'])->name('editsurat');
    route::post('/prosesedit/{id}', [RegisterController::class, 'proseseditSurat'])->name('prosesedit');
    route::get('/deletesurat/{id}', [RegisterController::class, 'deleteSurat'])->name('deletesurat');
    route::get('/user', [UserController::class, 'user'])->name('user');
    route::get('/createuser', [UserController::class, 'createUser'])->name('createuser');
    route::post('/prosestambahuser', [UserController::class, 'prosesCreateUser'])->name('prosestambahuser');
    route::get('/edituser/{id}', [UserController::class, 'editUser'])->name('edituser');
    route::post('/prosesedituser/{id}', [UserController::class, 'prosesUpdateUser'])->name('prosesedituser');
    route::get('/deleteuser/{id}', [UserController::class, 'deleteUser'])->name('deleteuser');
});

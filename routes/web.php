<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ItsupportController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouterController;
use App\Http\Controllers\StiController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/offices', [OfficeController::class, 'index'])->name('offices.index');
Route::get('/offices/create', [OfficeController::class, 'create'])->name('offices.create');
Route::post('/offices', [OfficeController::class, 'store'])->name('offices.store');
Route::get('/offices/{office}', [OfficeController::class, 'show'])->name('offices.show');
Route::get('/offices/{office}/edit', [OfficeController::class, 'edit'])->name('offices.edit');
Route::patch('/offices/{office}', [OfficeController::class, 'update'])->name('offices.update');

Route::get('/stis', [StiController::class, 'index'])->name('stis.index');
Route::get('/stis/create', [StiController::class, 'create'])->name('stis.create');
Route::post('/stis', [StiController::class, 'store'])->name('stis.store');
Route::get('/stis/{office}', [StiController::class, 'show'])->name('stis.show');
Route::get('/stis/{office}/edit', [StiController::class, 'edit'])->name('stis.edit');
Route::patch('/stis/{office}', [StiController::class, 'update'])->name('stis.update');

Route::get('/routers', [RouterController::class, 'index'])->name('routers.index');
Route::get('/routers/create', [RouterController::class, 'create'])->name('routers.create');
Route::post('/routers', [RouterController::class, 'store'])->name('routers.store');
Route::get('/routers/{office}', [RouterController::class, 'show'])->name('routers.show');
Route::get('/routers/{office}/edit', [RouterController::class, 'edit'])->name('routers.edit');
Route::patch('/routers/{office}', [RouterController::class, 'update'])->name('routers.update');

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');
Route::get('/profiles/{office}', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/profiles/{office}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
Route::patch('/profiles/{office}', [ProfileController::class, 'update'])->name('profiles.update');

Route::get('/networks', [NetworkController::class, 'index'])->name('networks.index');
Route::get('/networks/create', [NetworkController::class, 'create'])->name('networks.create');
Route::post('/networks', [NetworkController::class, 'store'])->name('networks.store');
Route::get('/networks/{office}', [NetworkController::class, 'show'])->name('networks.show');
Route::get('/networks/{office}/edit', [NetworkController::class, 'edit'])->name('networks.edit');
Route::patch('/networks/{office}', [NetworkController::class, 'update'])->name('networks.update');

Route::get('/itsupports', [ItsupportController::class, 'index'])->name('itsupports.index');
Route::get('/itsupports/create', [ItsupportController::class, 'create'])->name('itsupports.create');
Route::post('/itsupports', [ItsupportController::class, 'store'])->name('itsupports.store');
Route::get('/itsupports/{office}', [ItsupportController::class, 'show'])->name('itsupports.show');
Route::get('/itsupports/{office}/edit', [ItsupportController::class, 'edit'])->name('itsupports.edit');
Route::patch('/itsupports/{office}', [ItsupportController::class, 'update'])->name('itsupports.update');

Route::get('/computers', [ComputerController::class, 'index'])->name('computers.index');
Route::get('/computers/create', [ComputerController::class, 'create'])->name('computers.create');
Route::post('/computers', [ComputerController::class, 'store'])->name('computers.store');
Route::get('/computers/{office}', [ComputerController::class, 'show'])->name('computers.show');
Route::get('/computers/{office}/edit', [ComputerController::class, 'edit'])->name('computers.edit');
Route::patch('/computers/{office}', [ComputerController::class, 'update'])->name('computers.update');

Route::get('/addresses', [AddressController::class, 'index'])->name('addresses.index');
Route::get('/addresses/create', [AddressController::class, 'create'])->name('addresses.create');
Route::post('/addresses', [AddressController::class, 'store'])->name('addresses.store');
Route::get('/addresses/{office}', [AddressController::class, 'show'])->name('addresses.show');
Route::get('/addresses/{office}/edit', [AddressController::class, 'edit'])->name('addresses.edit');
Route::patch('/addresses/{office}', [AddressController::class, 'update'])->name('addresses.update');

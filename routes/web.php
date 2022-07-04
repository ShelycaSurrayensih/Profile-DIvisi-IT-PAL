<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\HotissueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QnaController;
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
// Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/', [DepartmentController::class, 'index'])->name('department.index');
Route::get('about-us', [AboutController::class, 'index'])->name('about.aboutus');
Route::get('departement', [ServiceController::class, 'index'])->name('Services.Departement');
Route::get('visi', [VisiController::class, 'index'])->name('visimisi.visi');
Route::get('hotissue', [HotissueController::class, 'index'])->name('Services.hotissue');
Route::get('structure', [StructureController::class, 'index'])->name('structure.structurediv');
Route::get('galeri', [GaleriController::class, 'index'])->name('galeri.galeri');
Route::get('contact', [ContactController::class, 'index'])->name('contact.contacts');
Route::get('qna', [QnaController::class, 'index'])->name('qna.qna');

// Route::get('/', function () {
//     return view('welcome');
// });

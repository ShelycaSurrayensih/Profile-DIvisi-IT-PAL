<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgalleryController;
use App\Http\Controllers\AsharingController;
use App\Http\Controllers\AuserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\HotissueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FungsidihController;
use App\Http\Controllers\FungsidpaController;
use App\Http\Controllers\KedudukandihController;
use App\Http\Controllers\KedudukandpaController;
use App\Http\Controllers\QnaController;
use App\Http\Controllers\SharingController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\TugasdihController;
use App\Http\Controllers\TugasdpaController;
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
Route::get('sharing', [SharingController::class, 'index'])->name('Services.sharing');
Route::get('sharing/detail{id}', [SharingController::class, 'show'])->name('detail');
Route::get('structure', [StructureController::class, 'index'])->name('structure.structurediv');
Route::get('galeri', [GaleriController::class, 'index'])->name('galeri.galeri');
Route::get('contact', [ContactController::class, 'index'])->name('contact.contacts');
Route::get('qna', [QnaController::class, 'index'])->name('qna.qna');
Route::get('tugas', [TugasController::class, 'index'])->name('Services.tugastanggungjawab');
Route::get('fungsidih', [FungsidihController::class, 'index'])->name('Services.fungsidih');
Route::get('fungsidpa', [FungsidpaController::class, 'index'])->name('Services.fungsidpa');
Route::get('kedudukandih', [KedudukandihController::class, 'index'])->name('Services.kedudukandih');
Route::get('kedudukandpa', [KedudukandpaController::class, 'index'])->name('Services.kedudukandpa');
Route::get('tugasdih', [TugasdihController::class, 'index'])->name('Services.tugasdih');
Route::get('tugasdpa', [TugasdpaController::class, 'index'])->name('Services.tugasdpa');
Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/gallery/', [AgalleryController::class, 'index'])->name('admin.gallery');
Route::get('/admin/sharing/', [AsharingController::class, 'index'])->name('admin.sharing');
Route::post('/admin/sharing/', [AsharingController::class, 'store'])->name('Asharing.store');
Route::get('/admin/sharing/{id}/destroy', [SharingController::class, 'destroy'])->name('Asharing.destroy');
Route::get('/admin/user/', [AuserController::class, 'index'])->name('admin.user');

// Route::get('/', function () {
//     return view('welcome');
// });

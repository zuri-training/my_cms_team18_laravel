<?php

use App\Http\Controllers\OriginalTemplateController;
use App\Http\Controllers\UserTemplateController;
use App\Models\OriginalTemplate;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/template', [OriginalTemplateController::class, 'publicIndex'])->name('public.template.index');
Route::get('/template/{originalTemplate}/preview', [OriginalTemplateController::class, 'show'])->name('public.template.preview');
Route::get('/template/{originalTemplate}/iframe', [OriginalTemplateController::class, 'iframe'])->name('public.template.iframe');

Route::group(['middleware' => 'auth'], function () {
    // Admin routes //
    //
    // view templates
    Route::get('/admin/template', [OriginalTemplateController::class, 'index'])->name('original.template.index');
    // create template
    Route::get('/admin/template/create', [OriginalTemplateController::class, 'create'])->name('original.template.create');
    // save template
    Route::post('/admin/template/store', [OriginalTemplateController::class, 'store'])->name('original.template.store');
    // edit template
    Route::get('/admin/template/{originalTemplate}/edit', [OriginalTemplateController::class, 'edit'])->name('original.template.edit');
    // update template
    Route::put('/admin/template/{originalTemplate}/update', [OriginalTemplateController::class, 'update'])->name('original.template.update');
    // preview template
    Route::get('/admin/template/{originalTemplate}/preview', [OriginalTemplateController::class, 'show'])->name('original.template.preview');
    Route::get('/admin/template/{originalTemplate}/iframe', [OriginalTemplateController::class, 'iframe'])->name('original.template.iframe');
    // delete template
    Route::delete('/admin/template/{originalTemplate}/destroy', [OriginalTemplateController::class, 'destroy'])->name('original.template.destroy');

    // view staffs
    // add staff
    // edit staff
    // delete staff

    // User routes //
    //
    // my-templates
    Route::get('/my-templates', [UserTemplateController::class, 'index'])->name('user.template.index');
    // modify template
    Route::get('/template/{originalTemplate}/modify', [OriginalTemplateController::class, 'modify'])->name('public.template.modify');
    // save template
    Route::post('/template/store', [UserTemplateController::class, 'store'])->name('user.template.store');
    // preview saved template
    Route::get('/my/template/{userTemplate}/preview', [UserTemplateController::class, 'show'])->name('user.template.preview');

    // Staff routes //
    //
    // view-templates
    // add-templates
    // edit-templates
    // delete-templates
});

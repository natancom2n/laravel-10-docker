<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/reports/create', [SupportController::class, 'create'])->name('reports.create');
Route::get('/reports/{id}', [SupportController::class, 'show'])->name('reports.show');
Route::post('/reports', [SupportController::class, 'store'])->name('reports.store');
Route::get('/reports', [SupportController::class, 'index'])->name('reports.index');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
}); 

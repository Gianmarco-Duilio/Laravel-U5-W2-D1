<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'homepage'])->name('homepage');

Route::get('/activities', [ActivityController::class, 'showAll'])->name('activities.showAll');
Route::get('/activities/add', [ActivityController::class, 'add'])->name('activity.add');
Route::get('/activities/{id}', [ActivityController::class, 'details'])->name('activities.details');
Route::get('/activities/update/{id}', [ActivityController::class, 'update'])->name('activities.update');
Route::get('/activities/delete/{id}', [ActivityController::class, 'delete'])->name('activities.delete');

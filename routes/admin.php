<?php

use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\AssignmentController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('assignments')->controller(AssignmentController::class)->name('assign.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('details/', 'dtails')->name('details');
    Route::post('store', 'store')->name('store');
    Route::post('assign-agent', 'assignAgent')->name('agent');
    Route::post('bulk-upload', 'upload')->name('upload');
    Route::get('task-assigned', 'task')->name('task');  // Single view
    Route::get('complete', 'completeAssign')->name('complete');  // Single view

    Route::post('search', 'searchAssign')->name('search');
});

Route::prefix('agents')->controller(AgentController::class)->name('agents.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('store','store')->name('store');
});

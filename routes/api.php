<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\TaskController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks', [TaskController::class, 'showTasks']);

Route::get('/tags', [TagsController::class, 'showTags']);

Route::get('/tag/{id}', [TagsController::class, 'showTag']);

Route::get('/task/{id}', [TaskController::class, 'showTask']);

Route::post('/add-task', [TaskController::class, 'addTask']);

Route::post('/add-tag', [TagController::class, 'addTag']);



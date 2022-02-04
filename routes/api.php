<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\TasksController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks', [TasksController::class, 'showTasks']);

Route::get('/tags', [TagsController::class, 'showTags']);

Route::get('/tag/{id}', [TagsController::class, 'showTag']);

Route::get('/task/{id}', [TasksController::class, 'showTask']);

Route::post('/add-task', [TasksController::class, 'addTask']);

Route::post('/add-tag', [TagsController::class, 'addTag']);



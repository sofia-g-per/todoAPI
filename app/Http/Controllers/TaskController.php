<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showTasks() {
        $tasks = Task::all();

        return response()->json([
            'tasks' => $tasks
        ]);
    }
}

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

    public function showTask($id) {
        $task = Task::find($id);
        $task->tags = $task->tags;

        return response()->json([
            'task' => $task,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function addTask(Request $request) {
        
        $validator = Validator::make( $request->all(), [
            'name' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                "errors"=> $validator->errors(),
            ]);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();

        return response()->json([
            "task" => $task,
        ]);
    }
}

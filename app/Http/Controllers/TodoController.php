<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TodoController extends Controller
{
    public function store(Request $request)
    {
        //storeTask//
        $newTask = $request->input('task');
        $tasksFilePath = storage_path('app/tasks.json');
        $existingTasks = json_decode(File::get($tasksFilePath), true);
        $updatedTasks = $existingTasks;
        $updatedTasks[] = $newTask;
        File::put($tasksFilePath, json_encode($updatedTasks, JSON_PRETTY_PRINT));
        //storeTask//

        //showTask//
        $my_tasks = storage_path('app/tasks.json');
        $my_tasks = json_decode(File::get($my_tasks), true);
        return view('index')->with(['my_tasks' => $my_tasks]);
        //showTask//
    }
}


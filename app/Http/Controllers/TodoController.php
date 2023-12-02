<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TodoController extends Controller
{
    public function stores(Request $request)
    {
        $task = $request->input('task');
        $taskpath = storage_path('app/tasks.json');
        $task2 = json_decode(File::get($taskpath), true);
        $task2[] = $task;
        File::put($taskpath, json_encode($task2));

        return redirect()->back();
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Task;

class TaskController extends Controller
{
    public function index()
    {
        return Task::take(5)->get()->keyBy('id');
    }

    public function store(Request $request)
    {
        return Task::create($request->only('name'));
    }

    public function destroy($id)
    {
        return Task::destroy($id);
    }

    public function update($id, Request $request)
    {
        $task = Task::find($id)->fill($request->only('is_done'));
        $task->save();
        return $task;
    }

}

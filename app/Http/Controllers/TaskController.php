<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        //To see list of tasks
        $tasks=Task::all();
        return view('tasks.index',compact('tasks'));
    }

    
    public function create()
    {
        //this shows the create form
        return view('tasks.create');
    }


    public function store(Request $request)
    {
        //stores the new tasks
        $request->validate([
            'title'=>'required',
            'description'=>'nullable',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task created successfully');
    }

    
    public function show(Task $task)
    {
    
    }
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));

    }


    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'nullable',
        ]);
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority ?? $task->priority,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }

   
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }
}

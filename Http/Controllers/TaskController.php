<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // Retrieve all the tasks when we visit the homepage.
        $tasks=Task::orderBy('completed_at','DESC')
        ->orderBy('id', 'DESC')
        ->get();

        return view('task.index', [
            'tasks' => $tasks,  // Pass tasks to the view
        ]);
    }



    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'Description' => 'required|string|max:255',
        ]);

        // Create a new Task instance with validated data
        $task = Task::create([
            'Description' => $validatedData['Description'],
        ]);

        //return to the home page when task is created.
        return redirect('/');
        //display/render all the task that we have.


        // Return the created Task as a JSON response
        return response()->json($task, 201);  // For API endpoints
    }

    //Mark a task as completed.
    public function update($id)
    {
        $task = Task::where('id', $id)->first();
        $task->completed_at = now();
        $task->save();
        //return to the home page when task is updated.
        return redirect('/');
        
    }

    //Delete the method
    public function delete($id){
        $task=Task::where('id',$id)->first();
        $task->delete();
        return redirect('/');
    }
}

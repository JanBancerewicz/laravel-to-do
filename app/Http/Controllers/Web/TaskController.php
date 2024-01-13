<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Show all tasks.
     *
     * @return string
     */
    public function index(){
        return view('tasks.index', [
            'activeTasks'       => Task::where('status', Task::getStatus('Active'))->get(),
            'completedTasks'    => Task::where('status', Task::getStatus('Completed'))->get(),
        ]);
    }

    /**
     * Show form for new task.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function add(){
        return redirect(
            route('tasks.index'),301
        );
    }

    /**
     * Store new task.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function store(){
        return redirect(
            route('tasks.index'),301
        );
    }

    /**
     * Show a single task.
     *
     * @param Task $task
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function show(Task $task){
        return redirect(
            route('tasks.index'),301
        );
    }

    /**
     * Show edit form for a single task.
     *
     * @param Task $task
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function edit(Task $task){
        return redirect(
            route('tasks.index'),301
        );
    }

    /**
     * Update a single task
     *
     * @param Task $task
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function update(Task $task){
        return redirect(
            route('tasks.index'),301
        );
    }

    /**
     * Delete a single task.
     *
     * @param Task $task
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function delete(Task $task){
        return redirect(
            route('tasks.index'),301
        );
    }
}

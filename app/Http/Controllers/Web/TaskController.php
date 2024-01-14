<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;


use App\Http\Requests\StoreTaskRequest;
// use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Show all tasks.
     *
     * @return string
     */
    public function index()
    {
        $activeTasks = Task::where(
            'status',
            Task::getStatus('Active')
        )->orderBy('created_at','DESC')
        ->get();

        $completedTasks = Task::where(
            'status',
            Task::getStatus('Completed')
        )->orderBy('created_at','DESC')
        ->get();

        return view('tasks.index', [
            'activeTasks'       => $activeTasks,
            'completedTasks'    => $completedTasks,
        ]);
    }

    /**
     * Show form for new task.
     *
     * @return string
     */
    public function add(){
        return view('tasks.add',[
            'defaultStatus' => Task::getStatus('Active')
        ]);
    }

    /**
     * Store new task.
     *
     * @return string
     */
    public function store(StoreTaskRequest $request){
        $task = new Task($request->validated());

        return redirect(
            route('tasks.show',
                ['task' => Task::create($request->validated())]
            )
        );
    }

    /**
     * Show a single task.
     *
     * @param Task $task
     * @return string
     */
    public function show(Task $task){
        return view('tasks.show', ['task'=> $task]);
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

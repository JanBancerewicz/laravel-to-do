<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="tasks-active" role="tabpanel">
        <div class="row">
            @forelse ($activeTasks as $activeTask)
                <div class="col-sm-12 col-lg-6">
                    <div class="card text-bg-light mb-3">
                        <div class="card-header">{{ $activeTask->created_at }}</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $activeTask->title }}</h5>
                            <p class="card-text">{{ $activeTask->content }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-sm-12">
                    <p>All tasks are completed</p>
                </div>
                
            @endforelse
        </div>
    </div>
    <div class="tab-pane fade" id="tasks-completed" role="tabpanel">
        <div class="row">
            @forelse ($completedTasks as $completedTask)
                <div class="col-sm-12 col-lg-6">
                    <div class="card text-bg-light mb-3">
                        <div class="card-header">{{ $completedTask->created_at }}</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $completedTask->title }}</h5>
                            <p class="card-text">{{ $completedTask->content }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-sm-12">
                    <p>No tasks are marked as complete</p>
                </div>
                
            @endforelse
        </div>
    </div>
</div>

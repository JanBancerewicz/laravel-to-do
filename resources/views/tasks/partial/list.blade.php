<div class="container">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="tasks-active" role="tabpanel">
            <div class="row">
                @forelse ($activeTasks as $activeTask)
                    <div class="col-sm-12 col-lg-6">
                        <div class="card text-bg-light mb-3">
                            {{-- start --}}
                            <div class="d-flex w-100 card-header justify-content-between mb-6">
                                {{ $activeTask->created_at->format('Y-m-d \a\t H:i') }}
                                <div class="btn-group-vertical" role="group">
                                    <div class="btn-group dropdown" role="group">
                                        <button type="button" class="btn btn-success">Mark as completed</button>
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('tasks.show', ['task' => $activeTask]) }}">Show
                                                    details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('tasks.show', ['task' => $activeTask]) }}">Show
                                                    details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('tasks.show', ['task' => $activeTask]) }}">Show
                                                    details</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $activeTask->title }}</h5>
                                @if ($activeTask->content)
                                    <p class="card-text">{{ $activeTask->content }}</p>
                                @endif

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
                            {{-- start --}}
                            <div class="d-flex w-100 card-header justify-content-between mb-6">
                                {{ $completedTask->created_at->format('Y-m-d \a\t H:i') }}
                                <div class="btn-group-vertical" role="group">
                                    <div class="btn-group dropdown" role="group">
                                        <button type="button" class="btn btn-success">Mark as active</button>
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('tasks.show', ['task' => $activeTask]) }}">Show
                                                    details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('tasks.show', ['task' => $activeTask]) }}">Show
                                                    details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('tasks.show', ['task' => $activeTask]) }}">Show
                                                    details</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $completedTask->title }}</h5>
                                @if ($completedTask->content)
                                    <p class="card-text">{{ $completedTask->content }}</p>
                                @endif

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
</div>

@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="m-0">Task List</h2>
        <a href="{{ route('tasks.create') }}" class="btn btn-secondary">Add Task</a>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Priority</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ Str::limit($task->description, 80) }}</td>

                        <td>
                            @if($task->status)
                                <span class="badge bg-success">Completed</span>
                            @else
                                <span class="badge bg-warning">Pending</span>
                            @endif
                        </td>

                        <td>
                            @if($task->priority == 'High')
                                <span class="badge bg-danger">High</span>
                            @elseif($task->priority == 'Medium')
                                <span class="badge bg-warning text-dark">Medium</span>
                            @else
                                <span class="badge bg-secondary">Low</span>
                            @endif

                        <td class="text-end">
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-secondary">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-secondary" onclick="return confirm('Delete this task?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">No tasks yet.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection

@foreach ( $tasks as $task)
    <p>{{ $task->id }}</p>
    <p>{{ $task->tell }}</p>
    <p>{{ $task->created_at }}</p>
@endforeach
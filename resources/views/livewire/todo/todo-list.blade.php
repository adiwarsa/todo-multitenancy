<div>
    <h2>Your ToDo List</h2>
    <ul>
        @foreach ($todos as $todo)
            <li>
                <strong>{{ $todo->title }}</strong>
                - {{ $todo->category->name ?? 'Uncategorized' }}
            </li>
        @endforeach
    </ul>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo - Home</title>
</head>
<body>
    <h1>Todo - Home</h1>
    
    <a href="/todo/create">Create New Todo</a>

    <ul>
        @foreach ($todos as $todo)
            <li>
                {{ $todo -> id }}.
                <b>
                {{ $todo -> title }}
                </b>
                {{ $todo -> due_date}}

                <a href="/todo/update/{{ $todo->id }}" style="color:green;">
                    Update
                </a>

                <a href="/todo/delete/{{ $todo->id }}" style="color:red;">
                    Delete
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
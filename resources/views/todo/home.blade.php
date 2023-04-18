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

    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Task</th>
            <th scope="col">Due Date</th>
            <th scope="col">Functions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
            <tr>
            <th scope="row">{{$todo -> id}}</th>
            <td>{{ $todo -> title }}</td>
            <td>{{ $todo -> due_date }}</td>
            <td>
                <a href="/todo/update/{{ $todo->id }}" style="color:green;">
                    Update
                </a>
                <a href="/todo/delete/{{ $todo->id }}" style="color:red;">
                    Delete
                </a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
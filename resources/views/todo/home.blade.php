<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Todo - Home</title>
</head>
<body>
    <h1 style="text-align: center;">Todo - Home</h1>
    <br><br>
    
    <a class="btn btn-primary" href="/todo/create">Create New Todo</a>
    <br><br>

    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Task</th>
            <th scope="col">Due Date</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
            <tr>
            <th scope="row">{{ $todo -> id }}.</th>
            <td><b>{{ $todo -> title }}</b></td>
            <td>{{ $todo -> due_date}}</td>
            <td>                
                <a class="btn btn-success" href="{{ URL::route('update', $todo->id) }}">
                    Update
                </a>

                <a class="btn btn-danger "href="{{ URL::route('delete', $todo->id) }}">
                    Delete
                </a>
            </td>
            </tr>
            @endforeach     

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
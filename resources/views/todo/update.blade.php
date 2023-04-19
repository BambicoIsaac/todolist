<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Todo - Update</title>
</head>
<body>
    <h1 style="text-align: center;">Todo - Update</h1>
    <br><br>
    <form action="{{ URL::route('changedetails', $todo->id) }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="">Title</label>
            <input type="text" name="title" value="{{$todo->title}}" class="form-control">
        </div>
        <br>
        <div class="form-group mb-3">
            <label for="">Due Date</label>
             <input type="date" name="due_date" value="{{$todo->due_date}}" class="form-control">
        </div>
        <br><br>
        <div class="form-group mb-3" style="text-align: center;">
            <button type="submit" class="btn btn-primary">Update Todo</button>
            <a class="btn btn-outline-success" href="{{ URL::route('complete', $todo->id) }}">
                Mark as Done
            </a>    
            <a class="btn btn-outline-danger" href="{{ URL::route('ongoing', $todo->id) }}">
                Mark as In Progress
            </a>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Todo - Create</title>
</head>
<body>
    <h1 style="text-align: center;">Todo - Create</h1>
    <br><br>

    <form name="add-todo-post-form" id="add-todo-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="" placeholder="Describe your todo.">
        </div>
        <br><br>
        <!-- 
        <label for="startDate">Due Date</label>
        <input id="startDate" class="form-control" type="date" />
        -->
        <div class="form-group">
          <label for="exampleInputEmail1">Due Date</label>
          <input type="text" id="due_date" name="due_date" class="form-control" required="" placeholder="Format: YYYY-MM-DD">
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Create Todo</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
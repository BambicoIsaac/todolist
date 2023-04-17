<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function home()
    {
        $todos = Todo::all();
        return view('todo.home') ->with([
            'todos' => $todos
        ]);
    }

    public function create()
    {

        Todo::create([
            'title' => 'Eat lunch',
            'due_date' => '2023-04-17'
        ]);

        return back();
    }


    public function delete($id)
    {

        Todo::find($id)->delete();

        return back();
    }

    public function update($id)
    {

        $todo = Todo::find($id);

        $todo->update([
            'title' => '✅ '.$todo->title
        ]);

        return back();
    }
}

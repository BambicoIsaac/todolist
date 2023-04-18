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
        return view('todo.create');

    }

    public function store(Request $request)
    {     
        $todo = new Todo;
        $todo -> title = $request -> title;
        $todo -> due_date = $request -> due_date;
        $todo -> save();

        return redirect('todo');

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

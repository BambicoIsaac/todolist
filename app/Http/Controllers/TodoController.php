<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Str;

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
        $todo -> title = '(❌ IN PROGRESS) '.$request -> title;
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
        return view('todo.update', compact('todo')); 
    }

    public function changedetails(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->title = $request->input('title');
        $todo->due_date = $request->input('due_date');
        $todo->update();

        return redirect('todo');
    }


    public function complete($id)
    {

        $todo = Todo::find($id);

        $todo->update([
            'title' => Str::replace('(❌ IN PROGRESS) ', '(✅ DONE) ', $todo -> title)
        ]);

        return redirect('todo');
    }

    public function ongoing($id)
    {

        $todo = Todo::find($id);

        $todo->update([
            'title' => Str::replace('(✅ DONE) ', '(❌ IN PROGRESS) ', $todo -> title)
        ]);

        return redirect('todo');
    }
}

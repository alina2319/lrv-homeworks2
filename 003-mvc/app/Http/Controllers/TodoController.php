<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = Todo::all();
        return view('Todo.index', [
            'table' => $table,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tr = [
            'title' => 'Еще одна новая запись',
            'description' => 'Дополнение к новой записи'
        ];

        $todo = new Todo();
        $todo->title = $tr['title'];
        $todo->description = $tr['description'];

        $todo->save();

//        return view('Todo.create', [
//            'tr' => $tr,
//        ]);
        return redirect()->route('todo.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo, $id)
    {
        $tr = $todo::all()->find($id);
        return view('Todo.show', [
            'tr' => $tr,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CreateList;
use Illuminate\Http\Request;

class ListCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $content = CreateList::all();
        return view('dbcontent', [
            'dbheader'=> "Список зарегистрированных",
            'dbcontent'=> CreateList::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $headerForm = 'Регистрация';
        return view('formCreate', ['formCreate'=>$headerForm]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CreateList::create([
            'name'=> $request-> name,
            'email'=> $request-> email,
            'phone' => $request-> phone
        ]);
        //dd('It`s store');
        return redirect('/list');
    }

    /**
     * Display the specified resource.
     */
    public function show(CreateList $createList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CreateList $createList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CreateList $createList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CreateList $createList)
    {
        //
    }
}

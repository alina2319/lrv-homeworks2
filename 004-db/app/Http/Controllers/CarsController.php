<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use \App\Http\Requests\CarsRequest;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cars::paginate(5);
//        $table = Cars::paginate(5);
//        return view('cars.cars', [
//            'table' => $table
//        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarsRequest $request)
    {
        return Cars::created($request->validation());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Cars::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cars $cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarsRequest $request, Cars $cars)
    {
        $cars->fill($request->validation());
        return $cars->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cars $cars)
    {
        if ($cars->delete()) {
            return response(null, 404);
        }
        return null;
    }
}

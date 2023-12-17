<?php

namespace App\Http\Controllers;

use App\Models\InfoUser;
use Illuminate\Console\View\Components\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = Auth::user();
        return view('info.infouser', [
            'table' => $table
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InfoUser $infoUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InfoUser $infoUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InfoUser $infoUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InfoUser $infoUser)
    {
        //
    }
}

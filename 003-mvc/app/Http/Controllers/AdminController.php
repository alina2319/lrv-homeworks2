<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(): Factory|View|Application
    {
        $user = Auth::user();

        return view('profile', [
            'id'=> $user->id,
            'email'=> $user->email,
            'name'=> $user->name,
        ]);
    }
}

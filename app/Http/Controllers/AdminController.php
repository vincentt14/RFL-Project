<?php

namespace App\Http\Controllers;

use App\Models\Recycler;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('pages.dashboard', [
            "recyclers" => Recycler::all(),
            "volunteers" => User::all()
        ]);
    }
}

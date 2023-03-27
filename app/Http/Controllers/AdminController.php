<?php

namespace App\Http\Controllers;

use App\Models\Recycler;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $volunteer = DB::table('users')->where('is_admin', '=', 0)->get();
        return view('pages.dashboard', [
            "recyclers" => Recycler::all(),
            "volunteers" => $volunteer
        ]);
    }
}
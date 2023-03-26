<?php

namespace App\Http\Controllers;

use App\Models\Recycler;
use App\Http\Requests\StoreRecyclerRequest;
use App\Http\Requests\UpdateRecyclerRequest;
use App\Models\User;

class RecyclerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('pages.dashboard', [
        //     "recyclers" => Recycler::all(),
        //     "volunteers" => User::all()
        // ]);
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
    public function store(StoreRecyclerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Recycler $recycler)
    {
        dd($recycler);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recycler $recycler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecyclerRequest $request, Recycler $recycler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recycler $recycler)
    {
        //
    }
}

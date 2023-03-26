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
        $recyclers = Recycler::latest();

        if (request('search')) {
            $recyclers->where('name', 'like', '%' . request('search') . '%');
        }

        return view('pages.locations', [
            'recyclers' => $recyclers->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecyclerRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'image|file|max:1024',
            'location' => 'required',
            'description' => 'required',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('recycler-images');
        }

        Recycler::create($validatedData);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recycler $recycler)
    {
        return view('pages.detail', [
            "recycler" => $recycler
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recycler $recycler)
    {
        return view('pages.editRecycler', [
            "recycler" => $recycler
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecyclerRequest $request, Recycler $recycler)
    {

        $rules = [
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $recycler->update($validatedData);
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recycler $recycler)
    {
        Recycler::destroy($recycler->id);
        return redirect('/dashboard');
    }
}
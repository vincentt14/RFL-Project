<?php

namespace App\Http\Controllers;

use App\Models\Recycler;
use App\Http\Requests\StoreRecyclerRequest;
use App\Http\Requests\UpdateRecyclerRequest;
use Illuminate\Support\Facades\Storage;

class RecyclerController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except(['index']);
    }

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
            'image' => 'required|image|file|max:1024',
            'location' => 'required',
            'description' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('recycler-images');
        }

        Recycler::create($validatedData);
        return redirect('/dashboard')->with('success', 'Recycler Location was added successfully');
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
            'image' => 'image|file|max:1024',
            'location' => 'required',
            'description' => 'required',
        ];

        $validatedData = $request->validate($rules);


        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('recycler-images');
        }

        $recycler->update($validatedData);
        return redirect('/dashboard')->with('success', 'Recycler Location was updated successfully');
        ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recycler $recycler)
    {
        if ($recycler->image) {
            Storage::delete($recycler->image);
        }
        Recycler::destroy($recycler->id);
        return redirect('/dashboard')->with('success', 'Recycler Location was deleted successfully');
        ;
    }
}
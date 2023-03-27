<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $d = strtotime($user['volunteer_date']);
        $user['volunteer_date'] = date("Y-m-d", $d);
        return view('pages.editVolunteer', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'volunteer_date' => 'required',
            'phone_number' => 'required|numeric'
        ];

        $validateData = $request->validate($rules);

        $user->update($validateData);
        return redirect('/dashboard')->with('success', 'Volunteer was updated successfully');
        ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard')->with('success', 'Volunteer was deleted successfully');
        ;
    }
}
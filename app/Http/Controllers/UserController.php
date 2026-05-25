<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

            $user->name = $request->name;
            $user->email = $request->email;

            if($request->hasFile('image')){
                $publicPhotoPath = public_path('images/profile/'. $user->image);
                if($user->image && file_exists($publicPhotoPath)){
                    unlink($publicPhotoPath);
                }

                $file = $request->file('image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/profile'), $fileName);

                $user->image = $fileName;
            }

            $user->save();
            
            return redirect('/')->with('photo-msg', 'Profile photo has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

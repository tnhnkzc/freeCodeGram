<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class ProfilesController extends Controller
{
    public function index($user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user) : false;
        
        
        $user = User::findOrFail($user);
        return view('profiles.index', [
            'follows',  'user' => $user,
        ]);
    }



    public function edit(\App\Models\User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);


        $data = request()->validate([
            'title' =>'required',
            'description' =>'',
            'url' =>'',
            'image' =>'',
        ]); 

        
        
        if (request('image')) {
            $imagePath = (request('image')->store('profile', 'public'));

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }
        
        
        


        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        
        return redirect("/profile/{$user->id}");
    }
}

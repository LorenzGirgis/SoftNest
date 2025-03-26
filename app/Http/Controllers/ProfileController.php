<?php

namespace App\Http\Controllers;

use App\Http\Requests\passwordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function password()
    {
        return view('password');
    }

    public function update(Request   $request)
    {
        $user = User::where('email', Auth::user()->email)->first();
        $user->update($request->only(['name', 'email']));
        
        return redirect()->route('profile')->with('status', 'Profile updated successfully!');
    }

    public function delete()
    {
        $user = User::where('email', Auth::user()->email)->first();
        $user->delete();

        return redirect()->route('login')->with('status', 'Your account has been deleted.');
    }

        public function updatePassword(passwordRequest $request)
        {
            $user = User::where('email', Auth::user()->email)->first();

            $user->update($request->only(['password']));
            
            return redirect()->route('password')->with('status', 'Passworxd updated successfully!');
        }

        public function updatePhoto(ProfileRequest $request)
        {
            $user = User::where('email', Auth::user()->email)->first();
            
            if ($request->hasFile('profile_picture')) {
                $picture = $request->file('profile_picture');
                $path = $picture->store('profile_photos', 'public');
                $user->profile_picture = $path;
                $user->save();
            }
        
            return redirect()->route('profile')->with('status', 'Photo updated successfully!');
        }              
}

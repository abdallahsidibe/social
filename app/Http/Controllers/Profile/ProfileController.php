<?php

namespace App\Http\Controllers\Profile;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class ProfileController extends Controller
{
    public function myprofile()
    {
        return view('frontend.user.profile');
    }

    public function profileupdate(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        if ($request->hasfile('image'))
         {
            $destination = 'uploads/profile/'.$user->image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('uploads/profile/', $filename);
            $user->image =$filename;
        }

        $user->update();
        return redirect()->back()->with('status','Profile Updated');

    }
}

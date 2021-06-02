<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Models\Infos\Experience;
use App\Http\Controllers\Controller;

class ExpController extends Controller
{
    public function index()
    {
        return view('frontend.my-profile');       
    }
   
    public function store(Request $request)
    {
    
        Experience::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'niveau' => $request->input('niveau'),
            'annee' => $request->input('annee'),
            'comptu' => $request->input('comptu'),
            'comptd' => $request->input('comptd'),
            'comptt' => $request->input('comptt'),
            'user_id' => auth()->user()->id           
        ]);      

        return redirect()->back()->with('status','Your profile has been added!');

    }
}

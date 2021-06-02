<?php

namespace App\Http\Controllers\Profile;

use App\Models\Infos\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index()
    {
       /* if(DB::table('profils')->where('image' ,'poste')->exists() && DB::table('experiences')->where('title' ,'niveau')->exists()){
            return view('frontend.my-profile');       
        }
        else
        {
            return view('frontend.my-profil-test');       

        }*/
        return view('frontend.my-profile');
    }
   
    public function store(Request $request)
    {
    
       // $newImageName = uniqid() .'-' . $request->title . '.' .  

        $newImageName = uniqid() .'.' . 
        $request->image->extension();
        //dd($newImageName);

        $request->image->move(public_path('uploads/profile'), $newImageName);
      
        Profil::create([
            'poste' => $request->input('poste'),
            'apercu' => $request->input('apercu'),
            'ville' => $request->input('ville'),
            'quartier' => $request->input('quartier'),
            'image' => $newImageName,
            'user_id' => auth()->user()->id           
        ]);      

      //  return redirect('/blog')
       // ->with('status', 'Your profile has been added!');
        return redirect()->back()->with('status','Your profile has been added!');

    }
    
      public function profilupdate(Request $request, $id)
    {
       /* //$user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);

        $profil_id = Auth::user()->profil->id;
        $profil = Profil::findOrFail( $profil_id);

        $profil->poste = $request->input('poste');
        $profil->apercu = $request->input('apercu');
        $profil->ville = $request->input('ville');
        $profil->quartier = $request->input('quartier');*/

       /* //if ($request->hasfile('image'))
         {
            $destination = 'uploads/profile/'.$profil->image;
           // if (File::exists($destination))
            //{
                File::delete($destination);
            }
           /* $file = $request->file('image');*
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('uploads/profile/', $filename);
            $profil->image =$filename;
        }*/
        /*
        $profil->update();
        return redirect()->back()->with('status','Profile Updated');*/

        $newImageName = uniqid() .'.' . 
        $request->image->extension();
        //dd($newImageName);

        $request->image->move(public_path('uploads/profile'), $newImageName);
      
        Profil::where('id', $id)
        ->update([
            'poste' => $request->input('poste'),
            'apercu' => $request->input('apercu'),
            'ville' => $request->input('ville'),
            'quartier' => $request->input('quartier'),
            'image' => $newImageName,
            'user_id' => auth()->user()->id           
        ]); 
        return redirect()->back()->with('status','Profile Updated');

    }
     
}

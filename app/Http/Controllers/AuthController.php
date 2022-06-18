<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\session;
use App\Models\User;
use App\Models\Publication;
use App\Models\User_Type;

class AuthController extends Controller
{

     public function Register()
    {
        $types = User_Type::all();
        return view('users.register', ['types'=>$types] );
    } 
 
    public function Login(LoginRequest $request)
    {
        $count= User::where('email',$request->email)->count();
        $users= User::where('email',$request->email)->get();
        foreach($users as $item){
            $user=$item;
        }
        // dd($user->active);

        if($count==0){
            $active=false;
            $message="Le compte n'existe pas veuillez créé votre compte";
        }elseif($user->active =='false') {
                $active=false;
                $message="Votre compte n'est pas Activé par l'administrateur veuillez le contacter";
        }else{
            $active=true;
            $message="";
        }

        if ($active) {
            $request->authenticate();
            $request->session()->regenerate();
            return redirect('/');
        } else {
            return redirect('/login')->with('message',$message);
        }
        
    }

     public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


    public function Create(Request $request)
    {
        $data = $request->all();
        
        $request->password = Hash::make($request->password);
        $data['password'] = $request->password;

        // Validator::make($data, $rules, $messages)->validate();
        $save = User::create($data);
        session()->flash('success','un nouveau Utilisateur ajouté!');
        return redirect('/login');
        
    }

    public function Profil(){   
        $index=auth()->user()->id;
        $pubs = Publication::where('id_user',$index)->paginate(8);
        $types = User_Type::all();
        return view('authUser.profil', compact('pubs','types'));
    }

    // public function EditProfil(){
    //     $types = User_Type::all();
    //     return view('users.editProfil', ['types'=>$types] );
    // }

    // public function EditProfil($index){
    //     $user
    //     $types = User_Type::all();
    //     return view('users.editProfil', ['types'=>$types] );
    // }

    public function UpdateProfil(Request $request, User $user){
        // dd($request);
        if ($request->hasFile('img') ) {
        $img=$request->file('img')->store('public/profil');
        }else{
            $img=auth()->user()->img;
        }

        if ($request->hasFile('cv') ) {
        $cv=$request->file('cv')->store('public/cv');
        }else{
            $cv=auth()->user()->cv;
        }


        $user->update([
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'contact'=>$request->contact,
        'img'=>$img,
        'sexe'=>$request->sexe,
        'cv'=>$cv,
        'location'=>$request->location,
        'type'=>$request->type,
        'email'=>$request->email,
    ]);


        session()->flash('message',"Actualisé!");
        return redirect()->route('profil.path');

    }


    public function UpdateThese(Request $request, User $user){
        $user->update([
        'these'=>$request->these,
         ]);

        session()->flash('message',"Actualisé!");
        return redirect()->route('profil.path');
    }

    public function UpdateDomaine(Request $request, User $user){
        $user->update([
        'research_domaine'=>$request->research_domaine,
         ]);

        session()->flash('message',"Actualisé!");
        return redirect()->route('profil.path');
    }

    public function UpdateSite(Request $request, User $user){
        $user->update([
            'ieeexplore'=>$request->ieeexplore,
            'researchgate'=>$request->researchgate,
            'scholar'=>$request->scholar,
            'acm'=>$request->acm,
            'dblp'=>$request->dblp,
         ]);

        session()->flash('message',"Actualisé!");
        return redirect()->route('profil.path');
    }


    public function StorePub(Request $request){
        $data = $request->all();
        $img=$request->file('doc')->store('public/publication');
        $data['doc'] = $img;
        $data['id_user'] = auth()->user()->id;
        Publication::create($data);
        session()->flash('success',"Nouvelle publication Ajoutée !");
        return redirect()->route('profil.path');
    }

     public function PublicationDetail($index){
        // $pubs = Publication::where('id_user',$index)->paginate(15);
        $pub = Publication::findOrFail($index);
        $user = User::all();
        // dd($user);
        return view('authUser.pub_detail',compact('pub','user') );
    }

}

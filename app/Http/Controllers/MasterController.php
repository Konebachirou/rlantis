<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Agenda;
use App\Models\News;
use App\Models\User;
use App\Models\User_Type;
use Illuminate\Support\Facades\DB;

class MasterController extends Controller
{
    public function Home(){
        $pubs= Publication::where('active','true')->orderBy('id', 'desc')->take(6)->get();
        $news= News::latest()->take(3)->get();
        $agendas= Agenda::latest()->take(3)->get();
        return view('users.accueil',['pubs'=>$pubs,'news'=>$news,'agendas'=>$agendas]);
    }

    public function About(){
        return view('users.presentation');
    }

    public function Responsable(){
        $pubs = Publication::where('id_user',2)->paginate(8);
        return view('users.responsable', compact('pubs'));
    }

    public function Chercheur(){
        $chercheurs= User::where('type',3)->simplePaginate(15);
        return view('users.membre.chercheur', compact('chercheurs'));
    }

    public function Doctorant(){
        $doctorants= User::where('type',2)->simplePaginate(15);
        return view('users.membre.doctorant', compact('doctorants'));
    }

    public function Teacher(){
        $teachers= User::where('type',1)->simplePaginate(15);
        return view('users.membre.teacher',compact('teachers'));
    }

    public function Publication(){
        // $pubs= Publication::where('id_agent',$index)->where('status','Terminé')->count();
        $pubs= Publication::where('active','true')->orderBy('id', 'desc')->simplePaginate(15);
        return view('users.publication.pub',compact('pubs'));
    }

    public function MembreDetail($index){   
        $pubs = Publication::where('id_user',$index)->orderBy('id', 'desc')->paginate(5);
        $nb = Publication::where('id_user',$index)->count();
        $types = User_Type::all();
        $user = User::findOrFail($index);
        return view('users.membre.membre_details',['user'=>$user,'pubs'=>$pubs,'types'=>$types, 'nb'=>$nb] );
    }

    public function PublicationDetail($index)
    {
        // $pubs = Publication::where('id_user',$index)->paginate(15);
        $pubUsers = DB::table('publications')
            ->join('users', function ($join) {
                $join->on('publications.id', '=', 'users.id');
            })->where('publications.id', '=',  $index)
            ->select('title', 'img', 'sexe', 'nom', 'prenom', 'parteners', 'desc', 'doc', 'publications.created_at')
            ->get();
        $pubUser = $pubUsers->get(0);
        
        return view('users.publication.pub_detail', compact('pubUser'));
    }

    


    public function AddPub(){
        return view('users.publication.addPub');
    }

    public function StorePub(Request $request){
        $data = $request->all();
        $img=$request->file('doc')->store('public/publication');
        $data['doc'] = $img;
        $data['id_user'] = auth()->user()->id;
        Publication::create($data);
        session()->flash('message',"Nouvelle publication Ajoutée !");
        return redirect()->route('profil.path');
    }



    public function NewsDetail($index){   
        $news = News::findOrFail($index);
        return view('users.news_detail',compact('news') );
    }


    public function AgendaDetail($index){   
        $agenda = Agenda::findOrFail($index);
        return view('users.agenda_detail',  compact('agenda'));
    }

    
}

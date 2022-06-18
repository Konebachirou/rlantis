<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Agenda;
use App\Models\News;
use App\Models\User;
use App\Models\User_Type;
class AdminController extends Controller
{
    public function Home(){
        $users= User::all();
        $latestUsers= User::latest()->take(8)->get();
        $pubs= Publication::latest()->take(4)->get();
        $active= User::where('active',"false")->count();
        $membre= User::all()->count();
        $nbPub= Publication::all()->count();
        $nbAgenda= Agenda::all()->count();
        $nbNews= News::all()->count();
        return view('admin.accueil',['pubs'=>$pubs,'users'=>$users, 'latestUsers'=>$latestUsers,'active'=>$active, 'membre'=>$membre,'nbPub'=>$nbPub,'nbAgenda'=>$nbAgenda,'nbNews'=>$nbNews  ]);

        // return view('admin.accueil');
    }


    public function Chercheur(){
        $chercheurs= User::where('type',3)->where('admin','false')->paginate(15);
        return view('admin.membres.chercheur', compact('chercheurs'));
    }

    public function Doctorant(){
        $doctorants= User::where('type',2)->where('admin','false')->paginate(15);
        return view('admin.membres.doctorant', compact('doctorants'));
    }

    public function Teacher(){
        $teachers= User::where('type',1)->where('admin','false')->paginate(15);
        return view('admin.membres.teacher',compact('teachers'));
    }

    public function MembreDetail($index){   
        $pubs = Publication::where('id_user',$index)->paginate(8);
        $user = User::findOrFail($index);
        $types = User_Type::all();
        return view('admin.membres.membre_details',['user'=>$user,'pubs'=>$pubs, 'types'=>$types] );
    }

    

    
    public function MembreDetail2(){   
        $pubs = Publication::where('id_user',1)->paginate(8);
        $user = User::findOrFail(1);
        $types = User_Type::all();
        return view('users.profil2',['user'=>$user,'pubs'=>$pubs, 'types'=>$types] );
    }



    public function ActiveUser(int $user, string $status){
        $affected = User::where('id', $user)->update(['active'=>$status,]);
       
        return back();

    }

    public function DeleteUser(int $user){
        User::findOrFail($user)->delete();
        session()->flash('message',"Utilisateur supprimé!");
        return back(); 
    }

    //Publication
    public function Publication(){
        // $pubs= Publication::where('id_agent',$index)->where('status','Terminé')->count();
        $pubs= Publication::latest()->paginate(10);
        return view('admin.publication.pub',compact('pubs'));
    }

    public function PublicationDetail($index){
        // $pubs = Publication::where('id_user',$index)->paginate(15);
        $pub = Publication::findOrFail($index);
        $user = User::all();
        // dd($user);
        return view('admin.publication.pub_detail',compact('pub','user') );
    }


    //Publication 
    public function AddPub(){
        return view('admin.publication.addPub');
    }

    public function StorePub(Request $request){
        $data = $request->all();
        // dd($data);
        $img=$request->file('doc')->store('public/publication');
        $data['doc'] = $img;
        $data['id_user'] = auth()->user()->id;
        Publication::create($data);
        session()->flash('success',"Nouvelle publication Ajoutée !");
        return redirect()->route('admin_pub.path');
    }

    public function ActivePub(int $pub, string $status){
        $affected = Publication::where('id', $pub)->update(['active'=>$status,]);
       // dd($affected);
        return back();

    }

    public function DeletePub(int $pub){
        Publication::findOrFail($pub)->delete();
        session()->flash('message',"Publication supprimé!");
        return back(); 
    }

    //News
     public function News(){
        // $pubs= Publication::where('id_agent',$index)->where('status','Terminé')->count();
        $news= News::latest()->paginate(8);
        return view('admin.news.news',compact('news'));
    }

    public function AddNews(){
        return view('admin.news.addNews');
    }

    public function StoreNews(Request $request){
        $data = $request->all();
        $img=$request->file('img')->store('public/News');
        $data['img'] = $img;
        News::create($data);
        session()->flash('success',"Nouvelle publication Ajoutée !");
        return redirect()->route('admin_news.path');
    }

    public function NewsDetail($index){
        // $pubs = Publication::where('id_user',$index)->paginate(15);
        $news = News::findOrFail($index);
        // $user = User::all();
        // dd($user);
        return view('admin.news.news_detail',compact('news') );
    }

    public function DeleteNews(int $news){
        News::findOrFail($news)->delete();
        session()->flash('message',"News supprimé!");
        return back(); 
    }


     //Agenda
     public function Agenda(){
        // $pubs= Publication::where('id_agent',$index)->where('status','Terminé')->count();
        $agenda= Agenda::latest()->paginate(8);
        return view('admin.agenda.agenda',compact('agenda'));
    }

    public function AddAgenda(){
        return view('admin.agenda.addNews');
    }

    public function StoreAgenda(Request $request){
        $data = $request->all();
        Agenda::create($data);
        session()->flash('success',"Nouvelle publication Ajoutée !");
        return redirect()->route('admin_agenda.path');
    }

    public function AgendaDetail($index){
        // $pubs = Publication::where('id_user',$index)->paginate(15);
        $agenda = Agenda::findOrFail($index);
        // $user = User::all();
        // dd($user);
        return view('admin.agenda.agenda_detail',compact('agenda') );
    }

    public function DeleteAgenda(int $agenda){
        Agenda::findOrFail($agenda)->delete();
        session()->flash('message',"Agenda supprimé!");
        return back(); 
    }



}

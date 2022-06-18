<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// admin route

Route::middleware('admin')->group(function(){
    Route::get('/admin_Home',[AdminController::class,'Home'])->name('admin_home.path');
Route::get('/admin/membre/teachers',[AdminController::class,'Teacher'])->name('admin_teacher.path');
Route::get('/admin/membre/chercheurs',[AdminController::class,'Chercheur'])->name('admin_chercheur.path');
Route::get('/admin/membre/doctorants',[AdminController::class,'Doctorant'])->name('admin_doctorant.path');
Route::get('/admin/membre/{membre}', [AdminController::class, 'MembreDetail'])->name('admin_membre_detail.path');
Route::get('/active/{user}/{status}', [AdminController::class, 'ActiveUser'])->name('status.update');


//publication
Route::get('/admin/publication',[AdminController::class,'Publication'])->name('admin_pub.path');
Route::get('/admin/Add_Publication', [AdminController::class, 'AddPub'])->name('admin_addPub.path');
Route::post('/admin/storePub', [AdminController::class, 'StorePub'])->name('admin_save.pub');
Route::get('/admin/publication/{publication}', [AdminController::class, 'PublicationDetail'])->name('admin_pub_detail.path');
Route::get('/activePub/{pub}/{status}', [AdminController::class, 'ActivePub'])->name('pub_status.update');

//News
Route::get('/admin/news',[AdminController::class,'News'])->name('admin_news.path');
Route::get('/admin/Add_news', [AdminController::class, 'AddNews'])->name('admin_addNews.path');
Route::post('/admin/storeNews', [AdminController::class, 'StoreNews'])->name('admin_save.news');
Route::get('/admin/news/{news}', [AdminController::class, 'NewsDetail'])->name('admin_news_detail.path');


//Agenda
Route::get('/admin/agenda',[AdminController::class,'Agenda'])->name('admin_agenda.path');
Route::get('/admin/Add_agenda', [AdminController::class, 'AddAgenda'])->name('admin_addAgenda.path');
Route::post('/admin/storeAgenda', [AdminController::class, 'StoreAgenda'])->name('admin_save.agenda');
Route::get('/admin/agenda/{agenda}', [AdminController::class, 'AgendaDetail'])->name('admin_agenda_detail.path');


//route pour supprimer
  Route::get('/Delete-User/{user}', [AdminController::class, 'DeleteUser'])->name('Delete-user.path');
  Route::get('/Delete-Agenda/{agenda}', [AdminController::class, 'DeleteAgenda'])->name('Delete-agenda.path');
  Route::get('/Delete-News/{news}', [AdminController::class, 'DeleteNews'])->name('Delete-news.path');
  Route::get('/Delete-Pub/{pub}', [AdminController::class, 'DeletePub'])->name('Delete-pub.path');
});





// user route
Route::get('/',[MasterController::class,'Home'])->name('home.path');
Route::get('/about',[MasterController::class,'About'])->name('about.path');
Route::get('/membre/teachers',[MasterController::class,'Teacher'])->name('teacher.path');
Route::get('/membre/chercheurs',[MasterController::class,'Chercheur'])->name('chercheur.path');
Route::get('/membre/doctorants',[MasterController::class,'Doctorant'])->name('doctorant.path');
Route::get('/publication',[MasterController::class,'Publication'])->name('pub.path');
Route::get('/responsable', [MasterController::class, 'Responsable'])->name('responsable.path');
Route::get('/profil2', [AdminController::class, 'MembreDetail2'])->name('profil2.path');

Route::get('/membre/{membre}', [MasterController::class, 'MembreDetail'])->name('membre_detail.path');
Route::get('/News/{news}', [MasterController::class, 'NewsDetail'])->name('news_detail.path');
Route::get('/Agenda/{agenda}', [MasterController::class, 'AgendaDetail'])->name('agenda_detail.path');
Route::get('/publication/{publication}', [MasterController::class, 'PublicationDetail'])->name('pub_detail.path');


Route::get('/contact', function () {
    return view('users.contact');
})->name('contact.path');

Route::get('/login', function () {
    return view('users.login');
})->name('login.path');




Route::post('/auth-link', [AuthController::class,'Login'])->name('link.auth');
Route::get('/register-link',[AuthController::class,'Register'])->name('link.register');
Route::post('/store-link', [AuthController::class,'Create'])->name('link.store');
Route::get('/logout',[AuthController::class,'logout'])->name('link.logout');;

//route pour ceux qui sont Membre
Route::middleware('auth')->group(function(){

Route::get('/profil', [AuthController::class, 'Profil'])->name('profil.path');
Route::get('/edit-profil',[AuthController::class,'EditProfil'])->name('editProfil.path');
Route::get('/update-profil',[AuthController::class,'UpdateProfil'])->name('link.update');
// Route::post('/update-profil/{user}', [AuthController::class, 'UpdateProfil'])->name('link.update');
// Route::get('/Add_Publication', [MasterController::class, 'AddPub'])->name('addPub.path');
Route::post('/storePub', [MasterController::class, 'StorePub'])->name('save.pub');
// Route::get('/edit-profil/{user}',[AuthController::class,'EditProfil'])->name('editProfil.path');

Route::post('/update-these/{user}', [AuthController::class, 'UpdateThese'])->name('link.updateThese');
Route::post('/update-site/{user}', [AuthController::class, 'UpdateSite'])->name('link.updateSite');
Route::post('/update-Domaine/{user}', [AuthController::class, 'UpdateDomaine'])->name('link.updateDomaine');
Route::post('/Auth/storePub', [AuthController::class, 'StorePub'])->name('auth_save.pub');

Route::get('/publication/user/{publication}', [AuthController::class, 'PublicationDetail'])->name('auth_pub_detail.path');


});
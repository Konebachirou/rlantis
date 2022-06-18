@extends('authUser.layouts.app')
@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                @if(auth()->user()->img!=null)
                <img alt="User Avatar"  class="profile-user-img img-fluid img-circle" width="100" height="100" src="{{Storage::url($item->img)}}">
                @elseif(auth()->user()->sexe=="M")
                <img alt="User Avatar"  class="profile-user-img img-fluid img-circle" width="100" src="{{asset('assets/img/avatarM.jpg')}}">
                @else
                <img alt="User Avatar"  class="profile-user-img img-fluid img-circle" width="100" src="{{asset('assets/img/avatarF.jpg')}}">
                @endif
                  <!-- <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture"> -->
                     </div>

                     <h3 class="profile-username text-center">{{auth()->user()->nom}} {{auth()->user()->prenom}}</h3>

                     <!-- <p class="text-muted text-center">Software Engineer</p> -->

                     <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b><i class="fas fa-envelope mr-1"></i>Email</b> <a href="mailto:{{auth()->user()->email }}" class="float-right">{{auth()->user()->email}}</a>
                      </li>
                      <li class="list-group-item">
                        <b><i class="fas fa-phone-alt mr-1"></i>Contact</b> <a href="tel:{{auth()->user()->contact }}"  class="float-right">{{auth()->user()->contact}}</a>
                      </li>
                      <li class="list-group-item">
                        <b><i class="fas fa-map-marker-alt mr-1"></i>Adresse</b> <a class="float-right">{{auth()->user()->location}}</a>
                      </li>
                      <li class="list-group-item">

                        <b> <i class="fas fa-file-alt mr-1">
                        </i>Curiculum Vitae (CV)</b>
                        @if(auth()->user()->cv != null)
                        <a href="{{Storage::url(auth()->user()->cv)}}" target="_blank" class="float-right">CV Français</a>
                        @else
                        <a class="float-right"> Aucun CV </a>
                        @endif
                      </li>
                    </ul>
                   <button type="button" class="btn btn-info btn-block" style="padding: 0px 4px 0px 4px;" data-toggle="modal" data-target="#info">
                  Modifier
                </button> 
                  

                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->


              </div>
              <div class=" col-md-4">
                <!-- About Me Box -->
                <div class="card card-primary card-outline">

                  <div class="card-header">
                     <button type="button" class="btn btn-info float-right" style="padding: 0px 4px 0px 4px;" data-toggle="modal" data-target="#these">
                  <i class="fas fa-edit "></i>
                </button> 
                    <h3 class="card-title">Sujet de Thèse</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body box-profile">

                    <p class="text-muted">
                      {!!auth()->user()->these!!}
                    </p>

                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <div class="card card-primary card-outline">
                  <div class="card-header">
                     <button type="button" class="btn btn-info float-right" style="padding: 0px 4px 0px 4px;" data-toggle="modal" data-target="#dr">
                  <i class="fas fa-edit "></i>
                </button> 
                    <h3 class="card-title">Domaine de Recherche</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">

                    <p class="text-muted">
                      {!!auth()->user()->research_domaine!!}
                    </p>

                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <div class=" col-md-4">
                <!-- About Me Box -->
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <button type="button" class="btn btn-info float-right" style="padding: 0px 4px 0px 4px;" data-toggle="modal" data-target="#site">
                  <i class="fas fa-edit "></i>
                </button> 
                    
                    <h3 class="card-title">Site</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">

                   <ul class="list-group list-group-unbordered mb-3">
                    @if(auth()->user()->researchgate != null)
                    <li class="list-group-item">
                      <b><i class="fas fa-envelope mr-1"></i>Email</b> <a href="{{auth()->user()->researchgate}}" target="_blank"  class="float-right">www.researchgate.net</a>
                    </li>
                    @elseif(auth()->user()->scholar != null)
                    <li class="list-group-item">
                      <b><i class="fas fa-phone-alt mr-1"></i>Contact</b> <a href="{{auth()->user()->scholar}}" target="_blank"  class="float-right">www.scholar.google.com</a>
                    </li>
                    @elseif(auth()->user()->acm != null)
                    <li class="list-group-item">
                      <img alt="" class="mr-2" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}"> <a href="{{auth()->user()->acm}}" target="_blank" class="float-right">www.dl.acm.org</a>
                    </li>
                    @elseif(auth()->user()->dblp != null)
                    <li class="list-group-item">
                      <b><i class="fas fa-phone-alt mr-1"></i>Contact</b> <a href="{{auth()->user()->dblp}}" target="_blank"  class="float-right">www.dblp.uni-trier.de</a>
                    </li>
                    @elseif(auth()->user()->ieeexplore != null)
                    <li class="list-group-item">
                      <img alt="" class="mr-2" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}"> <a href="{{auth()->user()->ieeexplore}}" target="_blank" class="float-right">www.ieeexplore.ieee.org</a>
                    </li>
                    @else
                    <li class="list-group-item">aucun site </li>
                    @endif

                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>

          </div>
          <!-- /.row -->

          <div class="row">
           <!-- /.col -->
           <div class="col-md-12">

            <div class="card card-outline card-primary">
              <div class="card-header">
                 <button type="button" class="btn btn-info float-right" style="padding: 0px 4px 0px 4px;" data-toggle="modal" data-target="#pub">
                  <i class="fas fa-plus mr-1"></i>Ajouter
                </button> 
                
                <h3 class="card-title">PUBLICATIONS</h3>

                <!-- <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div> -->
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <div class="row"> 
                @foreach($pubs as $item)
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="card card-outline  card-warning"  style="height: 240px">
                    <div class="card-header">
                      <h3 class="card-title" style="display: -webkit-box;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        overflow: hidden;
                        width: fit-content;
                        text-align: justify-all;
                        text-overflow: ellipsis;">{{$item->title}}</h3>


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="row">
                        <p class="textelipsise3" style="display: -webkit-box;
                        -webkit-line-clamp: 4;
                        -webkit-box-orient: vertical;
                        overflow: hidden;
                        width: fit-content;
                        text-align: justify-all;
                        text-overflow: ellipsis;">{!!$item->desc!!} </p>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="text-right">
                       <p  class="float-left">publié le: {{  date("d M Y", strtotime($item->created_at)) }} </p>
                       <a href="{{ route('auth_pub_detail.path', $item->id) }}" class="btn btn-sm btn-primary">
                         Voir Plus
                       </a>
                     </div>
                   </div>

                   <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
               </div>
               <!-- /.col -->
             @endforeach
           </div>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
       </div>

       <!-- /.col -->
     </div>
   </div><!-- /.container-fluid -->
 </section>
 <!-- /.content -->


<!-- //Modal Information -->
 <div class="modal fade" id="info">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form  action="{{ route('link.update', auth()->user() ) }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="modal-header">
              <h4 class="modal-title">Modifier Mes Informations</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <div class="row">
               <div class="col-md-5">
                  <div class="form-group">
                <label for="inputName">Photo Profil</label>
                <input type="file" id="inputName" name="img" accept="image/*"   class="form-control">
              </div>
              
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                <label for="inputName">Fonction</label>
                <select for="inputName" name="type" class="form-control">
                  @foreach($types as $item)
                <option  <?php if ($item->id==auth()->user()->type):  ?>
                  selected
                <?php endif ?> value ="{{ $item->id }}">{{ $item->nom }}</option>
                @endforeach
                  <!-- <option></option> -->
                </select>
              </div>
               </div>

               <div class="col-md-3">
                  <div class="form-group">
                <label for="inputName">Sexe</label>
                <select for="inputName" name="sexe" class="form-control">
                 <option <?php if ('M'==auth()->user()->sexe):  ?>
                  selected
                <?php endif ?> value="M">Homme</option>
              <option <?php if ('F'==auth()->user()->sexe):  ?>
                  selected
                <?php endif ?> value="F">Femme</option>
                  <!-- <option></option> -->
                </select>
              </div>
               </div>


             </div>
             <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                <label for="inputName">Nom</label>
                <input type="text" id="inputName" name="nom" value="{{auth()->user()->nom}}"  class="form-control">
              </div>
              
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                <label for="inputName">Prenom</label>
                <input type="text" id="inputName" name="prenom" value="{{auth()->user()->prenom}}"  class="form-control">
              </div>
               </div>
             </div>

              <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                <label for="inputName">Email</label>
                <input type="email" id="inputName" name="email" value="{{auth()->user()->email}}"  class="form-control">
              </div>
              
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                <label for="inputName">Contact</label>
                <input type="text" id="inputName" name="contact" value="{{auth()->user()->contact}}"  class="form-control">
              </div>
               </div>
             </div>

              <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                <label for="inputName">Adresse</label>
                <input type="text" id="inputName" name="location" value="{{auth()->user()->location}}"  class="form-control">
              </div>
              
               </div>
               <div class="col-md-6">
                  <div class="form-group">

                <label for="inputName">Curiculum vitae (CV)</label>
                    <input type="file" name="cv"   class="form-control">
              </div>
               </div>
             </div>


            
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<!-- //Modal these -->
 <div class="modal fade" id="these">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form  action="{{ route('link.updateThese', auth()->user() ) }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="modal-header">
              <h4 class="modal-title">Thèse</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                    <textarea id="compose-textarea" name="these" class="form-control" style="height: 300px">
                      {{auth()->user()->these}}
                    </textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


<!-- //Modal Domaine de Recherche -->
 <div class="modal fade" id="dr">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form  action="{{ route('link.updateDomaine', auth()->user() ) }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="modal-header">
              <h4 class="modal-title">Domaine de Recherche</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                    <textarea id="compose-textarea2" name="research_domaine" class="form-control" style="height: 300px">
                      {{auth()->user()->research_domaine}}
                    </textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


<!-- Modal Site -->
 <div class="modal fade" id="site">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
             <form  action="{{ route('link.updateSite', auth()->user() ) }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="modal-header">
              <h4 class="modal-title">Site</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Lien Researchgate</label>
                    <input type="text" id="inputName"   class="form-control" value="{{auth()->user()->researchgate}}"  name="researchgate"  >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Lien Scholar</label>
                    <input type="text" id="inputName"   class="form-control" value="{{auth()->user()->scholar}}"  name="scholar"  >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Lien ACM</label>
                    <input type="text" id="inputName"   class="form-control" value="{{auth()->user()->acm}}"  name="acm"  >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Lien DBLP</label>
                    <input type="text" id="inputName"   class="form-control" value="{{auth()->user()->dblp}}"  name="dblp"  >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Lien Ieeexplore</label>
                    <input type="text" id="inputName" class="form-control" value="{{auth()->user()->ieeexplore}}"  name="researchgate"  >
                  </div>
                </div>
                <!-- <div class="col-md-6">
                  <div class="form-group">
                    <label>Lien Researchgate</label>
                    <input type="text" id="inputName"   class="form-control" value="{{auth()->user()->researchgate}}"  name="researchgate"  >
                  </div>
                </div> -->
              </div>


            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



<!-- //Modal Publication -->
 <div class="modal fade" id="pub">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form  action="{{ route('auth_save.pub') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="modal-header">
              <h4 class="modal-title">Site</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label for="inputName">Titre</label>
                  <input type="text" id="inputName" name="title" required class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Co-Auteur</label>
                  <input type="text" id="inputName" name="parteners" required class="form-control">
                </div>
                <div class="form-group">
                    <textarea id="compose-textarea3" name="desc" class="form-control" style="height: 300px">
                      
                    </textarea>
                </div>

                <div class="form-group">
                  <input type="text" id="inputName" hidden name="active" value="false" class="form-control">
                </div>
               <!--  <div class="form-group">
                  <label for="inputDescription">Description</label>
                  <textarea id="inputDescription" name="desc" required class="form-control" rows="4"></textarea>
                </div> -->
               <div class="form-group">
                    <div class="btn btn-default">
                      <input type="file" name="doc" required class="form-control">
                    </div>
                  </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


@stop


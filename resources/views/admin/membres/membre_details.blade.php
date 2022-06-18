@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        	@foreach($types as $item)
          @if($item->id == $user->type)
          <h1 class="m-0">{{$item->nom}} </h1>
          @endif
          @endforeach
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin_home.path') }}">Home</a></li>
            @foreach($types as $item)
            @if($item->id == $user->type)
            <li class="breadcrumb-item active">{{$item->nom}} </li>
            @endif
            @endforeach
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->



  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                @if($user->img!=null)
                <img alt="User Avatar"  class="profile-user-img img-fluid img-circle" width="100" height="100" src="{{Storage::url($item->img)}}">
                @elseif($user->sexe=="M")
                <img alt="User Avatar"  class="profile-user-img img-fluid img-circle" width="100" src="{{asset('assets/img/avatarM.jpg')}}">
                @else
                <img alt="User Avatar"  class="profile-user-img img-fluid img-circle" width="100" src="{{asset('assets/img/avatarF.jpg')}}">
                @endif
                  <!-- <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture"> -->
                     </div>

                     <h3 class="profile-username text-center">{{$user->nom}} {{$user->prenom}}</h3>

                     <!-- <p class="text-muted text-center">Software Engineer</p> -->

                     <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b><i class="fas fa-envelope mr-1"></i>Email</b> <a href="mailto:{{$user->email }}" class="float-right">{{$user->email}}</a>
                      </li>
                      <li class="list-group-item">
                        <b><i class="fas fa-phone-alt mr-1"></i>Contact</b> <a href="tel:{{$user->contact }}"  class="float-right">{{$user->contact}}</a>
                      </li>
                      <li class="list-group-item">
                        <b><i class="fas fa-map-marker-alt mr-1"></i>Adresse</b> <a class="float-right">{{$user->location}}</a>
                      </li>
                      <li class="list-group-item">

                        <b> <i class="fas fa-file-alt mr-1">
                        </i>Curiculum Vitae (CV)</b>
                        @if($user->cv != null)
                        <a href="{{Storage::url($user->cv)}}" target="_blank" class="float-right">CV Français</a>
                        @else
                        <a class="float-right"> Aucun CV </a>
                        @endif
                      </li>
                    </ul>
                    @if($user->active=='true')
                    <a href="{{ route('status.update', [$user->id,'false']) }}" class="btn btn-success btn-block"><b>Profil Activé</b></a>

                    @else
                    <a href="{{ route('status.update', [$user->id,'true']) }}" class="btn btn-danger btn-block"><b>Profil Désactivé</b></a>

                    @endif

                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->


              </div>
              <div class=" col-md-4">
                <!-- About Me Box -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Sujet de Thèse</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body box-profile">

                    <p class="text-muted">
                      {!!$user->these!!}
                    </p>

                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Domaine de Recherche</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">

                    <p class="text-muted">
                      {!!$user->research_domaine!!}
                    </p>

                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <div class=" col-md-4">
                <!-- About Me Box -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Site</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">

                   <ul class="list-group list-group-unbordered mb-3">
                    @if($user->researchgate != null)
                    <li class="list-group-item">
                      <b><i class="fas fa-envelope mr-1"></i>Email</b> <a href="{{$user->researchgate}}" target="_blank"  class="float-right">www.researchgate.net</a>
                    </li>
                    @elseif($user->scholar != null)
                    <li class="list-group-item">
                      <b><i class="fas fa-phone-alt mr-1"></i>Contact</b> <a href="{{$user->scholar}}" target="_blank"  class="float-right">www.scholar.google.com</a>
                    </li>
                    @elseif($user->acm != null)
                    <li class="list-group-item">
                      <img alt="" class="mr-2" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}"> <a href="{{$user->acm}}" target="_blank" class="float-right">www.dl.acm.org</a>
                    </li>
                    @elseif($user->dblp != null)
                    <li class="list-group-item">
                      <b><i class="fas fa-phone-alt mr-1"></i>Contact</b> <a href="{{$user->dblp}}" target="_blank"  class="float-right">www.dblp.uni-trier.de</a>
                    </li>
                    @elseif($user->ieeexplore != null)
                    <li class="list-group-item">
                      <img alt="" class="mr-2" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}"> <a href="{{$user->ieeexplore}}" target="_blank" class="float-right">www.ieeexplore.ieee.org</a>
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
                <h3 class="card-title">PUBLICATIONS</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <div class="row"> 
                @foreach($pubs as $item)
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="card card-outline  card-warning" >
                    <div class="card-header">
                      <h3 class="card-title">{{$item->title}}</h3>


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
                       <a href="{{ route('admin_pub_detail.path', $item->id) }}" class="btn btn-sm btn-primary">
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


</div>
@stop


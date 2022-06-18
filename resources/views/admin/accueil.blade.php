@extends('admin.layouts.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin_home.path') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">MEMBRES</span>
              <span class="info-box-number">
                {{$membre}}
                <small> Personnes</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-copy"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">PUBLICATIONS</span>
              <span class="info-box-number">{{$nbPub}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-info-circle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">NEWS</span>
              <span class="info-box-number">{{$nbNews}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">AGENDA</span>
              <span class="info-box-number">{{$nbAgenda}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- MAP & BOX PANE -->

          <!-- /.card -->
          <div class="row">
            <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="card" style="height: 380px">
                <div class="card-header">
                  <h3 class="card-title"> Nouveau Membre</h3>

                  <div class="card-tools">
                    <span class="badge badge-danger">{{$active}} Membre non autorisé</span>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <ul class="users-list clearfix">
                    @foreach($latestUsers as $item)
                    <li>
                      @if($item->img!=null)
                      <a href="{{ route('admin_membre_detail.path', $item->id) }}"><img alt="User Avatar"  class="img-circle elevation-2" width="100" height="100" src="{{Storage::url($item->img)}}"></a>
                      @elseif($item->sexe=="M")
                      <a href="{{ route('admin_membre_detail.path', $item->id) }}"><img alt="User Avatar"  class="img-circle elevation-2" width="100" src="{{asset('assets/img/avatarM.jpg')}}"></a>
                      @else
                      <a href="{{ route('admin_membre_detail.path', $item->id) }}"><img alt="User Avatar"  class="img-circle elevation-2" width="100" src="{{asset('assets/img/avatarF.jpg')}}"></a>
                      @endif
                      <!-- <img src="{{asset('admin/dist/img/user1-128x128.jpg')}}" alt="User Image"> -->
                      <a class="users-list-name mt-2" href="#">{{$item->nom}} {{$item->prenom}}</a>
                      <span class="users-list-date">{{  date("d M Y", strtotime($item->created_at)) }}</span>
                    </li>
                    @endforeach
                  </ul>
                  <!-- /.users-list -->
                </div>

                <!-- /.card-footer -->
              </div>
              <!--/.card -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
              <!-- PRODUCT LIST -->
              <div class="card" style="height: 380px">
                <div class="card-header">
                  <h3 class="card-title">Dernières Publications</h3>


                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <ul class="products-list product-list-in-card pl-2 pr-2">
                    @foreach($pubs as $pub)
                    <li class="item">
                      <div class="product-img">
                        @foreach($users as $user)
                        @if($pub->id_user==$user->id)

                        @if($user->img!=null)
                        <a href="{{ route('admin_membre_detail.path', $user->id) }}"><img alt="User Avatar"  class="img-size-50" width="100" height="100" src="{{Storage::url($user->img)}}"></a>
                        @elseif($user->sexe=="M")
                        <a href="{{ route('admin_membre_detail.path', $user->id) }}"><img alt="User Avatar"  class="img-size-50" width="100" src="{{asset('assets/img/avatarM.jpg')}}"></a>
                        @else
                        <a href="{{ route('admin_membre_detail.path', $user->id) }}"><img alt="User Avatar"  class="img-size-50" width="100" src="{{asset('assets/img/avatarF.jpg')}}"></a>
                        @endif
                        @endif
                        @endforeach
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Publier le {{  date("d M Y", strtotime($item->created_at)) }} à {{  date("h:m", strtotime($item->created_at)) }}
                          @if($item->active=='true')
                          <span class="badge badge-success float-right">Autorisé</span></a>
                          @else
                          <span class="badge badge-danger float-right">Non Autorisé</span></a>
                          @endif
                          <span class="product-description text-truncate">
                            {!!$pub->title!!}
                          </span>
                        </div>
                      </li>
                      <!-- /.item -->
                      @endforeach


                    </ul>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="{{ route('admin_pub.path') }}" class="uppercase">Voir Plus</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->


          </div>
          <!-- /.col -->


          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @stop
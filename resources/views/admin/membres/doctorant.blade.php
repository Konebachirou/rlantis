@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Doctorant </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin_home.path') }}">Home</a></li>
            <li class="breadcrumb-item active">Doctorant </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  @if(Session::get('message'))
  <div class="alert alert-success mr-4 ml-4 alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Alert!</h5>
    {{ Session::get('message') }}
  </div>
  @endif
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        @foreach($doctorants as $item)
        <!-- /.col -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="card card-widget widget-user">
            @if($item->active=='true')
            <a href="{{ route('status.update', [$item->id,'false']) }}"><span class="badge badge-success navbar-badge " style="padding: 10px">activé</span></a>
            @else
            <a href="{{ route('status.update', [$item->id,'true']) }}"><span class="badge badge-danger navbar-badge " style="padding: 8px">désactivé</span></a>
            @endif
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-info">
              <h3 class="widget-user-username">{{$item->nom}} {{$item->prenom}}</h3>
            </div>
            <div class="widget-user-image">
              @if($item->img!=null)
              <a href="{{ route('admin_membre_detail.path', $item->id) }}"><img alt="User Avatar"  class="img-circle elevation-2" width="100" height="100" src="{{Storage::url($item->img)}}"></a>
              @elseif($item->sexe=="M")
              <a href="{{ route('admin_membre_detail.path', $item->id) }}"><img alt="User Avatar"  class="img-circle elevation-2" width="100" src="{{asset('assets/img/avatarM.jpg')}}"></a>
              @else
              <a href="{{ route('admin_membre_detail.path', $item->id) }}"><img alt="User Avatar"  class="img-circle elevation-2" width="100" src="{{asset('assets/img/avatarF.jpg')}}"></a>
              @endif
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-7 border-right">
                  <div class="description-block">
                    <h5 class="description-header" style="color: #000;">Contact</h5>
                    <span class="description-text" style="color: #000;">{{$item->contact}}</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-5">
                  <div class="description-block">
                    <h5 class="description-header" style="color: #000;">Publications</h5>
                    <span class="description-text" style="color: #000;">12</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <a href="{{ route('Delete-user.path', $item->id) }}" class="btn btn-sm btn-danger">
                Supprimer
              </a>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        @endforeach

        <div >
          {{ $doctorants->links() }}
        </div>


      </div>
    </div>
  </section>
</div>

@stop
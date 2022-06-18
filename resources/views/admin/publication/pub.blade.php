@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">

					<h1 class="m-0">Publication</h1>

				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('admin_home.path') }}">Home</a></li>

						<li class="breadcrumb-item active">Publication</li>

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
				<div class="col-md-12">

					<div class="card card-outline card-primary" >

						<div class="card-body">
							<div class="row"> 
								@foreach($pubs as $item)
								<!-- /.col -->
								<div class="col-md-6">
									<div class="card card-outline  card-warning"  style="height: 246px">
										<div class="card-header">
											@if($item->active=='true')
                          <span class="badge badge-success float-left">Autorisé</span></a>
                          @else
                          <span class="badge badge-danger float-left">Non Autorisé</span></a>
                          @endif
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
												-webkit-line-clamp: 3;
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
												<a href="{{ route('Delete-pub.path', $item->id) }}" class="btn btn-sm btn-danger">
													Supprimer
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
							
							{!! $pubs->links() !!}
							
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
</div>

@stop
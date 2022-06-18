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



	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<div class="card card-outline card-warning" >
						<div class="card-header">
							@if($pub->active =='true')
							<a href="{{ route('pub_status.update', [$pub->id,'false']) }}" class="btn btn-sm btn-success">
								activé
							</a>
							
							@else
							<a href="{{ route('pub_status.update', [$pub->id,'true']) }}" class="btn btn-sm btn-danger">
								désactivé
							</a>
							
							@endif

						</div>
						<div class="card-body">
							<div class="row"> 
								<div class="col-md-8">
									<div class="card card-outline  card-info" >

										<div class="card-body">
											<h3>{{$pub->title}}</h3>
											<p><strong>Co-Auteur:</strong> {{$pub->parteners}}</p>

											<div class="bg-primary p-2 " style="border-radius: 0.8rem;">
												Résumé
											</div>
											
											<p class="mt-2">
												{!! $pub->desc !!}
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="card card-outline  card-lightblue" >
										<div class="card-body">
											<a href="{{Storage::url($pub->doc)}}" target="_blank"><img alt="" class="" width="80" src="{{asset('assets/img/icons/pdf-svgrepo-com.svg')}}">
												<p>Télécharger le document</p></a>
											</div>
										</div>
									</div>


								</div>
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
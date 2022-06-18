@extends('authUser.layouts.app')
@section('content')

<div class="content">
	<!-- Content Header (Page header) -->
	
	<!-- /.content-header -->



	<!-- Main content -->
	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="card card-outline card-warning" >

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
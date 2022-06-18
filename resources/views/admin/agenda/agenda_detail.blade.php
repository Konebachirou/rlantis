@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">

					<h1 class="m-0">Agenda</h1>

				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('admin_home.path') }}">Home</a></li>

						<li class="breadcrumb-item active">Agenda</li>

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
				<div class="col-md-2"></div>
				<div class="col-md-8">

					<div class="card card-outline card-warning" >
						<div>
							<div class="card-body">
								<p>
									<p><strong>{!!$agenda->title!!}</strong></p>
									<p  class="float-left mr-4">Date: {{  date("d M Y", strtotime($agenda->date)) }}</p>
									<p class="ml-4">Lieu: {!!$agenda->lieu!!}</p>
									<p>{!!$agenda->desc!!} </p>
								</p>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</section>
	</div>

	@stop
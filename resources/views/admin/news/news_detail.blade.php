@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">

					<h1 class="m-0">News</h1>

				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('admin_home.path') }}">Home</a></li>

						<li class="breadcrumb-item active">News</li>

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
						<div>
						<div class="card-body">
							<p>
								<img src="{{$news->img}}" class="float-left mr-3 mb-2"  width="400" height="300">
								<p><strong>{!!$news->title!!}</strong></p>
								<p>{!!$news->desc!!} </p>
							</p>
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
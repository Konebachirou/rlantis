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
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Ajouter News</h3>

              <!-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div> -->
            </div>
            <form  action="{{ route('admin_save.news') }}" method="POST" enctype="multipart/form-data">
							@csrf
            <div class="card-body">
            	
              <div class="form-group">
                <label for="inputName">Titre</label>
                <input type="text" id="inputName" name="title" required class="form-control">
              </div>
             
              <div class="form-group">
                <label for="inputDescription">Description</label>
                    <textarea id="compose-textarea" name="desc" class="form-control" style="height: 300px">
                      
                    </textarea>
                </div>
             <!--  <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" name="desc" required class="form-control" rows="4"></textarea>
              </div> -->
             <div class="form-group">
                  <div class="btn btn-default">
                    <input type="file" name="img" accept="image/*" required>
                  </div>
                </div>

               
            </div>
            <div class="card-footer">
            	<button class="btn btn-success p-2" style="width: 200px; vertical-align: middle;">Publier</button>
            </div>
		</form>

          
          <!-- /.card -->
        </div>
    	 </div>
    </div>
</section>
</div>

@stop
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
        <div class="card-header">
         <button type="button" class="btn btn-info float-right" style="padding: 0px 4px 0px 4px;" data-toggle="modal" data-target="#agenda">
          <i class="fas fa-plus mr-1"></i>Ajouter
        </button> 
      </div>

      <div class="card-body">
       <div class="row"> 
        @foreach($agenda as $item)
        <!-- /.col -->
        <div class="col-md-6">
          <div class="card card-outline  card-warning"  style="height: 210px">

            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
               <p  class="float-left ml-4">Date: {{  date("d M Y", strtotime($item->date)) }}</p>
               <p class="ml-4">Lieu: {!!$item->lieu!!}</p>
               
             </div>
             <div class="row ">
                 <p class="textelipsise3" style="display: -webkit-box;
               -webkit-line-clamp: 3;
               -webkit-box-orient: vertical;
               overflow: hidden;
               width: fit-content;
               text-align: justify-all;
               text-overflow: ellipsis;">{!!$item->title!!} </p>
               </div>
           </div>
           <div class="card-footer">
            <div class="text-right">
             <p  class="float-left">publié le: {{  date("d M Y", strtotime($item->created_at)) }} </p>
             <a href="{{ route('admin_agenda_detail.path', $item->id) }}" class="btn btn-sm btn-primary">
               Voir Plus
             </a>
             <a href="{{ route('Delete-agenda.path', $item->id) }}" class="btn btn-sm btn-danger">
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
  {{ $agenda->links() }}
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
</div>
</div>
</section>
</div>




<!-- //Modal Domaine de Recherche -->
<div class="modal fade" id="agenda">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <form  action="{{ route('admin_save.agenda') }}" method="POST" enctype="multipart/form-data">
       @csrf
       <div class="modal-header">
        <h4 class="modal-title">Ajouter agenda</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputName">Date</label>
                <input type="date" id="inputName" name="date" required class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputName">Lieu</label>
                <input type="text" id="inputName" name="lieu" required class="form-control">
              </div>
            </div>
          </div>

          <label for="inputName">Titre</label>
          <input type="text" id="inputName" name="title" required class="form-control">
        </div>


        <div class="form-group">
          <label for="inputDescription">Description</label>
          <textarea id="compose-textarea" name="desc" class="form-control" style="height: 300px">

          </textarea>
        </div>

      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"> Enregistrer</button>
      </div>
    </form>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@stop
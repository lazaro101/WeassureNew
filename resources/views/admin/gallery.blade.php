@extends('layouts.admin')

@section('style')
<style type="text/css">
	.team-player{
		text-align: center;
	}
	.team-player img{
		max-width: 200px;
	}
</style>
@endsection

@section('content') 
<div class="container">

	<div class="space-100"></div>
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="typhography-line" style="text-align: center">
				<h1>Gallery</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<center>
				<button class="btn btn-success btn-round btn-lg add" type="button">ADD ALBUM &nbsp; <i class="now-ui-icons ui-1_simple-add"></i></button>
			</center>
		</div>
	</div>
	<div class="section"> 
		<div class="row">
			@foreach($data as $data)
			<div class="col-md-4">
				<div class="team-player">
					@foreach($data->albumimgs as $img)
                    <img src="/{{$img->img_path}}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                    @break
					@endforeach
                    <h4 class="title">{{$data->album_name}}<br><small>{{count($data->albumimgs)}} Photos</small></h4>
                    <p class="category">Date Uploaded: {{date_create($data->date)->format('M d Y')}}</p> 
                    <a href="/Admin/Gallery/{{$data->album_id}}" class="btn btn-info btn-icon btn-round"><i class="fa fa-info-circle"></i></a>
                    <button type="button" class="btn btn-primary btn-icon btn-round edit" value="{{$data->album_id}}"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-danger btn-icon btn-round delete" value="{{$data->album_id}}"><i class="fa fa-trash"></i></button>
                </div>
			</div> 
			@endforeach
		</div>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <h4 class="title title-up">Add Album</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="/addGallery" enctype="multipart/form-data">
                	{{csrf_field()}}
                	<input type="hidden" name="id">
                	<div class="form-group">
                		<label>Album Name: </label>
                		<input type="text" name="alname" class="form-control" maxlength="50" required>
                	</div> 
                	<div class="form-group">
                		<label>Photo/s: </label>
                		<input type="file" name="photo[]" class="form-control" multiple required>
                	</div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <h4 class="title title-up">Add Album</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="/editGallery" enctype="multipart/form-data">
                	{{csrf_field()}}
                	<input type="hidden" name="id">
                	<div class="form-group">
                		<label>Album Name: </label>
                		<input type="text" name="alname" class="form-control" maxlength="50" required>
                	</div>  
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-mini modal-danger" id="delModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </div>
            </div>
            <div class="modal-body">
            	<form method="post" action="/deleteGallery">
            		{{csrf_field()}}
            		<input type="hidden" name="id">
                <p>Are you sure you want to delete this album?</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-neutral">Yes</button>
                <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
            	</form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){
	$('.add').click(function() {
		$('#myModal form').trigger('reset'); 
		$('#myModal').modal();
	});
	$('.edit').click(function() {
		$('#editModal form').trigger('reset');
		$.ajax({
			url : '/getGallery',
			type : 'get',
			data : {
				id : $(this).val()
			},
			success:function(response){
				$('#editModal input[name=id]').val(response.album_id);
				$('#editModal input[name=alname]').val(response.album_name); 
			},
			complete:function(){
				$('#editModal').modal();
			}
		});
	});
	$('.delete').click(function() { 
        $('#delModal form input[name=id]').val($(this).val());
        $('#delModal').modal();
	}); 
});
</script>
@endsection
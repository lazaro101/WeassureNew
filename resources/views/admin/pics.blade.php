@extends('layouts.admin')

@section('style')
<link rel="stylesheet" href="{{asset('css/baguetteBox.min.css')}}">
<link href="{{asset('css/gallery-grid.css')}}" rel="stylesheet" />

@endsection

@section('content') 
<div class="container">
	<div class="space-100"></div>
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="typhography-line" style="text-align: center">
				<h1>{{$data->album_name}}</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-sm-12"> 
			<center>
				<button class="btn btn-success btn-round btn-lg add" type="button">ADD PHOTO &nbsp; <i class="now-ui-icons ui-1_simple-add"></i></button>
			</center>
		</div>
		<div class="col-lg-12 col-sm-12">
			<a class="btn btn-lg float-left" href="/Admin/Gallery"><i class="now-ui-icons arrows-1_minimal-left"></i> &nbsp; Back to Gallery</a>
		</div>
	</div>
	<div class="section">  
		<div class="tz-gallery">
	        <div class="row">
	        	@foreach($data->albumimgs as $img)
	            <div class="col-sm-6 col-md-4">
	                <a class="lightbox" href="{{asset($img->img_path)}}">
	                    <img src="{{asset($img->img_path)}}" alt="Image">
	                </a>
	                <button class="btn btn-danger btn-round btn-icon delete" value="{{$img->ai_id}}" style="position: absolute; top: 0; right: 5%"><i class="now-ui-icons ui-1_simple-remove"></i></button>
	            </div> 
	            @endforeach
	        </div> 
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
                <h4 class="title title-up">Add Photo/s</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="/addPics" enctype="multipart/form-data">
                	{{csrf_field()}}
                	<input type="hidden" name="id" value="{{$data->album_id}}"> 
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
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){
	$('.add').click(function() {
		$('#myModal form').trigger('reset');
		$('#myModal').modal();
	});
	$('.edit').click(function() {
		$('#myModal form').trigger('reset').attr('action','/editEmployee');
		$('#myModal h4.title').text('Edit Employee');
		$.ajax({
			url : '/getEmployee',
			type : 'get',
			data : {
				id : $(this).val()
			},
			success:function(response){
				$('#myModal input[name=id]').val(response.emp_id);
				$('#myModal input[name=fname]').val(response.fname);
				$('#myModal input[name=lname]').val(response.lname);
				$('#myModal input[name=position]').val(response.position);
			},
			complete:function(){
				$('#myModal').modal();
			}
		});
	});
	$('.delete').click(function() { 
		var picid = $(this).val();
		$.ajax({
			url : '/removePic',
			type : 'post',
			data : { 
            	_token: "{{ Session::token() }}",
            	alid : "{{ $data->album_id }}",
				picid : picid
			},
			success:function(response){
				$('.tz-gallery button[value='+picid+']').parent().remove();
			}
		});
	}); 
});
</script>

<script src="{{asset('js/baguetteBox.min.js')}}"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
@endsection
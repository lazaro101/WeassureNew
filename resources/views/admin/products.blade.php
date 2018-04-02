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
				<h1>Products</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<center>
				<button class="btn btn-success btn-round btn-lg add" type="button">ADD PRODUCT &nbsp; <i class="now-ui-icons ui-1_simple-add"></i></button>
			</center>
		</div>
	</div>
	<div class="section">  
        <div class="tz-gallery">
            <div class="row">
                @foreach($data as $data)
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset($data->product_path)}}">
                        <img src="{{asset($data->product_path)}}" alt="Image">
                    </a>
                    <button class="btn btn-danger btn-round btn-icon delete" value="{{$data->product_id}}" style="position: absolute; top: 0; right: 5%"><i class="now-ui-icons ui-1_simple-remove"></i></button>
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
                <h4 class="title title-up">Add Product/s</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="/addProduct" enctype="multipart/form-data">
                	{{csrf_field()}}
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
        var pid = $(this).val();
        $.ajax({
            url : '/removeProduct',
            type : 'post',
            data : { 
                _token: "{{ Session::token() }}", 
                pid : pid
            },
            success:function(response){
                $('.tz-gallery button[value='+pid+']').parent().remove();
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
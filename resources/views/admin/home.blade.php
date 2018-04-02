@extends('layouts.admin')

@section('content')
<div class="container">

	<div class="section">
		<div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <h4 class="title text-center">Modify your Website</h4>
                <ul class="nav nav-tabs nav-tabs-info justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                            <i class="now-ui-icons shopping_shop"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#about" role="tab">
                            <i class="now-ui-icons travel_info"></i> About Us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="space-100"></div>
            <!-- Tab panes -->
            <div class="tab-content" style="width: 100%">
                <div class="tab-pane active" id="home" role="tabpanel" >
					<form method="post" action="/saveHome" enctype="multipart/form-data">
						{{csrf_field()}}
						<center>
							<div class="form-group col-md-8">
								<input type="text" name="header" placeholder="Your Header here..." class="form-control" required maxlength="55" value="@if($home != ''){{$home->header}}@endif">
							</div>
							<div class="form-group col-md-6">
								<input type="text" name="subheader" placeholder="Your Sub Header here..." class="form-control" required maxlength="55" value="@if($home != ''){{$home->subheader}}@endif">
							</div>
						</center>
						<div class="space-50"></div>
						<center>
							<div class="form-group col-md-4">
								<input type="text" name="title" placeholder="Your Title here..." class="form-control" required maxlength="55" value="@if($home != ''){{$home->title}}@endif">
							</div>
						</center>
						<div class="container">
							<div class="space-50"></div>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group col-md-8">
										<input type="text" name="ctitle1" placeholder="Content Title here..." class="form-control" required maxlength="55" value="@if($home != ''){{$home->content1_title}}@endif">
									</div>
									<hr>
									<div class="form-group">
										<textarea name="cdesc1" rows="6" class="form-control" placeholder="Content Here..." required maxlength="900">@if($home != ''){{$home->content1_desc}}@endif</textarea>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input type="file" name="cimg1" class="form-control">
									</div>
									<img src="@if($home == '' || $home->content1_img == NULL){{asset('SystemImages/NOIMAGE.png')}}@else{{asset($home->content1_img)}}@endif" alt="Raised Image" class="rounded img-raised cimg1"> 
								</div>
							</div>
							<div class="space-50"></div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<input type="file" name="cimg2" class="form-control">
									</div>
									<img src="@if($home == '' || $home->content2_img == NULL){{asset('SystemImages/NOIMAGE.png')}}@else{{asset($home->content2_img)}}@endif" alt="Raised Image" class="rounded img-raised cimg2"> 
								</div>
								<div class="col-md-8">
									<div class="form-group col-md-8">
										<input type="text" name="ctitle2" placeholder="Content Title here..." class="form-control" required maxlength="55" value="@if($home != ''){{$home->content2_title}}@endif">
									</div>
									<hr>
									<div class="form-group">
										<textarea name="cdesc2" rows="6" class="form-control" placeholder="Content Here..." required maxlength="900">@if($home != ''){{$home->content2_desc}}@endif</textarea>
									</div>
								</div>
							</div>
							<div class="space-50"></div>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group col-md-8">
										<input type="text" name="ctitle3" placeholder="Content Title here..." class="form-control" required maxlength="55" value="@if($home != ''){{$home->content3_title}}@endif">
									</div>
									<hr>
									<div class="form-group">
										<textarea name="cdesc3" rows="6" class="form-control" placeholder="Content Here..." required maxlength="900">@if($home != ''){{$home->content3_desc}}@endif</textarea>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input type="file" name="cimg3" class="form-control">
									</div>
									<img src="@if($home == '' || $home->content3_img == NULL){{asset('SystemImages/NOIMAGE.png')}}@else{{asset($home->content3_img)}}@endif" alt="Raised Image" class="rounded img-raised cimg3"> 
								</div>
							</div>

							<div class="space-100"></div>
							<center>
								<h2>APPLY NOW!</h2>
							</center>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email:</label>
										<input type="text" name="email" class="form-control" required maxlength="55" value="@if($about != ''){{$about->email}}@endif">
									</div>
									<div class="form-group">
										<label>Tel Nos:</label>
										<input type="text" name="contact" class="form-control" required maxlength="155" value="@if($about != ''){{$about->contact}}@endif">
									</div>
									<div class="form-group">
										<label>Open:</label>
										<input type="text" name="open" class="form-control" required maxlength="155" value="@if($about != ''){{$about->day}}@endif">
									</div>
									<div class="form-group">
										<label>Time:</label>
										<input type="text" name="time" class="form-control" required maxlength="155" value="@if($about != ''){{$about->time}}@endif">
									</div>
									<div class="form-group">
										<label>Address:</label>
										<input type="text" name="address" class="form-control" required maxlength="200" value="@if($about != ''){{$about->address}}@endif">
									</div>
								</div>
								<div class="col-md-6">
									<!-- <img class="d-block" src="{{asset('nowui/assets/img/avatar.jpg')}}" alt="First slide" align="middle"> -->
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-success btn-lg float-right" type="submit">Save Changes</button>
								</div>
							</div>
						</form>
					</div>
                </div>

                <div class="tab-pane" id="about" role="tabpanel">
					<div class="container">
						<form method="post" action="/saveContent">
						{{csrf_field()}}
						<div id="content">
							@foreach($content as $cont)
							<div class="row">
								<div class="col-md-12">
									<button type="button" class="btn btn-sm btn-round btn-icon btn-danger float-right removecontent"><i class="now-ui-icons ui-1_simple-remove"></i></button>
									<input type="hidden" name="id[]" value="{{$cont->content_id}}" required maxlength="90">
									<center>
									<div class="form-group col-md-6">
										<input type="text" name="title[]" class="form-control" placeholder="Content Here..." value="{{$cont->content_title}}">
									</div>
									</center>
									<hr>
									<div class="form-group">
										<textarea class="form-control" name="desc[]" placeholder="Content Here..." rows="6" required maxlength="900">{{$cont->content_desc}}</textarea>
									</div>
								</div>
							</div>
							<div class="space-50"></div>
							@endforeach
						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-info btn-round btn-lg addcontent">Add Content</button>
								<button type="submit" class="btn btn-success btn-round btn-lg float-right">Save Changes</button>
							</div>
						</div>
						</form>
						<div class="space-100"></div>

						
					</div>
                </div>
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
                	<input type="hidden" name="id" value=""> 
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
            	<form method="post">
            		{{csrf_field()}}
            		<input type="hidden" name="id">
                <p>Are you sure you want to delete this Content?</p>
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

  	$('.addcontent').click(function(){
  		$('#content').append('<div class="row"><div class="col-md-12"><button type="button" class="btn btn-sm btn-round btn-icon btn-danger float-right removecontent"><i class="now-ui-icons ui-1_simple-remove"></i></button><input type="hidden" name="id[]"><center><div class="form-group col-md-6"><input type="text" name="title[]" class="form-control" placeholder="Content Here..." required maxlength="90"></div></center><hr><div class="form-group"><textarea class="form-control" name="desc[]" placeholder="Content Here..." rows="6" required maxlength="900"></textarea></div></div></div><div class="space-50"></div>');
  	});
  	$('#delModal form').on('submit',function(e){
  		e.preventDefault();
  		var id = $(this).find('input[name=id]').val();
  		$.ajax({
  			url : '/removeContent',
  			type : 'post',
  			data : {
  				_token : '{{Session::token()}}',
  				id : id
  			},
  			success:function(response){
  				$('#delModal').modal('hide');
  				$('#content input[name="id[]"][value="'+id+'"]').parent().parent().remove();
  				$('#content').find('.space-50').first().remove();
  			}
  		});
  	});

  	$('.removecontent').click(function(){ 
  		$('#delModal form input[name=id]').val($(this).parent().find('input').val());
  		$('#delModal').modal();
  	});


    $("input[name=cimg1]").change(function(event){
       var input = $(event.currentTarget);
       var file = input[0].files[0];
       var reader = new FileReader();
       reader.onload = function(e){
           image_base64 = e.target.result;
           $('.cimg1').attr("src", image_base64);
       };
       reader.readAsDataURL(file);
    });
    $("input[name=cimg2]").change(function(event){
       var input = $(event.currentTarget);
       var file = input[0].files[0];
       var reader = new FileReader();
       reader.onload = function(e){
           image_base64 = e.target.result;
           $('.cimg2').attr("src", image_base64);
       };
       reader.readAsDataURL(file);
    });
    $("input[name=cimg3]").change(function(event){
       var input = $(event.currentTarget);
       var file = input[0].files[0];
       var reader = new FileReader();
       reader.onload = function(e){
           image_base64 = e.target.result;
           $('.cimg3').attr("src", image_base64);
       };
       reader.readAsDataURL(file);
    });
  });
</script>

@endsection
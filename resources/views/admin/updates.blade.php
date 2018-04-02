@extends('layouts.admin')

@section('style')
<style type="text/css">
hr { 
  border: 0; 
  height: 1px; 
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
  margin: 30px;
  margin-top: 60px;
}
img {
	max-width: 80%;
}
</style>
@endsection
@section('content') 
<div class="container">
	<div class="space-50"></div>
	<div class="section">

		<form method="post" action="/saveUpdates" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="typhography-line" style="text-align: center">
					<h1>News</h1>
					<div class="form-group form-inline col-md-6" style="margin: auto;">
						<input type="file" name="news" class="form-control col-md-10">
						<label class="col-md-2"><button type="button" class="btn btn-icon btn-danger btn-round removenews"><i class="now-ui-icons ui-1_simple-remove"></i></button></label>
					</div>
				</div>
				<div class="space-50"></div>
				<center>
					<img src="@if($pic1 != ''){{asset($pic1->news_path)}}@else{{asset('SystemImages/NOIMAGE.jpg')}}@endif" alt="Raised Image" class="rounded img-raised newsimg"> 
				</center>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="typhography-line" style="text-align: center">
					<h1>New Products</h1>
					<div class="form-group form-inline col-md-6" style="margin: auto;">
						<input type="file" name="product" class="form-control col-md-10">
						<label class="col-md-2"><button type="button" class="btn btn-icon btn-danger btn-round removeprod"><i class="now-ui-icons ui-1_simple-remove"></i></button></label>
					</div>
				</div>  
				<div class="space-50"></div>
				<center>
					<img src="@if($pic2 != ''){{asset($pic2->np_path)}}@else{{asset('SystemImages/NOIMAGE.jpg')}}@endif" alt="Raised Image" class="rounded img-raised productimg"> 
				</center>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="typhography-line" style="text-align: center">
					<h1>Achiever of the Month</h1>
					<div class="form-group form-inline col-md-6" style="margin: auto;">
						<input type="file" name="achiever" class="form-control col-md-10">
						<label class="col-md-2"><button type="button" class="btn btn-icon btn-danger btn-round removeacvr"><i class="now-ui-icons ui-1_simple-remove"></i></button></label>
					</div>
				</div>
				<div class="space-50"></div>
				<center>
					<img src="@if($pic3 != ''){{asset($pic3->achiever_path)}}@else{{asset('SystemImages/NOIMAGE.jpg')}}@endif" alt="Raised Image" class="rounded img-raised achieverimg"> 
				</center>
			</div>
		</div>
		<div class="space-50"></div>
		<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-success btn-lg float-right">Save Changes</button>
			</div>
		</div>
		</form>

	</div>
</div>

@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){
	var newsimg = $('.newsimg').attr('src');
	var productimg = $('.productimg').attr('src');
	var achieverimg = $('.achieverimg').attr('src');

	$('.removenews').click(function(){
		$(this).parent().parent().parent().find('input').val("");
        $('.newsimg').attr("src", newsimg);
	});
	$('.removeprod').click(function(){
		$(this).parent().parent().parent().find('input').val("");
        $('.productimg').attr("src", productimg);
	});
	$('.removeacvr').click(function(){
		$(this).parent().parent().parent().find('input').val("");
        $('.achieverimg').attr("src", achieverimg);
	});

    $("input[name=news]").change(function(event){
       var input = $(event.currentTarget);
       var file = input[0].files[0];
       var reader = new FileReader();
       reader.onload = function(e){
           image_base64 = e.target.result;
           $('.newsimg').attr("src", image_base64);
       };
       reader.readAsDataURL(file);
    });
    $("input[name=product]").change(function(event){
       var input = $(event.currentTarget);
       var file = input[0].files[0];
       var reader = new FileReader();
       reader.onload = function(e){
           image_base64 = e.target.result;
           $('.productimg').attr("src", image_base64);
       };
       reader.readAsDataURL(file);
    });
    $("input[name=achiever]").change(function(event){
       var input = $(event.currentTarget);
       var file = input[0].files[0];
       var reader = new FileReader();
       reader.onload = function(e){
           image_base64 = e.target.result;
           $('.achieverimg').attr("src", image_base64);
       };
       reader.readAsDataURL(file);
    });
});
</script>
@endsection
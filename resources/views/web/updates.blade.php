@extends('layouts.web')

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
</style>
@endsection
@section('content')
<div class="page-header">
    <div class="page-header-image" data-parallax="true" style="background-image: url({{asset('SystemImages/update.jpg')}}) ;"></div>
</div> 
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="typhography-line" style="text-align: center">
					<h1>News</h1>
				</div>
				<div class="space-50"></div>
				<center>
					<img src="{{asset('SystemImages/NOIMAGE.jpg')}}" alt="Raised Image" class="rounded img-raised"> 
				</center>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="typhography-line" style="text-align: center">
					<h1>New Products</h1>
				</div>  
				<div class="space-50"></div>
				<center>
					<img src="{{asset('nowui/assets/img/avatar.jpg')}}" alt="Raised Image" class="rounded img-raised"> 
				</center>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="typhography-line" style="text-align: center">
					<h1>Achiever of the Month</h1>
				</div>
				<div class="space-50"></div>
				<center>
					<img src="{{asset('nowui/assets/img/avatar.jpg')}}" alt="Raised Image" class="rounded img-raised"> 
				</center>
			</div>
		</div>
	</div>
</div>
@endsection

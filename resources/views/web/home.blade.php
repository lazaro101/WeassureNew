@extends('layouts.web')

@section('content')
<div class="page-header">
    <div class="page-header-image" data-parallax="true" style="background-image: url('SystemImages/header.jpg') ;"></div>
</div>

<div class="section">
	<center>
		<h1>@if($home != ''){{$home->header}}@endif<br><small>@if($home != ''){{$home->subheader}}@endif</small></h1>
	</center>
	<div class="space-50"></div>
	<center>
		<h2>@if($home != ''){{$home->title}}@endif</h2>
	</center>
	<div class="container">
		<div class="space-50"></div>
		<div class="row">
			<div class="col-md-8">
				<h4>@if($home != ''){{$home->content1_title}}@endif</h4>
				<hr>
				<p>@if($home != ''){{$home->content2_desc}}@endif</p>
			</div>
			<div class="col-md-4">
				<img src="@if($home == '' || $home->content1_img == NULL){{asset('SystemImages/NOIMAGE.png')}}@else{{asset($home->content1_img)}}@endif" alt="Raised Image" class="rounded img-raised"> 
			</div>
		</div>
		<div class="space-50"></div>
		<div class="row">
			<div class="col-md-4">
				<img src="@if($home == '' || $home->content2_img == NULL){{asset('SystemImages/NOIMAGE.png')}}@else{{asset($home->content2_img)}}@endif" alt="Raised Image" class="rounded img-raised"> 
			</div>
			<div class="col-md-8">
				<h4>@if($home != ''){{$home->content2_title}}@endif</h4>
				<hr>
				<p>@if($home != ''){{$home->content2_desc}}@endif</p>
			</div>
		</div>
		<div class="space-50"></div>
		<div class="row">
			<div class="col-md-8">
				<h4>@if($home != ''){{$home->content3_title}}@endif</h4>
				<hr>
				<p>@if($home != ''){{$home->content3_desc}}@endif</p>
			</div>
			<div class="col-md-4">
				<img src="@if($home == '' || $home->content3_img == NULL){{asset('SystemImages/NOIMAGE.png')}}@else{{asset($home->content3_img)}}@endif" alt="Raised Image" class="rounded img-raised"> 
			</div>
		</div>

		<div class="space-100"></div>
		<center>
			<h2>APPLY NOW!</h2>
		</center>
		<div class="row">
			<div class="col-md-6">
				<h4 style="text-align: center">For Inquiries:</h4> 
				<h6><div class="btn btn-icon btn-round btn-primary"><i class="now-ui-icons ui-1_email-85"></i></div> Email: @if($about != ''){{$about->email}}@endif</h6>
				<h6><div class="btn btn-icon btn-round btn-primary"><i class="now-ui-icons tech_mobile"></i></div> Tel. Nos: @if($about != ''){{$about->contact}}@endif</h6>
				<h6><div class="btn btn-icon btn-round btn-primary"><i class="now-ui-icons ui-1_calendar-60"></i></div> Open: @if($about != ''){{$about->day}}@endif</h6>
				<h6><div class="btn btn-icon btn-round btn-primary"><i class="now-ui-icons ui-2_time-alarm"></i></div> Time: @if($about != ''){{$about->time}}@endif</h6>
				<h6><div class="btn btn-icon btn-round btn-primary"><i class="now-ui-icons shopping_shop"></i></div> Address: </h6>
				<p>@if($about != ''){{$about->address}}@endif</p>
			</div>
			<div class="col-md-6">
		<!-- 		<div class="section" id="carousel">
			        <div class="container">
			            <div class="row justify-content-center">
			                <div class="col-8">
			                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			                        <ol class="carousel-indicators"> 
			                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> 
			                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li> 
			                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li> 
			                        </ol>
			                        <div class="carousel-inner" role="listbox"> 
			                            <div class="carousel-item active">
			                                <img class="d-block" src="{{asset('nowui/assets/img/avatar.jpg')}}" alt="First slide" align="middle">
			                            </div>  
			                            <div class="carousel-item">
			                                <img class="d-block" src="{{asset('nowui/assets/img/avatar.jpg')}}" alt="First slide" align="middle">
			                            </div>  
			                            <div class="carousel-item">
			                                <img class="d-block" src="{{asset('nowui/assets/img/avatar.jpg')}}" alt="First slide" align="middle">
			                            </div>  
			                        </div>
			                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			                            <i class="now-ui-icons arrows-1_minimal-left"></i>
			                        </a>
			                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			                            <i class="now-ui-icons arrows-1_minimal-right"></i>
			                        </a>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div> -->
			</div>
		</div>
	</div>
</div>
@endsection
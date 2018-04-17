@extends('layouts.web')

@section('content')
<div class="page-header">
    <div class="page-header-image" data-parallax="true" style="background-image: url({{asset('SystemImages/about.jpg')}}) ; background-size: 200% 100%;"></div>
</div>

<div class="section">
	<div class="container">
		@foreach($content as $cont)
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<h2>{{$cont->content_title}}</h2>
				<hr>
				<p>{{$cont->content_desc}}</p>
			</div>
		</div>
		<div class="space-100"></div> 
		@endforeach
 
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<h2>Location and Schedule</h2>
				<hr>
		 		<div class="tim-row" id="schedule">
					<iframe src="https://www.google.com/maps/embed?pb=!1m25!1m11!1m3!1d111.75230034348522!2d121.02662945851264!3d14.64280541906234!2m2!1f0!2f0.44477396671773667!3m2!1i1024!2i768!4f45.40714752069232!4m11!3e6!4m3!3m2!1d14.642783099999999!2d121.0266139!4m5!1s0x3397b6568edab4ed%3A0xa5eac3bda8586aa!2s43+Del+Monte+Ave%2C+Quezon+City%2C+1104+Metro+Manila!3m2!1d14.642396!2d121.02683599999999!5e1!3m2!1sen!2sph!4v1516093507344" style="width: 80%; height: 350px;" frameborder="1" style="border:1" allowfullscreen></iframe>
				</div>
				<div style="width: 70%; margin-left: 15%; text-align: left">
	                <strong>Address:</strong> @if($about != ''){{$about->address}}@endif<br>
	                <strong>Open:</strong> @if($about != ''){{$about->day}}@endif<br>
	                <strong>Time:</strong> @if($about != ''){{$about->time}}@endif<br>
	                <strong>Tel. Nos.:</strong> @if($about != ''){{$about->contact}}@endif<br>
	                <strong>Email:</strong> @if($about != ''){{$about->email}}@endif<br>
				</div>
			</div>
		</div>
		@if(count($emps) > 0)
		<div class="space-100"></div>
		<div class="row">
			<div class="col-md-12">
				<h2 style="text-align: center">DEALERS</h2>
				<hr> 
				<div style="width: 80%; margin-left: 10%;">
				<img src="{{asset('SystemImages/tarp.jpg')}}" alt="Raised Image" class="rounded img-raised">
				<div class="space-50"></div>
					<table class="table table-striped">
						<tbody>
							<tr>
								<th>Name</th>
								<th>Position</th>
							</tr>
							@foreach($emps as $emp)
							<tr>
								<td>{{$emp->fname.' '.$emp->lname}}</td>
								<td>{{$emp->position}}</td>
							</tr> 
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		@endif

		<div class="space-100"></div>
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<h2>Our Providers</h2>
				<hr>
				<img class="d-block rounded img-raised" src="{{asset('SystemImages/providers.jpg')}}" alt="First slide" align="middle">
				
			</div>
		</div>
	</div>
</div>
@endsection
@extends('layouts.web')

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
<div class="page-header">
    <div class="page-header-image" data-parallax="true" style="background-image: url('SystemImages/update.jpg') ;"></div>
</div>

<div class="section"> 
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="typhography-line" style="text-align: center">
					<h1>Gallery</h1>
				</div>
			</div>
		</div>

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
	                <a href="/Gallery/{{$data->album_id}}" class="btn btn-info btn-round"><i class="fa fa-info-circle"></i> View</a> 
	            </div>
			</div> 
			@endforeach
		</div>
	</div>
</div>
@endsection
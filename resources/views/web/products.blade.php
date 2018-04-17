@extends('layouts.web')

@section('style')
<style type="text/css">
.carousel-inner > .carousel-item > img {
    margin: 0 auto !important;
}
.carousel .carousel-item {
    width: 100%; /*slider width*/
    max-height: 600px; /*slider height*/
}
.carousel .carousel-item img {
    width: 100%; /*img width*/
}
</style>
@endsection

@section('content')
	<div class="page-header" >
	    <div class="page-header-image" data-parallax="true" style="background-image: url('SystemImages/products.jpg'); background-size: 200% 100%;"></div>
	</div>

<div class="section">
	<div class="section" id="carousel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        	@foreach($data as $data1)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="@if($loop->first) active @endif"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner" role="listbox">
                        	@foreach($data as $data)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <img class="d-block" src="{{asset($data->product_path)}}" alt="First slide" align="middle">
                                <!-- <div class="carousel-caption d-none d-md-block">
                                    <h5>Nature, United States</h5>
                                </div> -->
                            </div> 
                            @endforeach
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
    </div>
</div>
@endsection
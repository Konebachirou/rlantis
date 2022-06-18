@extends('users.layouts.app')
@section('content')


<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(../assets/img/parallax/img1.jpg);">
	<div class="nicdark_section nicdark_height_100"></div>
</div>

<div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">

	<!--start nicdark_container-->
	<div class="nicdark_container nicdark_clearfix">

		<div class="grid grid_12">

			<a href="#">Home</a>
			<img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="{{asset('assets/img/icons/icon-next-grey.svg')}}">
			<a href="#">agenda</a>
			<img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="{{asset('assets/img/icons/icon-next-grey.svg')}}">
			<a href="#">Detail</a>

		</div>


	</div>
	<!--end container-->

</div>


<div class="nicdark_section">

	<div class="nicdark_container nicdark_clearfix">
		<div class="grid grid_12">
			
			<div class="nicdark_section nicdark_height_10"></div>

			<div class="nicdark_section">
				<div class=" nicdark_padding_10  nicdark_float_left">
					<h1><strong class=" nicdark_font_size_30 nicdark_first_font">{{$agenda->title}}</strong></h1>
					<div class="nicdark_section nicdark_height_20"></div>
					<div >{!!$agenda->desc!!}</div>
				</div>

			</div>
			
		</div>
		
	</div>
</div>
@stop


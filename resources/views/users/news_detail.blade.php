@extends('users.layouts.app')
@section('content')


<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(../assets/img/parallax/img1.jpg);">

	<div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">

		<!--start nicdark_container-->
		<div class="nicdark_container nicdark_clearfix">

			<div class="nicdark_section nicdark_height_150"></div>


			<div class="grid grid_12">

				<strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">{{$news->title}}</strong>

				<div class="nicdark_section nicdark_height_10"></div>

				<!--START post details-->
				<div class="nicdark_section">
					<div class="nicdark_display_inline_block">

						<div class="nicdark_section nicdark_height_10"></div>
						<div class="nicdark_section nicdark_position_relative nicdark_padding_right_40 nicdark_box_sizing_border_box">

							
							
						</div>
						<div class="nicdark_section nicdark_height_10"></div>

					</div>

					<div class="nicdark_display_inline_block">

						<div class="nicdark_section nicdark_height_10"></div>
						<div class="nicdark_section nicdark_position_relative nicdark_padding_right_40 nicdark_box_sizing_border_box">
							<img alt="" class="nicdark_position_absolute" width="30" src="{{asset('assets/img/icons/icon-calendar.svg')}}">
							<div class="nicdark_section nicdark_padding_left_45 nicdark_box_sizing_border_box">
								<div class="nicdark_section nicdark_height_5"></div>
								<h3 class="nicdark_color_white">21 / 12 / 2017</h3>
							</div>
						</div>
						<div class="nicdark_section nicdark_height_10"></div>

					</div>

					<div class="nicdark_display_inline_block">

						<div class="nicdark_section nicdark_height_10"></div>

					</div>
				</div>
				<!--END post details-->

				<div class="nicdark_section nicdark_height_10"></div>


			</div>



		</div>
		<!--end container-->

	</div>

</div>

<div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">

	<!--start nicdark_container-->
	<div class="nicdark_container nicdark_clearfix">

		<div class="grid grid_12">

			<a href="#">Home</a>
			<img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="{{asset('assets/img/icons/icon-next-grey.svg')}}">
			<a href="#">News</a>
			<img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="{{asset('assets/img/icons/icon-next-grey.svg')}}">
			<a href="#">Detail</a>

		</div>


	</div>
	<!--end container-->

</div>


<div class="nicdark_section">

	<div class="nicdark_container nicdark_clearfix">
		<div class="grid grid_12">
			
			<div class="nicdark_section">
				<div class="nicdark_width_100_percentage nicdark_padding_10  ">
			<div class="nicdark_section nicdark_height_10"></div>
				 <p>
				 	<img alt="" class="nicdark_section nicdark_border_2_solid_grey nicdark_margin_right_10 nicdark_height_300 nicdark_float_left nicdark_width_50_percentage" src="{{Storage::url($news->img)}}" >
               		<p>{!!$news->desc!!}</p>
                    
                </p>
				</div>
			</div>
			
		</div>
		<div class="nicdark_section nicdark_height_10"></div>
		
	</div>
	@stop
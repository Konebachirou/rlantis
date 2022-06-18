@extends('users.layouts.app')
@section('content')

<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(../../assets/img/parallax/img1.jpg);">

	<div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">
		<!--start nicdark_container-->
		<div class="nicdark_container nicdark_clearfix">
			<div class="nicdark_section nicdark_height_200"></div>
			<div class="grid grid_12">
				<strong class="nicdark_color_white nicdark_font_size_50 nicdark_font_size_40_responsive nicdark_first_font">PUBLICATIONS</strong>
				<div class="nicdark_section nicdark_height_20"></div>
			</div>
		</div>
		<!--end container-->
	</div>
</div>
<div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">
	<!--start nicdark_container-->
	<div class="nicdark_container nicdark_clearfix">
		<div class="grid grid_12">
			<a href="#">Accueil</a>
			<img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="{{asset('assets/img/icons/icon-next-grey.svg')}}">
			<a href="#">PUBLICATIONS</a>
			
			
		</div>
	</div>
	<!--end container-->

</div>
<div class="nicdark_section nicdark_height_50"></div>

<div class="nicdark_section">

	<div class="nicdark_container nicdark_clearfix">
		@foreach($pubs as $item)
		<div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

			<div class="nicdark_section nicdark_padding_5 nicdark_box_sizing_border_box">

				<!--START preview-->
				<div class="nicdark_section nicdark_border_2_solid_grey">
					<div class="nicdark_section nicdark_padding_10 nicdark_height_180 nicdark_box_sizing_border_box">
						<h5 class="nicdark_second_font nicdark_color_grey">July August 2014</h5>
						<div class="nicdark_section nicdark_height_10"></div>
						<h3 class="textelipsise2 nicdark_first_font"><strong>{{$item->title}}</strong></h3>
						<div class="nicdark_section nicdark_height_5"></div>
						<p class="textelipsise3">{!!$item->desc!!}</p>
						<div class="nicdark_section nicdark_height_5"></div>

					</div>
					<a class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_margin_10 nicdark_float_right  nicdark_color_white nicdark_bg_green nicdark_font_size_13 nicdark_padding_10 nicdark_border_radius_3 " href="{{ route('pub_detail.path', $item->id) }}">VOIR PLUS</a>

				</div>
				<!--END preview-->

			</div> 
		</div> 
		@endforeach

		{{ $pubs->links('users.layouts.paginate') }}
			<!-- {{ $pubs->links() }} -->
		

		<div class="nicdark_section nicdark_height_30"></div>


		<!-- <div class="nicdark_section nicdark_text_align_center nicdark_first_font nicdark_padding_10 nicdark_font_size_20">
		</div>
		<div class="nicdark_section nicdark_height_30"></div> -->





	</div>
</div>
@stop
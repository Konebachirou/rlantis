@extends('users.layouts.app')
@section('content')


<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(../assets/img/parallax/img1.jpg);">

	<div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">

		<!--start nicdark_container-->
		<div class="nicdark_container nicdark_clearfix">

			<div class="nicdark_section nicdark_height_150"></div>


			<div class="grid grid_12">

				<strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">{{$pubUser->title}}</strong>

				<div class="nicdark_section nicdark_height_10"></div>

				<!--START post details-->
				<div class="nicdark_section">
					<div class="nicdark_display_inline_block">

						<div class="nicdark_section nicdark_height_10"></div>
						<div class="nicdark_section nicdark_position_relative nicdark_padding_right_40 nicdark_box_sizing_border_box">

							
							
							 @if($pubUser->img!=null)
                                <img alt=""  class="nicdark_position_absolute nicdark_border_radius_100_percentage " width="35" height="35" src="{{Storage::url($pubUser->img)}}">
                                @elseif($pubUser->sexe=="M")
                                <img alt=""  class="nicdark_position_absolute nicdark_border_radius_100_percentage " width="35" src="{{asset('assets/img/avatarM.jpg')}}">
                                @else
                                <img alt=""  class="nicdark_position_absolute nicdark_border_radius_100_percentage " width="35" src="{{asset('assets/img/avatarF.jpg')}}">
                                @endif
                               
							<div class="nicdark_section nicdark_padding_left_45 nicdark_box_sizing_border_box">
								<div class="nicdark_section nicdark_height_5"></div>
								<h3 class="nicdark_color_white">{{$pubUser->nom}} {{$pubUser->prenom}}</h3>
							</div>
							
						</div>
						<div class="nicdark_section nicdark_height_10"></div>

					</div>

					<div class="nicdark_display_inline_block">

						<div class="nicdark_section nicdark_height_10"></div>
						<div class="nicdark_section nicdark_position_relative nicdark_padding_right_40 nicdark_box_sizing_border_box">
							<img alt="" class="nicdark_position_absolute" width="30" src="{{asset('assets/img/icons/icon-calendar.svg')}}">
							<div class="nicdark_section nicdark_padding_left_45 nicdark_box_sizing_border_box">
								<div class="nicdark_section nicdark_height_5"></div>
								<h3 class="nicdark_color_white">{{  date("d M Y", strtotime($pubUser->created_at)) }}</h3>
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
			<a href="#">Publication</a>
			<img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="{{asset('assets/img/icons/icon-next-grey.svg')}}">
			<a href="#">Detail</a>

		</div>


	</div>
	<!--end container-->

</div>


<div class="nicdark_section">

	<div class="nicdark_container nicdark_clearfix">
		<div class="grid grid_12">
			<p><span class="nicdark_font_size_30"><strong> Co-Auteurs:</strong></span> <span class="nicdark_font_size_18">{{$pubUser->parteners}}</span></p>
			<div class="nicdark_section nicdark_height_10"></div>

			<div class="nicdark_section">
				<div class="nicdark_width_60_percentage nicdark_padding_10  nicdark_float_left">
					<div class="nicdark_bg_orange nicdark_padding_5_10 nicdark_border_radius_3 nicdark_font_size_18 ">Résumé</div>
			<div class="nicdark_section nicdark_height_10"></div>
					<div>{{$pubUser->desc}}</div>
				</div>
				<div class="nicdark_width_30_percentage nicdark_border_bottom_2_solid_grey nicdark_border_top_2_solid_grey nicdark_border_left_2_solid_grey nicdark_border_right_2_solid_grey nicdark_padding_10 nicdark_margin_left_10  nicdark_float_left nicdark_border_radius_3">
					<a href="{{Storage::url($pubUser->doc)}}" target="_blank"><img alt="" class="" width="80" src="{{asset('assets/img/icons/pdf-svgrepo-com.svg')}}">
					<p>Télécharger le document</p></a>
				</div>
			</div>
			
		</div>
			<div class="nicdark_section nicdark_height_10"></div>
	</div>
	@stop
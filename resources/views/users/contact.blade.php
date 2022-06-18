@extends('users.layouts.app')
@section('content')


<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(../assets/img/parallax/img39.jpg);">

	<div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">




		<!--start nicdark_container-->
		<div class="nicdark_container nicdark_clearfix">


			<div class="nicdark_section nicdark_height_200"></div>


			<div class="grid grid_12">



				<strong class="nicdark_color_white nicdark_font_size_60 nicdark_font_size_40_responsive nicdark_first_font">Contactez Nous</strong>
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
			
			<a href="#">Contact</a>



		</div>


	</div>
	<!--end container-->

</div>




<div class="nicdark_section nicdark_height_50"></div>



<div class="nicdark_section">

	<!--start nicdark_container-->
	<div class="nicdark_container nicdark_clearfix">



		<div class="grid grid_6">


			<!--START form-->
			<div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
				<img alt="" class="nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_margin_top_20" width="15" src="img/icons/icon-user-grey.svg">
				<input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Name">
			</div>
			<div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
				<img alt="" class="nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_margin_top_20" width="15" src="img/icons/icon-email-grey.svg">
				<input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Email">
			</div>
			<div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
				<img alt="" class="nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_margin_top_20" width="15" src="img/icons/icon-pen.svg">
				<input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Subject">
			</div>
			<div class="nicdark_section">
				<div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left">
					<textarea rows="6" class="nicdark_padding_left_0 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" placeholder="Message"></textarea>
				</div>
			</div>
			<div class="nicdark_section">
				<div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left">
					<a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 " href="index-2.html">ENVOYER</a>   
				</div>
			</div>
			<!--END form-->

			<div class="nicdark_section nicdark_height_50"></div>


		</div>



		<div class="grid grid_6">

			<div  class="text-center">
				<p class="nicdark_text_align_center">Address:&nbsp&nbspAvenue de l'environnement 5019 Monastir- Tunisie</p>
				<p class="nicdark_text_align_center">Tél: +216 73 500 276 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					Fax: +216 73 500 276 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					Email: Fsm@fsm.rnu.tn</p>
				</div>
				<div class="nicdark_section nicdark_height_10"></div>
				<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5944.386204220503!2d10.80471801237243!3d35.7649242658106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd35c7eeb9034f%3A0xda7342395d9fd275!2sFacult%C3%A9%20des%20sciences%20de%20Monastir!5e0!3m2!1sfr!2stn!4v1652063533698!5m2!1sfr!2stn" width="600" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div> 
				<!--END google maps-->

			</div>

		</div>
		<!--end container-->

	</div>
	@stop
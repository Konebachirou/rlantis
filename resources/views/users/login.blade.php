@extends('users.layouts.app')
@section('content')

<div class="nicdark_section " style="background-image:url(./assets/img/parallax/img32.jpg);">

	<div class="nicdark_container nicdark_clearfix">
			<div class="nicdark_section nicdark_height_130"></div>

<h1 class="nicdark_text_align_center nicdark_color_white"><strong>Bienvenue sur l'Intranet du Laboratoire RLANTIS</strong></h1>

		<div class="grid grid_3">
			</div>
			<div class="grid grid_6">
			<div class="nicdark_section nicdark_height_30"></div>

			<form  action="{{ route('link.auth') }}" method="POST" enctype="multipart/form-data">
				@csrf
			<div class="nicdark_section nicdark_bg_white">

				<div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_bottom_1_solid_grey nicdark_text_align_center">
					
					<div class="nicdark_section nicdark_height_5"></div>
					<h2 class=""><strong>Veuillez vous authentifier pour accéder a votre Compte Intranet </strong></h2>
					@if (session('error'))
   <div class="alert alert-danger">
        {{ session('error') }}
   </div>
@endif
				@if(Session::get('success'))
                <div class="alert alert-success">
                  {{ Session::get('success') }}
                </div>
              @endif
              @if(Session::get('message'))
					<div class="nicdark_section nicdark_height_10"></div>
                <div style="color: red">
                  {{ Session::get('message') }}
                </div>
              @endif
				</div>
				<div class="nicdark_section nicdark_padding_20_50 nicdark_box_sizing_border_box">

					<div class="nicdark_section">
						
						<div class="nicdark_width_100_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
							<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="email" placeholder="Email" name="email" required>
						</div>
					</div>
			<div class="nicdark_section nicdark_height_20"></div>
					<div class="nicdark_section">
						
						<div class="nicdark_width_100_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
							<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="password" placeholder="Mot de passe" name="password" required>
						</div>
					</div>
			<div class="nicdark_section nicdark_height_20"></div>
					
					<div class="nicdark_section">
						<button class="nicdark_bg_white_hover nicdark_color_green_hover nicdark_border_2_solid_green nicdark_transition_all_08_ease nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 ">Connexion</button>
						
					</div>
			<div class="nicdark_section nicdark_height_20"></div>
		 <p class="nicdark_float_right">je n'ai pas un compte <b><a href="{{ route('link.register') }}">Crée un compte</a></b></p>

			<div class="nicdark_section nicdark_height_20"></div>

				</div>  

			</div>
		</form>
		</div>
		<div class="grid grid_3">
			</div>
	</div>
			<div class="nicdark_section nicdark_height_30"></div>

</div>


@stop
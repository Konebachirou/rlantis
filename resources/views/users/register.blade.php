@extends('users.layouts.app')
@section('content')

<div class="nicdark_section " style="background-image:url(./assets/img/parallax/img32.jpg);">

	<div class="nicdark_container nicdark_clearfix">
		<div class="nicdark_section nicdark_height_130"></div>

		<h1 class="nicdark_text_align_center nicdark_color_white"><strong>Bienvenue sur l'Intranet du Laboratoire RLANTIS</strong></h1>

		<div class="grid grid_2">
		</div>
		<div class="grid grid_8">
			<div class="nicdark_section nicdark_height_30"></div>
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
			@if(Session::get('fail'))
			<div class="alert alert-danger">
				{{ Session::get('fail') }}
			</div>
			@endif
			<form  action="{{ route('link.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="nicdark_section nicdark_bg_white">

					<div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_bottom_1_solid_grey nicdark_text_align_center">

						<div class="nicdark_section nicdark_height_5"></div>
						<h2 class=""><strong>Créé votre Compte Intranet </strong></h2>

					</div>
					<div class="nicdark_section nicdark_padding_20_50 nicdark_box_sizing_border_box">
						<div >
							<label>Fonction</label>
							<select name="type" class="nicdark_width_100_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left"  id="simpleFormAgence">
								
								@foreach($types as $item)
								<option class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" value ="{{ $item->id }}">{{ $item->nom }}</option>
								@endforeach
							</select>
						</div>

						<div class="nicdark_section">

							<div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
								<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Nom" name="nom" required>
							</div>

							<div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
								<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Prenom" name="prenom" required>
							</div>
						</div>
						<div class="nicdark_section nicdark_height_20"></div>
						<div class="nicdark_section">

							<div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
								<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Contact" name="contact" minlength="8" required>
							</div>

							<div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
								<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Adresse" name="location" required>
							</div>
						</div>
						<div class="nicdark_section nicdark_height_20"></div>


						<div class="nicdark_section">

							<div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
								<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="email" placeholder="Email" name="email" required>
							</div>
							<div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
								<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="password" placeholder="Mot de passe" name="password" required>
							</div>
						</div>

						<div class="nicdark_section nicdark_height_20"></div>
						<div >
							<label>Sexe</label>
							<select name="sexe" class="nicdark_width_20_percentage nicdark_width_20_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box "  id="simpleFormAgence">
								<option value="M">Homme</option>
								<option value="F">Femme</option>
							</select>
						</div>
						<div class="nicdark_section nicdark_height_20"></div>

						<div class="nicdark_section">
							<button class="nicdark_bg_white_hover nicdark_color_green_hover nicdark_border_2_solid_green nicdark_transition_all_08_ease nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 ">S'inscrire</button>

						</div>
						<div class="nicdark_section nicdark_height_20"></div>
						<p class="nicdark_float_right">j'ai deja un compte <b><a href="{{ route('login.path') }}">Se connecté</a></b></p>

						<div class="nicdark_section nicdark_height_20"></div>

					</div>  

				</div>
			</form>

		</div>
		<div class="grid grid_2">
		</div>
	</div>
	<div class="nicdark_section nicdark_height_30"></div>

</div>


@stop
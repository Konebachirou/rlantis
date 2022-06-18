@extends('users.layouts.app')
@section('content')

<div class="nicdark_section " >

	<div class="nicdark_container  nicdark_clearfix" >
			<div class="nicdark_section nicdark_height_70"></div>
		<div class="grid grid_2">
			</div>
			<div class="grid grid_8">
			<div class="nicdark_section nicdark_height_30"></div>

			<form  action="{{ route('save.pub') }}" method="POST" enctype="multipart/form-data">
				@csrf
			<div class="nicdark_section " style="background-color:  rgb(206, 224, 247);">

				<div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_bottom_1_solid_grey nicdark_text_align_center">
					
					<div class="nicdark_section nicdark_height_5"></div>
					<h2 class=""><strong>Faire Une Publication </strong></h2>
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
				</div>
				<div class="nicdark_section nicdark_padding_20_50 nicdark_box_sizing_border_box">

					<div class="nicdark_section">
						
						<div class="nicdark_width_100_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
							<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="texte" placeholder="Titre" name="title" required>
						</div>
					</div>
			<div class="nicdark_section nicdark_height_20"></div>
					<div class="nicdark_section">
						
						<div class="nicdark_width_100_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
							<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="texte" placeholder="Partenaire" name="parteners" required>
						</div>
					</div>
			<div class="nicdark_section nicdark_height_20"></div>
			<textarea rows="5" placeholder="Description" name="desc" ></textarea>
			<div class="nicdark_section nicdark_height_20"></div>
					<div class="nicdark_section">
						
						<div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
							<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="file" placeholder="Mot de passe" name="doc" >
						</div>
					</div>
			<div class="nicdark_section nicdark_height_20"></div>
					
					<div class="nicdark_section">
						<button class="nicdark_bg_white_hover nicdark_color_green_hover nicdark_border_2_solid_green nicdark_transition_all_08_ease nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 ">Publier</button>
						
					</div>


			
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
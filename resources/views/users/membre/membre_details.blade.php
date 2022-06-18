@extends('users.layouts.app')
@section('content')
<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(../../assets/img/parallax/img4.jpg);">

	<div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">




		<!--start nicdark_container-->
		<div class="nicdark_container nicdark_clearfix">


			<div class="nicdark_section nicdark_height_100"></div>


			<div class="grid grid_9">


				<div class="nicdark_display_table nicdark_float_left nicdark_display_none_all_iphone">

					<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
						@if($user->img!=null)
						<img alt=""  class="nicdark_margin_right_20 nicdark_border_radius_100_percentage " width="250" height="250" src="{{Storage::url($user->img)}}">
						@elseif($user->sexe=="M")
						<img alt=""  class="nicdark_margin_right_20 nicdark_border_radius_100_percentage " width="250" src="{{asset('assets/img/avatarM.jpg')}}">
						@else
						<img alt=""  class="nicdark_margin_right_20 nicdark_border_radius_100_percentage " width="250" src="{{asset('assets/img/avatarF.jpg')}}">
						@endif
						
						
					</div>

					<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
						<strong class="nicdark_color_white nicdark_font_size_40 nicdark_first_font">{{$user->nom }} {{$user->prenom}}</strong>

						<div class="nicdark_section nicdark_height_10"></div>
						
					</div>

				</div>


				<!--START responsive-->
				<!-- <div class="nicdark_section nicdark_display_none nicdark_display_block_all_iphone nicdark_text_align_center">

					<img alt="" class=" nicdark_border_radius_100_percentage " width="100" src="img/avatar/avatar-chef-1.jpg">
					<div class="nicdark_section nicdark_height_10"></div>

					

					<div class="nicdark_section nicdark_height_10"></div>
					<h2><strong class="nicdark_color_white nicdark_first_font">Haffar Nafaa</strong></h2>
					<div class="nicdark_section nicdark_height_5"></div>

				</div>
				 -->



				<!-- <div class="nicdark_section nicdark_height_20"></div> -->


			</div>




			<div class="grid grid_3 nicdark_text_align_right  nicdark_text_align_left_responsive nicdark_text_align_center_all_iphone">

				<div class="nicdark_section nicdark_height_150 nicdark_display_none_all_responsive"></div>

				<div class="nicdark_display_inline_block nicdark_text_align_center  nicdark_margin_right_40">
					<h1 class="nicdark_color_white nicdark_font_size_40 nicdark_font_size_20_all_iphone nicdark_line_height_20_all_iphone"><strong>{{$nb}}</strong></h1>
					<div class="nicdark_section nicdark_height_5"></div>
					<p class="nicdark_color_white nicdark_font_size_10_all_iphone">PUBLICATIONS</p>
				</div>

			</div>




		</div>
		<!--end container-->

	</div>

</div>
<div class="nicdark_section  nicdark_border_bottom_2_solid_grey">

	<!--start nicdark_container-->
	<div class="nicdark_container nicdark_clearfix">

		<div class="grid grid_12">

			<a href="#">Accueil</a>
			<img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="{{asset('assets/img/icons/icon-next-grey.svg')}}">
			<a href="#">Membre</a>
			<img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="{{asset('assets/img/icons/icon-next-grey.svg')}}">
			@foreach($types as $item)
				@if($item->id==$user->type)
				<a href="#">{{$item->nom}}</a>
				@endif
			@endforeach
			<img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="{{asset('assets/img/icons/icon-next-grey.svg')}}">
			<a href="#">{{$user->nom }} {{$user->prenom}}</a>



		</div>


	</div>
	<!--end container-->

</div>
<div class="nicdark_section nicdark_height_10 nicdark_bg_grey"></div>

<div class="nicdark_section nicdark_bg_grey">
	<div class="nicdark_container nicdark_bg_white nicdark_border_2_solid_grey nicdark_clearfix">
		<div class="grid grid_4">
			<div class="nicdark_section nicdark_padding_5 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_bottom_1_solid_grey nicdark_text_align_center">
				<h3 class=""><strong>INFORMATIONS</strong></h3>
			</div>
			<div class="nicdark_section nicdark_height_10"></div>
			<h4 class=""><b>Domaines de recherche</b></h4>
			<div class="nicdark_section nicdark_height_10"></div>
			{!!$user->research_domaine !!}
			<div class="nicdark_section nicdark_height_20"></div>
			<h4 class=""><b>Équipe de recherche</b></h4>
			<p class="nicdark_padding_10 nicdark_padding_0_all_iphone  nicdark_padding_right_0">RLANTIS Equipe STEAMER</p>
			<div class="nicdark_section nicdark_height_20"></div>
			<h4 class=""><b>Thèse</b></h4>
			<div class="nicdark_section nicdark_height_10"></div>
			{!!$user->these !!}
			<div class="nicdark_section nicdark_height_20"></div>
		</div>
		
		<div class="grid grid_4">
			<div class="nicdark_section nicdark_padding_5 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_bottom_1_solid_grey nicdark_text_align_center">
				<h3 class=""><strong>CONTACT</strong></h3>
			</div>
			<table class="nicdark_section">
				<tbody>

					<tr class="">
						<td class="nicdark_padding_10">  

							<div class="nicdark_display_table nicdark_float_left">

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/email-svgrepo-com.svg')}}">
								</div>

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<h5 class="nicdark_font_size_13 nicdark_text_transform_uppercase"><strong>Email</strong></h5>
									<div class="nicdark_section nicdark_height_5"></div>
									<p class=""><a href="mailto:{{$user->email }}">{{$user->email }}</a></p>
								</div>

							</div>

						</td>
					</tr>
					<tr class="">
						<td class="nicdark_padding_10">  

							<div class="nicdark_display_table nicdark_float_left">

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/telephone-svgrepo-com.svg')}}">
								</div>

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<h5 class="nicdark_font_size_13 nicdark_text_transform_uppercase"><strong>Contact</strong></h5>
									<div class="nicdark_section nicdark_height_5"></div>
									<p class=""><a href="tel:(+216) {{$user->contact }}">{{$user->contact }}</a></p>
								</div>

							</div>

						</td>
					</tr>
					<tr class="">
						<td class="nicdark_padding_10">  

							<div class="nicdark_display_table nicdark_float_left">

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/map-location-svgrepo-com.svg')}}">
								</div>

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<h5 class="nicdark_font_size_13 nicdark_text_transform_uppercase"><strong>Adresse</strong></h5>
									<div class="nicdark_section nicdark_height_5"></div>
									<p class="">{{$user->location }}</p>
								</div>

							</div>

						</td>
					</tr>

					<tr class="">
						<td class="nicdark_padding_10">  

							<div class="nicdark_display_table nicdark_float_left">
								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/pdf-svgrepo-com.svg')}}">
								</div>
								@if($user->cv != null)
								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<h5 class="nicdark_font_size_13 nicdark_text_transform_uppercase"><strong>Curriculum vitae</strong></h5>
									<div class="nicdark_section nicdark_height_5"></div>
									<p class=""><a href="{{Storage::url($user->cv)}}" target="_blank">CV Français</a></p>
								</div>
								@else
									<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<h5 class="nicdark_font_size_13 nicdark_text_transform_uppercase"><strong>Curriculum vitae</strong></h5>
									<div class="nicdark_section nicdark_height_5"></div>
									<p class="">Aucun CV</p>
								</div>
								@endif

							</div>

						</td>
					</tr>
				</tbody>
			</table> 
			
		</div>
		<div class="grid grid_4">
			<div class="nicdark_section nicdark_padding_5 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_bottom_1_solid_grey nicdark_text_align_center">
				<h3 class=""><strong>SITES</strong></h3>
			</div>
			<table class="nicdark_section">
				<tbody>
					@if($user->researchgate != null)
					<tr class="">
						<td class="nicdark_padding_10">  

							<div class="nicdark_display_table nicdark_float_left">

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}">
								</div>

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">

									<div class="nicdark_section nicdark_height_5"></div>
									<p class=""><a href="{{$user->researchgate}}" target="_blank">www.researchgate.net</a></p>
								</div>

							</div>

						</td>
					</tr>
				@elseif($user->scholar != null)
					<tr class="">
						<td class="nicdark_padding_10">  

							<div class="nicdark_display_table nicdark_float_left">

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}">
								</div>

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">

									<div class="nicdark_section nicdark_height_5"></div>
									<p class=""><a href="{{$user->scholar}}" target="_blank">www.scholar.google.com</a></p>
								</div>

							</div>

						</td>
					</tr>
				@elseif($user->acm != null)

					<tr class="">
						<td class="nicdark_padding_10">  

							<div class="nicdark_display_table nicdark_float_left">

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}">
								</div>

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">

									<div class="nicdark_section nicdark_height_5"></div>
									<p class=""><a href="{{$user->acm}}" target="_blank">www.dl.acm.org</a></p>
								</div>

							</div>

						</td>
					</tr>
				@elseif($user->dblp != null)
					<tr class="">
						<td class="nicdark_padding_10">  

							<div class="nicdark_display_table nicdark_float_left">

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}">
								</div>

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">

									<div class="nicdark_section nicdark_height_5"></div>
									<p class=""><a href="{{$user->dblp}}" target="_blank">www.dblp.uni-trier.de</a></p>
								</div>

							</div>

						</td>
					</tr>

				@elseif($user->ieeexplore != null)
					<tr class="">
						<td class="nicdark_padding_10">  

							<div class="nicdark_display_table nicdark_float_left">

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}">
								</div>

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">

									<div class="nicdark_section nicdark_height_5"></div>
									<p class=""><a href="{{$user->ieeexplore}}" target="_blank">www.ieeexplore.ieee.org</a></p>
								</div>

							</div>

						</td>
					</tr>
					@else
					<p class="nicdark_text_align_center">aucun site </p>

					@endif
				</tbody>
			</table> 
			<!-- <div class="nicdark_section nicdark_height_20"></div> -->



		</div>
	</div>
<div class="nicdark_section nicdark_height_10 nicdark_bg_grey"></div>
	<div class="nicdark_section">
			<div class="nicdark_container nicdark_bg_white nicdark_clearfix">

				<div class="nicdark_section">

					<div class="nicdark_section nicdark_height_5"></div>



					<div class="nicdark_width_70_percentage nicdark_width_100_percentage_responsive nicdark_float_left">
						<div class="nicdark_list_style_none nicdark_margin_0 nicdark_padding_0 nicdark_section nicdark_border_1_solid_grey nicdark_padding_10 nicdark_bg_green"><h3 class="nicdark_color_white"><strong>PUBLICATIONS</strong></h3></div>
						<div class="nicdark_section nicdark_height_10"></div>
						@foreach($pubs as $item)
						<div class="nicdark_section nicdark_padding_5 nicdark_box_sizing_border_box">

							<!--START preview-->
							<div class="nicdark_section nicdark_border_2_solid_grey">
								<div class="nicdark_section nicdark_padding_10  nicdark_box_sizing_border_box">
									<h5 class="nicdark_second_font nicdark_color_grey">July August 2014</h5>
									<div class="nicdark_section nicdark_height_10"></div>
									<h3 class="textelipsise3 nicdark_first_font"><strong>{{ $item->title}}</strong></h3>
									<div class="nicdark_section nicdark_height_5"></div>
									<p class="textelipsise4">{!! $item->desc!!}</p>
									<div class="nicdark_section nicdark_height_5"></div>
									<a class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box  nicdark_color_white nicdark_bg_green nicdark_font_size_13 nicdark_padding_10 nicdark_border_radius_3 " href="{{ route('pub_detail.path', $item->id) }}">VOIR PLUS</a>
								</div>

							</div>
							<!--END preview-->

						</div> 
						@endforeach
          <!-- {{ $pubs->links() }} -->
                {{ $pubs->links('users.layouts.paginate') }}
          			

					</div> 
					<div class="nicdark_section nicdark_width_25_percentage nicdark_margin_left_40 nicdark_width_100_percentage_responsive">
						<div class="nicdark_section nicdark_bg_white nicdark_border_1_solid_grey">

							<div class="nicdark_section nicdark_padding_10 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_bottom_1_solid_grey nicdark_text_align_center">


								<h3 class=""><strong>CONTACTER</strong></h3>
							</div>
							<form method="POST" enctype="multipart/form-data" action="{{ route('link.auth') }}">

								<div class="nicdark_section nicdark_padding_10 nicdark_box_sizing_border_box">

									<div class="nicdark_section">
										<div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
											<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" name="name" placeholder="Name">
										</div>

									</div>
									<div class="nicdark_section">
										<div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
											<input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" name="email" placeholder="Email">
										</div>

									</div>
									<div class="nicdark_section">
										<div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
											<textarea rows="4" class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" name="msg" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="nicdark_section">

										<div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
											<button class="nicdark_bg_white_hover nicdark_color_green_hover nicdark_border_2_solid_green nicdark_transition_all_08_ease nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 ">Envoyer</button>
										</div>
									</div>

								</div>  

							</form>
						</div>
					</div>

				</div>

			</div>
			<div class="nicdark_section nicdark_height_50"></div>
		</div>

</div>

<!--  -->
	<!--end container-->

	@stop


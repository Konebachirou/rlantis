@extends('users.layouts.app')
@section('content')



<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(../assets/img/parallax/img6.jpg);">

	<div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">
		<!--start nicdark_container-->
		<div class="nicdark_container nicdark_clearfix">
			<div class="nicdark_section nicdark_height_200"></div>
			<div class="grid grid_12">
				<strong class="nicdark_color_white nicdark_font_size_40 nicdark_first_font">DIRECTION RLANTIS</strong>
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
			<a href="#">Responsable</a>
			
		</div>
	</div>
	<!--end container-->

</div>

<div class="nicdark_section nicdark_height_20"></div>

<div class="nicdark_section">
	<!--start nicdark_container-->
	<div class="nicdark_container nicdark_clearfix">
		<div class="grid grid_4">
			<div class="nicdark_section nicdark_box_sizing_border_box">

				<!--start preview-->
				<div class="nicdark_section ">

					<!--image-->
					<div class="nicdark_section nicdark_position_relative">

						<img alt="" class="nicdark_section" src="{{asset('assets/img/mounir_zrigui.png')}}">

						<div class="nicdark_bg_greydark_alpha_gradient nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_20 nicdark_box_sizing_border_box">
							<div class="nicdark_position_absolute nicdark_bottom_20">
								<h2 class="nicdark_color_white">Mounir ZRIGUI</h2>
							</div>

						</div>

					</div>
				</div>
				<!--start preview-->

			</div>
			<div class="nicdark_section nicdark_height_20"></div>
			
			
		</div>
		<div class="grid grid_8">
			<!-- <div class="grid grid_4"> -->
				<div class="nicdark_padding_10">  
					<h4 class=""><b>Biography</b></h4>
					<div class="nicdark_section nicdark_height_5"></div>
					<p class="nicdark_line_height_25">vamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus.</p>
				</div>


				<div class="grid grid_6">

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
											<p class=""><a href="mailto:Mounir.zrigui@fsm.rnu.tn">Mounir.zrigui@fsm.rnu.tn</a></p>
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
											<p class=""><a href="tel:(+216) 98 574 387">(+216) 98 574 387</a></p>
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
											<h5 class="nicdark_font_size_13 nicdark_text_transform_uppercase"><strong>Localisation</strong></h5>
											<div class="nicdark_section nicdark_height_5"></div>
											<p class="">Monastir, 5000-Tunisie</p>
										</div>

									</div>

								</td>
							</tr>


						</tbody>
					</table> 
					<div class="nicdark_section nicdark_height_10"></div>

					<div class="nicdark_section">
						<h5 class="nicdark_text_align_center nicdark_text_transform_uppercase"><strong>Curriculum vitae</strong></h5>

						<div class="grid grid_6">
							<div class="nicdark_display_table nicdark_float_left">

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/pdf-svgrepo-com.svg')}}">
								</div>

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">

									<!-- <div class="nicdark_section nicdark_height_5"></div> -->
									<p class=""><a href="{{asset('assets/doc/mounir_zrigui_eng.pdf')}}" target="_blank">CV Français</a></p>
								</div>

							</div>
						</div>	
						<div class="grid grid_6">
							<div class="nicdark_display_table nicdark_float_left">

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
									<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/pdf-svgrepo-com.svg')}}">
								</div>

								<div class="nicdark_display_table_cell nicdark_vertical_align_middle">

									<!-- <div class="nicdark_section nicdark_height_5"></div> -->
									<p class=""><a href="{{asset('assets/doc/mounir_zrigui_eng.pdf')}}" target="_blank">CV Anglais</a></p>
								</div>

							</div>
						</div>				
					</div>
				</div>
				<div class="grid grid_6">
					<h5 class="nicdark_font_size_13 nicdark_text_transform_uppercase"><strong>site</strong></h5>
					<table class="nicdark_section">
						<tbody>
							<tr class="">
								<td class="nicdark_padding_10">  

									<div class="nicdark_display_table nicdark_float_left">

										<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
											<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}">
										</div>

										<div class="nicdark_display_table_cell nicdark_vertical_align_middle">

											<div class="nicdark_section nicdark_height_5"></div>
											<p class=""><a href="https://www.researchgate.net/profile/Mounir-Zrigui" target="_blank">www.researchgate.net</a></p>
										</div>

									</div>

								</td>
							</tr>
							<tr class="">
								<td class="nicdark_padding_10">  

									<div class="nicdark_display_table nicdark_float_left">

										<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
											<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}">
										</div>

										<div class="nicdark_display_table_cell nicdark_vertical_align_middle">

											<div class="nicdark_section nicdark_height_5"></div>
											<p class=""><a href="https://scholar.google.com/citations?user=8P1tpUsAAAAJ&hl=fr" target="_blank">www.scholar.google.com</a></p>
										</div>

									</div>

								</td>
							</tr>
							<tr class="">
								<td class="nicdark_padding_10">  

									<div class="nicdark_display_table nicdark_float_left">

										<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
											<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}">
										</div>

										<div class="nicdark_display_table_cell nicdark_vertical_align_middle">

											<div class="nicdark_section nicdark_height_5"></div>
											<p class=""><a href="https://dl.acm.org/profile/81467665870/publications?Role=author" target="_blank">www.dl.acm.org</a></p>
										</div>

									</div>

								</td>
							</tr>
							<tr class="">
								<td class="nicdark_padding_10">  

									<div class="nicdark_display_table nicdark_float_left">

										<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
											<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}">
										</div>

										<div class="nicdark_display_table_cell nicdark_vertical_align_middle">

											<div class="nicdark_section nicdark_height_5"></div>
											<p class=""><a href="https://dblp.uni-trier.de/pid/66/6181.html" target="_blank">www.dblp.uni-trier.de</a></p>
										</div>

									</div>

								</td>
							</tr>

							<tr class="">
								<td class="nicdark_padding_10">  

									<div class="nicdark_display_table nicdark_float_left">

										<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
											<img alt="" class="nicdark_margin_right_20" width="25" src="{{asset('assets/img/icons/worldwide-svgrepo-com.svg')}}">
										</div>

										<div class="nicdark_display_table_cell nicdark_vertical_align_middle">

											<div class="nicdark_section nicdark_height_5"></div>
											<p class=""><a href="https://ieeexplore.ieee.org/search/searchresult.jsp?newsearch=true&queryText=mounir%20zrigui&x=-920&y=-214" target="_blank">www.ieeexplore.ieee.org</a></p>
										</div>

									</div>

								</td>
							</tr>


						</tbody>
					</table> 
					<!-- <div class="nicdark_section nicdark_height_20"></div> -->

					
				</div>

			</div>
		</div>

		<div class="nicdark_section">
			<div class="nicdark_container nicdark_clearfix">

				<div class="nicdark_section">

					<div class="nicdark_section nicdark_height_5"></div>

					<div class="nicdark_list_style_none nicdark_margin_0 nicdark_padding_0 nicdark_section nicdark_border_1_solid_grey nicdark_padding_10 nicdark_bg_green"><h3 class="nicdark_color_white"><strong>PUBLICATIONS</strong></h3></div>
					<div class="nicdark_section nicdark_height_10"></div>

					<div class="nicdark_width_80_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

						@foreach($pubs as $item)
						<div class="nicdark_section nicdark_padding_5 nicdark_box_sizing_border_box">

							<!--START preview-->
							<div class="nicdark_section nicdark_border_1_solid_grey">
								<div class="nicdark_section nicdark_padding_10  nicdark_box_sizing_border_box">
									<h5 class="nicdark_second_font nicdark_color_grey">July August 2014</h5>
									<div class="nicdark_section nicdark_height_10"></div>
									<h3 class="textelipsise3 nicdark_first_font"><strong>{{ $item->title}}</strong></h3>
									<div class="nicdark_section nicdark_height_5"></div>
									<p class="textelipsise4">{{ $item->desc}}</p>
									<div class="nicdark_section nicdark_height_5"></div>
									<a class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box  nicdark_color_white nicdark_bg_green nicdark_font_size_13 nicdark_padding_10 nicdark_border_radius_3 " href="{{ route('pub_detail.path',1) }}">VOIR PLUS</a>
								</div>

							</div>
							<!--END preview-->

						</div> 
						@endforeach
					</div> 


				</div>

			</div>
			<div class="nicdark_section nicdark_height_50"></div>
		</div>


	</div>
	<!--end container-->

	@stop
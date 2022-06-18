@extends('users.layouts.app')
@section('content')


<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(assets/img/parallax/fsm.jpg);">

	<div class="nicdark_section nicdark_bg_greydark_alpha_gradient_5">


		<div class="nicdark_section nicdark_height_150"></div>

		<!--start nicdark_container-->
		<div class="nicdark_container nicdark_clearfix">


			<div class="grid grid_12">



				<strong class="nicdark_color_white nicdark_font_size_70 nicdark_font_size_40_responsive nicdark_line_height_40_responsive  nicdark_width_40_percentage nicdark_first_font nicdark_display_block">RLANTIS LABORATORY</strong>

				<div class="nicdark_section nicdark_height_1"></div>

				<!--START typed words-->
				<div class="nicdark_section nicdark_display_none_all_responsive">


					<strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">RESEARCH LABORATORY ON </strong>

					<div class="nicdark_typed_strings">

						<p><strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">ALGEBRIA THEORY</strong></p>
						<p><strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">NUMBER THEORY</strong></p>
						<p><strong class="nicdark_color_white nicdark_font_size_30 nicdark_first_font">INTELIGENT SYSTEMS</strong></p>

					</div>
					<span class="nicdark_typed nicdark_padding_botttom_5" style="white-space:pre;"></span>

				</div>
				<!--END typed words-->



				<div class="nicdark_section nicdark_height_30"></div>

				<p class="nicdark_color_white nicdark_width_66_percentage nicdark_font_size_20 nicdark_line_height_30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor vehicula. Nullam augue augue, dignissim id bibendum id, consequat et leo. Curabitur viverra tincidunt nulla nec tempor nullam augue augue.</p>

				<div class="nicdark_section nicdark_height_30"></div>

				<a class="nicdark_display_inline_block nicdark_margin_left_0 nicdark_text_align_center nicdark_box_sizing_border_box nicdark_color_white nicdark_border_2_solid_white nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 nicdark_margin_10" href="{{ route('about.path') }}">VOIR PLUS</a>


			</div>

		</div>
		<!--end container-->


		<div class="nicdark_section nicdark_height_60"></div>


	</div>

</div>

<div class="nicdark_section  nicdark_bg_grey">
<div class="nicdark_section nicdark_height_50"></div>

	<div class="nicdark_container nicdark_clearfix">
		<div class="grid grid_3 " style="background-color: orange;">
			<h1 class="nicdark_font_size_20 nicdark_color_white "><strong>TOUTE L'ACTUALITÉ</strong></h1>
		</div>
		<div class="nicdark_section">
			

			@foreach($news as $item)
			<div class="grid grid_4">
				<div class="nicdark_section">

					<div class="nicdark_section nicdark_position_relative">
						@if($item->img!=null)
						<img alt="" class="nicdark_section" src="{{Storage::url($item->img)}}" style="height: 270px;" width="10" height="10">

						@else
						<img alt="" class="nicdark_section" src="{{asset('assets/img/courses/img20.jpg')}}">
						@endif
						<div class="nicdark_bg_greydark_alpha_gradient_2 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_0 nicdark_box_sizing_border_box">
							<div class="nicdark_position_absolute nicdark_padding_left_15
							nicdark_padding_right_15 nicdark_padding_botttom_10 nicdark_padding_top_5 nicdark_bg_greydark_alpha_gradient_5 nicdark_bottom_0 nicdark_display_none_all_iphone">
							<h2 class="nicdark_color_white textelipsise3">{{$item->title}}</h2>
							<div class="nicdark_section nicdark_height_20"></div> 
							<div class="nicdark_display_table nicdark_float_left">
								<img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="{{asset('assets/img/icons/icon-calendar.svg')}}">
								<!-- <img alt="" class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_float_left" width="30" src="img/icons/icon-calendar.svg"> -->
								<p class=" nicdark_color_white nicdark_display_table_cell  nicdark_font_size_13 nicdark_vertical_align_middle ">{{  date("d M Y", strtotime($item->created_at)) }}</p>
							</div>
						</div>
					</div>

					<a class="nicdark_position_absolute nicdark_right_10 nicdark_top_10 nicdark_display_inline_block nicdark_color_white nicdark_border_1_solid_white nicdark_first_font nicdark_bg_green nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="{{ route('news_detail.path', $item->id) }}">voir plus</a>

				</div>

				<div class="nicdark_section nicdark_height_10"></div>


			</div>
		</div>
		@endforeach
	</div>
	<div class="nicdark_section">
		<div class="grid grid_9">
			<div class="grid grid_4 " style="background-color: orange;">
				<h1 class="nicdark_font_size_20 nicdark_color_white"><strong>AGENDA</strong></h1>
			</div>
			<div class="nicdark_section">

				@foreach($agendas as $item)


				<div class="grid grid_4 ">

					<div class="nicdark_section nicdark_bg_white ">
					<!--START service-->
					<div class="nicdark_section nicdark_border_2_solid_grey nicdark_position_relative">
						<div class="nicdark_section nicdark_height_180 nicdark_padding_10  nicdark_box_sizing_border_box">
							<h2 class="textelipsise2 nicdark_font_size_16"><strong>{{$item->title}}</strong></h2>
							<div class="nicdark_section nicdark_height_15"></div>
							<h4 class="nicdark_font_size_14">Le {{  date("d M Y", strtotime($item->date)) }}, Lieu: {{$item->lieu}}</h4>
							<div class="nicdark_section nicdark_height_20"></div>
							<p class="textelipsise2">{!!$item->desc!!}</p>
							<div class="nicdark_section nicdark_height_20"></div>
							

						</div>

						<div class="nicdark_width_100_percentage nicdark_bg_grey_32 nicdark_float_right">
							<a class="nicdark_display_inline_block nicdark_margin_5  nicdark_color_white nicdark_first_font nicdark_bg_green nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="{{ route('agenda_detail.path', $item->id) }}">Voir Plus</a>
						</div>
					</div>
					</div>
					<!--END services-->

				</div>
				
			@endforeach
		</div>
	</div>
	<div class="grid grid_3 nicdark_bg_green nicdark_margin_top_80">
		<div class="nicdark_section nicdark_padding_30 nicdark_box_sizing_border_box">
			<h3 class="nicdark_color_white nicdark_text_align_center" ><strong>HORAIRES </strong></h3>
			<div class="nicdark_section nicdark_height_20"></div>

			<table class="nicdark_section">
				<tr class="nicdark_border_bottom_2_solid_greendark nicdark_border_top_2_solid_grey">
					<td class="nicdark_padding_5 nicdark_padding_top_0"><p class="nicdark_color_white">Mon - Fri</p></td>
					<td class="nicdark_padding_5 nicdark_padding_top_0"><p class="nicdark_color_white nicdark_text_align_right">8:00 - 17:00</p></td>
				</tr>
				<tr class="nicdark_border_bottom_2_solid_greendark">
					<td class="nicdark_padding_5"><p class="nicdark_color_white">Saturday</p></td>
					<td class="nicdark_padding_5"><p class="nicdark_color_white nicdark_text_align_right">9:30 - 17:30</p></td>
				</tr>
				<tr>
					<td class="nicdark_padding_5 nicdark_padding_botttom_0"><p class="nicdark_color_white">Sunday</p></td>
					<td class="nicdark_padding_5 nicdark_padding_botttom_0"><p class="nicdark_color_white nicdark_text_align_right">9:30 - 17:30</p></td>
				</tr>
			</table>

		</div>

	</div>
</div>


</div>  

<!-- les publications -->
<div class="nicdark_section nicdark_height_20"></div>

<div class="nicdark_section">

	<div class="nicdark_container nicdark_clearfix">


		<div class="grid grid_3 " style="background-color: orange; ">

			<h1 class="nicdark_font_size_20 nicdark_color_white"><strong>Publications</strong></h1>
		</div>
		<div class="nicdark_section nicdark_height_10"></div>

		<div class="nicdark_section ">
			
			@foreach($pubs as $item)
			<div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

				<div class="nicdark_section nicdark_padding_5 nicdark_bg_white nicdark_box_sizing_border_box">

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
		</div>
	</div>
</div>

<div class="nicdark_section nicdark_height_50"></div>

<!-- les partenaires -->
<div class="nicdark_section">
	<div class="nicdark_section nicdark_bg_grey_32 nicdark_border_top_1_solid_grey">

		<!--start nicdark_container-->
		<div class="nicdark_container  nicdark_clearfix" > 

			<div class="nicdark_section nicdark_height_10"></div>

			<div class="grid grid_2">
				<img alt="" class="nicdark_width_50_percentage" width="10" src="{{asset('assets/img/logos/fsm.png')}}">  
			</div>
			<div class="grid grid_2">
				<img alt="" class="nicdark_width_40_percentage" src="{{asset('assets/img/logos/um.png')}}">  
			</div>
			<div class="grid grid_2">
				<img alt="" class="nicdark_width_50_percentage nicdark_margin_top_10" src="{{asset('assets/img/logos/lig.png')}}">  
			</div>
			<div class="grid grid_2">
				<img alt="" class="nicdark_width_50_percentage nicdark_margin_top_10" src="{{asset('assets/img/logos/inpg.png')}}">  
			</div>
			<div class="grid grid_2">
				<img alt="" class="nicdark_width_50_percentage" width="10" src="{{asset('assets/img/logos/fsm.png')}}">  
			</div>
			<div class="grid grid_2">
				<img alt="" class="nicdark_width_40_percentage" src="{{asset('assets/img/logos/um.png')}}">  
			</div>
			<!-- <div class="nicdark_section nicdark_height_5"></div> -->


		</div>
		<!--end container-->

	</div>
</div>

@stop
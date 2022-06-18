@extends('users.layouts.app')
@section('content')
<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(../assets/img/parallax/img2.jpg);">

    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">




        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">


            <div class="nicdark_section nicdark_height_200"></div>

            <div class="grid grid_12">
                <strong class="nicdark_color_white nicdark_font_size_60 nicdark_first_font">DOCTORANT</strong>
            </div>

            <div class="nicdark_section nicdark_height_20"></div>


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
            <a href="#">DOCTORANT</a>


        </div>


    </div>
    <!--end container-->

</div>

<div class="nicdark_section nicdark_height_50"></div>


<div class="nicdark_section ">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_width_100_percentage">

            @foreach($doctorants as $item)
            <!--START preview-->
<div class="grid grid_3">
                <div class="nicdark_section nicdark_position_relative">

                    @if($item->img!=null)
                                <img alt=""  class="nicdark_section  " width="100" height="100" src="{{Storage::url($item->img)}}">
                                @elseif($item->sexe=="M")
                                <img alt=""  class="nicdark_section  " width="100" src="{{asset('assets/img/avatarM.jpg')}}">
                                @else
                                <img alt=""  class="nicdark_section  " width="100" src="{{asset('assets/img/avatarF.jpg')}}">
                                @endif

                    <div class="nicdark_bg_greydark_alpha_gradient nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_20 nicdark_box_sizing_border_box">

                        <div class="nicdark_position_absolute nicdark_bottom_20">
                            <h2 class="nicdark_color_white"><strong>{{$item->nom}} {{$item->prenom}}</strong></h2>
                        </div>
                    </div>
                    <a href="{{ route('membre_detail.path', $item->id) }}" class="nicdark_position_absolute nicdark_top_0 nicdark_right_0 nicdark_bg_white_hover nicdark_color_green_hover nicdark_font_size_12 nicdark_border_2_solid_green nicdark_transition_all_08_ease nicdark_display_inline_block nicdark_text_align_center   nicdark_color_white nicdark_bg_green nicdark_first_font  nicdark_padding_5 nicdark_border_radius_3">Voir Plus</a>


                </div>
            </div>
            <!--start preview-->
            @endforeach

                {{ $doctorants->links('users.layouts.paginate') }}

                <!-- {{ $doctorants->links() }} -->

            <div class="nicdark_section nicdark_height_10"></div>


        </div>


    </div>
    <!--end container-->

</div>


@stop
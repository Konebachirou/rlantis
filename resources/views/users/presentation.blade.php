@extends('users.layouts.app')
@section('content')
<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(../assets/img/parallax/img40.jpg);">
    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">
        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">
            <div class="nicdark_section nicdark_height_200"></div>
            <div class="grid grid_12">
                <strong class="nicdark_color_white nicdark_font_size_60 nicdark_font_size_40_responsive nicdark_first_font">PRESENTATION</strong>
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
            <a href="#">PRESENTATION</a>
        </div>
    </div>
    <!--end container-->
</div>
<div class="nicdark_section nicdark_height_50"></div>


<div class="nicdark_section">

    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12 ">
            <p>
                <video  width="580" height="auto" controls poster="{{asset('assets/img/courses/img4.jpg')}}" class="nicdark_float_left nicdark_margin_right_10" >
                    <source src="{{asset('assets/video/videoplayback.mp4')}}" type="video/mp4">
                    </video>
                    <p> Le LIG rassemble près de 450 chercheurs, enseignants-chercheurs, doctorants et personnels en support à la recherche. Ils relèvent des différents organismes et sont répartis sur trois sites du LIG : le campus, Minatec et Montbonnot. <br></p>

                    <p> L’ambition est de s’appuyer sur la complémentarité et la qualité reconnue des  22 équipes de recherche du LIG pour contribuer au développement des aspects fondamentaux de l'informatique (modèles, langages, méthodes, algorithmes) et pour développer une synergie entre les défis conceptuels, technologiques et sociétaux associés à cette discipline.</p>

                    <p>La diversité et la dynamicité des données, des services, des dispositifs d’interaction et des contextes d’usage imposent l’évolution des systèmes et des logiciels pour en garantir des propriétés essentielles telles que leur fiabilité, performance, autonomie et adaptabilité. Relever ces défis trouve une résonance dans les cinq axes thématiques de recherche explorés au LIG.</p>

                    <p>Le LIG se veut un laboratoire centré sur les fondements et le développement des sciences informatiques, tout en veillant à une ouverture ambitieuse sur la société pour en accompagner les nouveaux défis.</p>
                </p>
            </div>
        </div>

        <div class="nicdark_section nicdark_height_20"></div>

        <h1 id="respo" class="nicdark_margin_left_40">DIRECTION RLANTIS</h1>
        <div class="nicdark_section nicdark_height_20"></div>

        <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(../assets/img/parallax/slide3.jpg);">
            <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_5">


                <div class="nicdark_container nicdark_clearfix">

                    <div class="nicdark_section nicdark_height_20"></div>
                    <div class="nicdark_display_table nicdark_float_left nicdark_display_none_all_iphone">

                        <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                            <img alt="" class="nicdark_margin_right_20 nicdark_border_radius_100_percentage " width="250" src="{{asset('assets/img/mounir_zrigui.png')}}">
                        </div>

                        <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                           <a href="{{ route('responsable.path') }}"> <strong class="nicdark_color_white nicdark_font_size_40 nicdark_first_font"> Mounir ZRIGUI</strong></a>
                            <div class="nicdark_section nicdark_height_10"></div>
                            <h6 class="nicdark_text_transform_uppercase nicdark_color_white nicdark_font_size_20"> Directeur du RLANTIS</h6>
                            <div class="nicdark_section nicdark_height_20"></div>
                            <p class="nicdark_color_white nicdark_display_none_all_iphone nicdark_font_size_18">Professeur en informatique  a la Faculté des sciences de Monastir.</p>
                            <div class="nicdark_section nicdark_height_10"></div>

                        </div>

                    </div>
                    <div class="nicdark_section nicdark_height_20"></div>


                </div>


            </div>
        </div>




    </div>






    <div class="nicdark_section nicdark_height_50"></div>

    <div class="nicdark_section">

        <div class="nicdark_container nicdark_clearfix">
            <h2>Les Axes de Recherche de RLANTIS</h2>


            <div class="grid grid_6 ">

                <div class="nicdark_padding_20">    
                    <h1 class="nicdark_font_size_20"><strong><span class="nicdark_color_orange">01.</span> SYNTHESE ET ANALYSE DE LA PAROLE</strong></h1>

                </div>

            </div>

            <div class="grid grid_6 ">

                <div class="nicdark_padding_20">
                    <h1 class="nicdark_font_size_20"><strong><span class="nicdark_color_orange">02.</span> ANALYSE DES SENTIMENTS</strong></h1>

                </div>

            </div>


            <div class="nicdark_section nicdark_height_1"></div>

            

            <div class="grid grid_6 ">

                <div class="nicdark_padding_20">
                    <h1 class="nicdark_font_size_20"><strong><span class="nicdark_color_orange">03.</span> TRAITEMENT AUTOMATIQUE DE LA LANGUE ARABE
                    </strong></h1>

                </div>

            </div>

            <div class="grid grid_6 ">

                <div class="nicdark_padding_20">
                    <h1 class="nicdark_font_size_20"><strong><span class="nicdark_color_orange">04.</span> LES SYSTEMES DE RECOMMANDATION
                    </strong></h1>

                </div>

            </div>

            
        </div>

    </div>
    @stop
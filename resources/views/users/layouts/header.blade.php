<!--START menu responsive-->
<div class="nicdark_navigation_2_sidebar_content nicdark_padding_40 nicdark_box_sizing_border_box nicdark_overflow_hidden nicdark_overflow_y_auto nicdark_transition_all_08_ease nicdark_bg_green nicdark_height_100_percentage nicdark_position_fixed nicdark_width_300 nicdark_right_300_negative nicdark_z_index_9">

    <img alt="" width="25" class="nicdark_close_navigation_2_sidebar_content nicdark_cursor_pointer nicdark_right_20 nicdark_top_20 nicdark_position_absolute" src="{{asset('assets/img/icons/icon-close-white.svg')}}">



    <div class="nicdark_navigation_2_sidebar">
        <ul>
            <li>
                <a href="{{ route('home.path') }}">ACCUEIL</a>

            </li>
            <li>
                <a href="{{ route('about.path') }}">PRESENTATION</a>

            </li>
            <li>
                <a href="teachers.html">MEMBRES</a>
                <ul class="nicdark_sub_menu">
                    <li><a href="cart.html">ENSEIGNANT</a></li>
                    <li><a href="checkout.html">CHERCHEUR</a></li>
                    <li><a href="thankyou.html">DOCTORANT</a></li>
                </ul>
            </li>
            <li>
                <a href="#">BLOG</a>

            </li>
            <li>
                <a href="contact-1.html">CONTACT</a>
            </li>
            <li>
                <a href="contact-1.html">LOGIN</a>
            </li>

        </ul>

    </div>

</div>
<!--END menu responsive-->


<div class="nicdark_section nicdark_position_relative ">

    <div class="nicdark_section nicdark_position_relative bg">




        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix nicdark_position_relative">

            <div class="grid grid_12 nicdark_display_none_all_responsive">


                <!--LOGO-->
                <a href="{{ route('home.path') }}"><img alt="" class=" nicdark_left_35 " width="120" src="{{asset('assets/img/head2.png')}}"></a>
                <!-- <div class="nicdark_section nicdark_height_10"></div> -->


                <div class="nicdark_navigation_2 nicdark_text_align_right nicdark_margin_top_15 nicdark_float_right nicdark_display_none_all_responsive">

                    <ul>
                        <li>
                            <a href="{{ route('home.path') }}">ACCUEIL</a>

                        </li>
                        <li>
                            <a href="#">A PROPOS</a>
                            <ul class="nicdark_sub_menu">
                                <li><a href="{{ route('about.path') }}">PRESENTATION</a></li>
                                <li><a href="#">MEMBRE</a> <ul class="nicdark_sub_menu">
                                    <li><a href="{{ route('teacher.path') }}">ENSEIGNANT</a></li>
                                    <li><a href="{{ route('chercheur.path') }}">CHERCHEUR</a></li>
                                    <li><a href="{{ route('doctorant.path') }}">DOCTORANT</a></li>
                                </ul></li>
                                <li><a href="{{ route('responsable.path') }}">RESPONSABLE</a></li>
                                <li><a href="{{ route('doctorant.path') }}">Organigramme</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="{{ route('pub.path') }}">PUBLICATIONS</a>
                            
                        </li>

                        <li>
                            <a href="{{ route('contact.path') }}">CONTACT</a>
                        </li>
                        
                        @if (Auth::check())
                        <li>
                            <a href="#">

                                @if(auth()->user()->img!=null)
                                <img alt="" class="nicdark_border_radius_100_percentage   nicdark_float_right " width="30" height="30" src="{{Storage::url(auth()->user()->img)}}">
                                @elseif(auth()->user()->sexe=="M")
                                <img alt="" class="nicdark_border_radius_100_percentage   nicdark_float_right " width="30" src="{{asset('assets/img/avatarM.jpg')}}">
                                @else
                                <img alt="" class="nicdark_border_radius_100_percentage   nicdark_float_right " width="30" src="{{asset('assets/img/avatarF.jpg')}}">
                                @endif

                            </a>
                            <ul class="nicdark_sub_menu">
                                <li><a href="{{ route('profil.path') }}">Profil</a></li>
                                @if(auth()->user()->admin=='true')
                                <li><a href="{{ route('admin_home.path') }}" >Admin</a></li>
                                @endif
                                <li><a href="{{ route('link.logout') }}">Deconnexion</a></li>
                            </ul>
                        </li>
                        @else

                        <li>
                            <a href="{{ route('login.path') }}">INTRANET</a>
                        </li>
                        @endif


                    </ul>

                </div> 



            </div>

            <!--RESPONSIVE-->

            <div class="nicdark_width_10_percentage  nicdark_float_left nicdark_display_none nicdark_display_block_responsive">
                <div class="nicdark_section nicdark_height_20"></div>
                <div class="nicdark_float_right nicdark_width_100_percentage nicdark_text_align_right nicdark_text_align_center_all_iphone">


                    <a class="nicdark_open_navigation_5_sidebar_content" href="#">
                        <img alt="" class="nicdark_margin_right_5" width="25" src="{{asset('assets/img/icons/icon-menu-grey.svg')}}">
                    </a>



                </div>
                <div class="nicdark_section nicdark_height_20"></div>
            </div>
            <!--RESPONSIVE-->

        </div>
        <!--end container-->

    </div>
</div>
<!-- Navbar -->
<nav class=" navbar navbar-expand-md navbar-light fixed-top navbar-white" style="opacity: .999; box-shadow: 0 4px 2px -2px gray;">
  <div class="container">
    <a href="../../index3.html" class="navbar-brand">
      <a href="{{ route('home.path') }}"><img alt="" style="opacity: .8" class=" "  width="120" src="{{asset('assets/img/head2.png')}}"></a>
        <!-- <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span> -->
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          

          <!-- Right navbar links -->
          <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home.path') }}">ACCUEIL</a>

            </li>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">A PROPOS </a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="{{ route('about.path') }}" class="dropdown-item">PRESENTATION </a></li>
                <!-- Level two dropdown-->
                <li class="dropdown-submenu dropdown-hover">
                  <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">MEMBRE</a>
                  <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                    <li><a href="{{ route('teacher.path') }}" class="dropdown-item">ENSEIGNANT</a></li>
                    <li><a href="{{ route('chercheur.path') }}" class="dropdown-item">CHERCHEUR</a></li>
                    <li><a href="{{ route('doctorant.path') }}" class="dropdown-item">DOCTORANT</a></li>
                  </ul>
                </li>
                <!-- End Level two -->
                <li><a href="{{ route('about.path') }}/#respo" class="dropdown-item">RESPONSABLE</a></li>
                <li><a href="{{ route('doctorant.path') }}" class="dropdown-item">Organigramme</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pub.path') }}">PUBLICATIONS </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact.path') }}">CONTACT</a>
            </li>

            @if (Auth::check())
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
              @if(auth()->user()->img!=null)
                <img alt="" class="   img-circle  " width="30" height="30" src="{{Storage::url(auth()->user()->img)}}">
                @elseif(auth()->user()->sexe=="M")
                <img alt="" class="   img-circle  " width="30" src="{{asset('assets/img/avatarM.jpg')}}">
                @else
                <img alt="" class=" img-circle " width="30" src="{{asset('assets/img/avatarF.jpg')}}">
              @endif
            </a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
               <li><a href="{{ route('profil.path') }}" class="dropdown-item">Profil</a></li>
               @if(auth()->user()->admin=='true')
               <li><a href="{{ route('admin_home.path') }}" class="dropdown-item">Admin</a></li>
               @endif
               <li><a href="{{ route('link.logout') }}" class="dropdown-item">Deconnexion</a></li>
             </ul>
           </li>

          @else

          <li class="nav-item">
            <a class="nav-link" href="{{ route('login.path') }}">INTRANET</a>
          </li>
          @endif
        </ul>
      </div>
    </nav>
  <!-- /.navbar -->
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> -->
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
    </ul>
  </nav>
  <!-- /.navbar -->
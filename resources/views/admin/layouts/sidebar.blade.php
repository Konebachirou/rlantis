<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin_home.path') }}" class="brand-link">
      <img src="{{asset('admin/dist/img/logo.jpg')}}" alt="RLANTIS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin RLANTIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar mt-3 pb-3 mb-3 d-flex">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <!--  <li class="nav-item menu-open">
            
          </li> -->
          <li class="nav-item">
            <a href="{{ route('admin_home.path') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-th"></i> -->
              <i class="nav-icon fas fa-home text-secondary"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('admin_teacher.path') }}" class="nav-link">
              <i class="nav-icon fas fa-users text-info"></i>
                  <p>Enseignant</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin_doctorant.path') }}" class="nav-link">
              <i class="nav-icon fas fa-users text-info"></i>
                  <p>Doctorant</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin_chercheur.path') }}" class="nav-link">
              <i class="nav-icon fas fa-users text-info"></i>
                  <p>Chercheur</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="{{ route('admin_news.path') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-th"></i> -->
              <i class="nav-icon fas fa-info-circle text-danger"></i>
              <p>
                News
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{ route('admin_agenda.path') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-th"></i> -->
              <i class="nav-icon fas fa-calendar text-warning"></i>
              <p>
                Agenda
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin_pub.path') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-th"></i> -->
              <i class="nav-icon fas fa-copy text-olive"></i>
              <p>
                Publication
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
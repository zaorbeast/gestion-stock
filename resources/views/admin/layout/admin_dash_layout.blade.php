
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <base href="{{\URL::to('/')}}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{asset('/users/css/recherche.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                               {{ __('Logout') }} 
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
         </form>
    </ul>

    <!-- Right navbar links -->
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <p style="color: white;">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </p>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <p style="color: white;">{{Auth::user()->name}}</p>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
       
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
          <a href="/dashboard" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard                
              </p>
            </a>
            <a href="{{url('/profile')}}" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                profil                
              </p>
            </a>
            <a href="{{url('/addcategorie')}}" class="nav-link">
              <p>
                Categorie
              </p>
            </a>
            </a>
            <a href="{{url('/ListeCat')}}" class="nav-link">
              <p>
              Liste des Categories
              </p>
            </a>
            <a href="{{url('/produit')}}" class="nav-link ">
            <i class="nav-icon fas fa-plus-circle-fill"></i>
              <p>
              produit     
              </p>
            </a>
            <a href="{{url('/ListProd')}}" class="nav-link ">
              <i class="nav-icon fas fa-plus-circle-fill"></i>
                <p>
                Liste Des prodit   
                </p>
              </a>
              <a href="{{url('/entre')}}" class="nav-link ">
                <i class="nav-icon fas fa-plus-circle-fill"></i>
                  <p>
                  ajouter un entre 
                  </p>
                </a>
                <a href="{{url('/ListeEntre')}}" class="nav-link ">
                <i class="nav-icon fas fa-plus-circle-fill"></i>
                  <p>
                  Liste des entre
                  </p>
                </a>
                <a href="{{url('/Sortie')}}" class="nav-link ">
                <i class="nav-icon fas fa-plus-circle-fill"></i>
                  <p>
                  ajouter une  sortie 
                  </p>
                </a>
                <a href="{{url('/ListeSortie')}}" class="nav-link ">
                <i class="nav-icon fas fa-plus-circle-fill"></i>
                  <p>
                  Liste des sorties
                  </p>
                </a>
          </li>
          <li>
          <a href="{{url('/rapport')}}" class="nav-link ">
                <i class="nav-icon fas fa-plus-circle-fill"></i>
                  <p>
                  Rapport
                  </p>
                </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
   
    <!-- Default to the left -->
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

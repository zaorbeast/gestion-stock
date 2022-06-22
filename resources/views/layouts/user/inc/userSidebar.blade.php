<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
     
      <a class="navbar-brand m-0" href="#" target="_blank">
        <span class="ms-1 font-weight-bold text-white">{{Auth::user()->name}}</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../home">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
      <a href="{{url('/listpro')}}" class="nav-link text-white active bg-gradient-primary">Produits</a>
         <a href="/produit" class="nav-link text-white active bg-gradient-primary">ajouter un produit</a>
        </li>
        <li class="nav-item">
         <a href="{{url('/entre')}}" class="nav-link text-white active bg-gradient-primary">Ajouter une entre</a>
         <a href="{{url('/ListeEntre')}}" class="nav-link text-white active bg-gradient-primary">liste des entres</a>
        </li>
        <li class="nav-item">
        <a href="{{url('/Sortie')}}" class="nav-link text-white active bg-gradient-primary">Ajouter une sortie</a>  
        <a href="{{url('/ListeSortie')}}" class="nav-link text-white active bg-gradient-primary">liste des sortie</a>
        </li>
        <li class="nav-item">
         
        </li>
        <li class="nav-item">
         
        </li>
        <li class="nav-item mt-3">
         
        </li>
        <li class="nav-item">
        
        </li>
        <li class="nav-item">
         
        </li>
        <li class="nav-item">
          
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      
    </div>
  </aside>
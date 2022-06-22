<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <a href="{{url('/userProfile')}}" class="nav-link text-white active bg-gradient-primary">Profile</a>
          </ol>
          
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <form action=""></form>
             
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                               {{ __('Logout') }} 
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
         </form>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              
            
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
             
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  
                </li>
                <li class="mb-2">
                 </a>
                </li>
                <li>
                 
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
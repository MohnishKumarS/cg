<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 text-center" href="{{url('/')}}" target="_blank">
        <img src="{{asset('image/logo.jpg')}}" class="navbar-brand-img img-fluid " alt="Collegiate Graphix logo" width="200" height="200"><br>
        {{-- <span class="ms-1 font-weight-bold text-white">Collegiate Graphix Dashboard</span> --}}
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin') ? 'active' : ''}}" href="{{route('admin.dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin/portfolio-category') ? 'active' : ''}}" href="{{url('admin/portfolio-category')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">fact_check</i>
            </div>
            <span class="nav-link-text ms-1">Portfolio Category</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin/portfolio-gallery') ? 'active' : ''}}" href="{{url('admin/portfolio-gallery')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add_a_photo</i>
            </div>
            <span class="nav-link-text ms-1">Create Gallery</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin/gallery-list') ? 'active' : ''}}" href="{{url('admin/gallery-list')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">photo_library</i>
            </div>
            <span class="nav-link-text ms-1">Gallery List</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin/users-contact') ? 'active' : ''}}" href="{{url('admin/users-contact')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">contact_page</i>
            </div>
            <span class="nav-link-text ms-1">Contacts Form</span>
          </a>
        </li>



      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-outline-primary mt-4 w-100" href="{{route('logout')}}"
        onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();"><i class="material-icons opacity-10 me-2" >logout</i>Logout</a>
        <form id="admin-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
      </div>
    </div>
  </aside>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}" />
    <link rel="icon" href="{{asset('admin/assets/img/lostfound.png')}}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light iq-navbar">
        <div class="container-fluid navbar-inner">
            <div class="logo" style="margin-left: 135px;">
              @if(Auth::user()->role == 'user')
                <a href="/lostandfound"><img src="{{asset('admin/assets/img/lostfound.png')}}" alt="" width="100px"></a> 
              @else
                <a href="/homepageadmin"><img src="{{asset('admin/assets/img/lostfound.png')}}" alt="" width="100px"></a> 
              @endif 
            </div>
            <div class="input-group search-input">
              <form class="d-flex" role="search" method="GET" action="/homepageadmin">
                <input  name="cari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </form>
                <!--<span class="input-group-text" id="search-input">
                    <img src="http://www.glorybright.com/assets/frontend/common/images/nav_searchicon-01.svg" alt="" width="18px">
                </span>
                <input type="search" class="form-control" placeholder="Search..." style="border-radius: 0%;">-->
            </div>
            @if(Auth::user()->role == 'user')
            <div class="ms-auto mx-4" style="cursor: pointer;">
                <a href="/add-losts" style="text-decoration: none"><h6 class="mb-1 user-title text-black">Submit Lost Item</h6></a>
            </div>
            <div class="mx-4" style="cursor: pointer;">
                <a href="/add-founds" style="text-decoration: none"><h6 class="mb-1 user-title text-black">Submit Found Item</h6></a>
            </div>  
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link text-black" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Catalog
                    </a>
                    <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="/losts">Lost</a></li>
                      <li><a class="dropdown-item" href="/founds">Found</a></li>
                    </ul>
                  </li>
                </ul>
              </div>   
            @endif   
            <div class="" style="margin-right: 120px;">
                <ul class="navbar-nav flex-row">
                    <li class="nav-item mx-3">
                        <img src="{{asset('admin/assets/img/profileuser.png')}}" width="40px" height="40px" alt="user" style="border-radius: 50%;"> <a href="/lostandfound"></a>
                    </li>
                    <div class="user ms-auto">
                        <h6 class="mb-1 user-title">{{ Auth::user()->name}}</h6>
                        {{-- <h6 class="mb-1 user-title"></h6> --}}
                        {{--  --}}
                        <a href="/logout" style="text-decoration: none"><span>Logout</span><img src="{{asset('admin/assets/img/logout.png')}}" class="mx-2" width="20px" height="20px"></a>
                    </div>
                </ul>
            </div> 
        </div>
      </nav>
<div class="wrapper"> 
    @yield('content')
</div>
<footer>
    <div class="position-relative mt-4">
        <img src="{{asset('admin/assets/img/footer.png')}}" width="1519px" height="253px" alt="footer">
      <div class="position-absolute top-0 p-4 w-100 text-center">
        <div class="d-flex justify-content-center align-items-center py-4">
          <div class="col-4 align-items-center mt-4">
            <div>
              <h5 class="text-white">Address</h5>
              <p class="text-white" style="font-size:small;">
                Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat
              </p>
            </div>
          </div>
          <div class="col-4 align-items-center">
            <div class="text-white mb-3">
              <h5 class="mb-0">Follow Us</h5>
            </div>
            <div class="social-icons">
                <img src="{{asset('admin/assets/img/facebook.png')}}" class="mx-2" width="25" height="25"/></a>
                <img src="{{asset('admin/assets/img/instagram.png')}}" class="mx-2" width="25" height="25"/></a>
                <img src="{{asset('admin/assets/img/whatsapp.png')}}" class="mx-2" width="25" height="25"/></a>
                <img src="{{asset('admin/assets/img/twitter.png')}}" class="mx-2" width="25" height="25"/></a>
            </div>
          </div>
          <div class="col-4 align-items-center mt-4">
            <div>
              <h5 class="text-white">Have a Question?</h5>
              <p class="text-white" style="font-size: small;">
                Phone: +62899999999 <br>
                Email: hello@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center text-white position-absolute bottom-0 w-100">
        © 2023 Lost and Found Items Tracker
      </div>
    </div>
  </footer>
  @include('sweetalert::alert')
</body>
</html>
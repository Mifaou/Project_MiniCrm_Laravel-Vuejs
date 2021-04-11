<div class="slim-header with-sidebar">
    <div class="container-fluid">
      <div class="slim-header-left">
      <h2 class="slim-logo"><a href="{{route('dashboard')}}">CRM Project</a><span></span></a></h2>
        <a href="" id="slimSidebarMenu" class="slim-sidebar-menu"><span></span></a>
        {{-- <div class="search-box">
          <input type="text" class="form-control" placeholder="Search">
          <button class="btn btn-primary"><i class="fa fa-search"></i></button>
        </div><!-- search-box --> --}}
      </div><!-- slim-header-left -->
      <div class="slim-header-right">

        <div class="dropdown dropdown-c">
          <a href="#" class="logged-user" data-toggle="dropdown">
            <img src="https://img.icons8.com/bubbles/2x/admin-settings-male.png" alt="">
          <span>{{Auth::user()->name}}</span>
            <i class="fa fa-angle-down"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <nav class="nav">

              <a href="{{ route('admin.logout') }}" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
            </nav>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </div><!-- header-right -->
    </div><!-- container-fluid -->
  </div><!-- slim-header -->

<div class="main-panel">
    <!-- Navbar -->
    @include('layouts.partials.nav-bar')
    <!-- End Navbar -->
    <div class="content">
      @yield('content')
    </div>
    @include('layouts.partials.footer')
  </div>
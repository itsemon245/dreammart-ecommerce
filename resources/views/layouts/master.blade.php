<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-template="vertical-menu-template-free"
>
  <x-backend.head />

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->

          <x-backend.sidebar />
          <!-- / Menu -->

          <!-- Layout container -->
          <div class="layout-page">
            {{-- NavBar  --}}
            <x-backend.navbar />
           {{-- /NavBar --}}

           {{-- Alerts --}}
           <x-backend.alert />
           {{-- /Alerts --}}
           
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                @section('content')
                    
                @show
                
                <!-- / Content -->
  
                <!-- Footer -->
                {{-- <x-backend.footer /> --}}
                <!-- / Footer -->
  
                <div class="content-backdrop fade"></div>
              </div>
              <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  {{-- scripts --}}
  <x-backend.scripts />
</body>
</html>


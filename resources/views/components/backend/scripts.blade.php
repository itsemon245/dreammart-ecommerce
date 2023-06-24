<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<!-- Helpers -->
<script src="{{ asset('backend/assets/vendor/js/helpers.js') }}"></script>
{{-- jquery-3 --}}
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

{{-- sweetalert2 --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('backend/assets/js/config.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('backend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('backend/assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('backend/assets/js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


@stack('customJs')

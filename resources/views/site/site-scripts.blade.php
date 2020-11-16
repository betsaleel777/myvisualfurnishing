<!-- Back to top button-->
<a class="btn-scroll-top" href="#top" data-scroll><span
        class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i
        class="btn-scroll-top-icon fe-arrow-up"> </i></a>
<!-- Vendor scrits: js libraries and plugins-->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('dist/vendor/jquery/dist/jquery.slim.min.js') }}"></script>
<script src="{{ asset('dist/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js') }}"></script>
<script src="{{ asset('dist/vendor/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('dist/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('dist/vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
<!-- Main theme script-->
<script src="{{ asset('dist/js/theme.min.js') }}"></script>
@yield('script')
</body>

</html>

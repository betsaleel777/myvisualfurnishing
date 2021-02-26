    <!-- Footer -->
    <footer class="footer pt-0">
       <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
             <div class="copyright text-center  text-lg-left  text-muted">
                &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                   target="_blank">Babideco</a>
             </div>
          </div>
          <div class="col-lg-6">
             <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                   <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Babideco</a>
                </li>
                <li class="nav-item">
                   <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">A propos de
                      nous</a>
                </li>
                {{-- <li class="nav-item"> --}}
                {{-- <a href="http://blog.creative-tim.com" class="nav-link"
                            target="_blank">Blog</a> --}}
                {{-- </li> --}}
                {{-- <li class="nav-item"> --}}
                {{-- <a
                            href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"
                            class="nav-link" target="_blank">MIT License</a> --}}
                {{-- </li> --}}
             </ul>
          </div>
       </div>
    </footer>
    </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('web/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" charset="utf-8"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('web/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('web/assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('web/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('web/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('web/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('web/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('web/assets/js/argon.js') }}"></script>
    @yield('script')
    </body>

    </html>

<!-- Body-->
  <body>
    <!-- Page loading spinner-->
    <div class="cs-page-loading active">
      <div class="cs-page-loading-inner">
        <div class="cs-page-spinner"></div><span>Chargement...</span>
      </div>
    </div>
    <main class="cs-page-wrapper">
      <!-- Sign In Modal-->
      <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content border-0">
            <div class="cs-view show" id="modal-signin-view">
              <div class="modal-header border-0 bg-dark px-4">
                <h4 class="modal-title text-light">Se connecter</h4>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body px-4">
                <p class="font-size-ms text-muted">Connectez vous et consulter les informations de votre profil</p>
                <form class="needs-validation" novalidate>
                  <div class="input-group-overlay form-group">
                    <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="fe-mail"></i></span></div>
                    <input class="form-control prepended-form-control" type="email" placeholder="Email" required>
                  </div>
                  <div class="input-group-overlay cs-password-toggle form-group">
                    <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="fe-lock"></i></span></div>
                    <input class="form-control prepended-form-control" type="password" placeholder="Mot de passe" required>
                    <label class="cs-password-toggle-btn">
                      <input class="custom-control-input" type="checkbox"><i class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Voir mot de passe</span>
                    </label>
                  </div>
                  <div class="d-flex justify-content-between align-items-center form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="keep-signed">
                      <label class="custom-control-label" for="keep-signed">Restez conneté</label>
                    </div><a class="nav-link-style font-size-ms" href="password-recovery.html">Mot de passe oublié</a>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit">Se connecter</button>
                  <p class="font-size-sm pt-3 mb-0">Je n'ai pas de compte? <a href='#' class='font-weight-medium' data-view='#modal-signup-view'>S'incrire</a></p>
                </form>
              </div>
            </div>
            <div class="cs-view" id="modal-signup-view">
              <div class="modal-header border-0 bg-dark px-4">
                <h4 class="modal-title text-light">Créer un compte</h4>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body px-4">
                <p class="font-size-ms text-muted">Inscrivez vous et accéder à d'avantages de fonctionnalités.</p>
                <form class="needs-validation" novalidate>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Nom complet" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Email" required>
                  </div>
                  <div class="cs-password-toggle form-group">
                    <input class="form-control" type="password" placeholder="mot de passe" required>
                    <label class="cs-password-toggle-btn">
                      <input class="custom-control-input" type="checkbox"><i class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Voir mot de passe</span>
                    </label>
                  </div>
                  <div class="cs-password-toggle form-group">
                    <input class="form-control" type="password" placeholder="Confirm password" required>
                    <label class="cs-password-toggle-btn">
                      <input class="custom-control-input" type="checkbox"><i class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Voir mot de passe</span>
                    </label>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit">Créer le compte</button>
                  <p class="font-size-sm pt-3 mb-0">J'ai déjà un compte ? <a href='#' class='font-weight-medium' data-view='#modal-signin-view'>Se connecter</a></p>
                </form>
              </div>
            </div>
            <div class="modal-body text-center px-4 pt-2 pb-4">
              <hr>
              <p class="font-size-sm font-weight-medium text-heading pt-4">ou connectez vous avec</p><a class="social-btn sb-facebook sb-lg mx-1 mb-2" href="#"><i class="fe-facebook"></i></a><a class="social-btn sb-twitter sb-lg mx-1 mb-2" href="#"><i class="fe-twitter"></i></a><a class="social-btn sb-instagram sb-lg mx-1 mb-2" href="#"><i class="fe-instagram"></i></a><a class="social-btn sb-google sb-lg mx-1 mb-2" href="#"><i class="fe-google"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Shopping cart off-canvas-->
      <div class="cs-offcanvas cs-offcanvas-collapse-always cs-offcanvas-right" id="shoppingCart">
        <div class="cs-offcanvas-cap navbar-box-shadow px-4 mb-2">
          <h5 class="mt-1 mb-0">Your cart</h5>
          <button class="close lead" type="button" data-toggle="offcanvas" data-offcanvas-id="shoppingCart"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="cs-offcanvas-body p-4" data-simplebar>
          <div class="media align-items-center mb-3"><a class="d-block" href="{{route('shop-single')}}"><img class="rounded" width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/05.jpg')}}" alt="Product"/></a>
            <div class="media-body pl-2 ml-1">
              <div class="d-flex align-items-center justify-content-between">
                <div class="mr-3">
                  <h4 class="nav-heading font-size-md mb-1"><a class="font-weight-medium" href="{{route('shop-single')}}">Smart Watch Series 5</a></h4>
                  <div class="d-flex align-items-center font-size-sm"><span class="mr-2">$364.99</span><span class="mr-2">x</span>
                    <input class="form-control form-control-sm px-2" type="number" style="max-width: 3.5rem;" value="1">
                  </div>
                </div>
                <div class="pl-3 border-left"><a class="d-block text-danger text-decoration-none font-size-xl" href="#" data-toggle="tooltip" title="Remove"><i class="fe-x-circle"></i></a></div>
              </div>
            </div>
          </div>
          <div class="media align-items-center mb-3"><a class="d-block" href="{{route('shop-single')}}"><img class="rounded" width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/02.jpg')}}" alt="Product"/></a>
            <div class="media-body pl-2 ml-1">
              <div class="d-flex align-items-center justify-content-between">
                <div class="mr-3">
                  <h4 class="nav-heading font-size-md mb-1"><a class="font-weight-medium" href="{{route('shop-single')}}">Running Sneakers, Collection</a></h4>
                  <div class="d-flex align-items-center font-size-sm"><span class="mr-2">$145.00</span><span class="mr-2">x</span>
                    <input class="form-control form-control-sm px-2" type="number" style="max-width: 3.5rem;" value="1">
                  </div>
                </div>
                <div class="pl-3 border-left"><a class="d-block text-danger text-decoration-none font-size-xl" href="#" data-toggle="tooltip" title="Remove"><i class="fe-x-circle"></i></a></div>
              </div>
            </div>
          </div>
          <div class="media align-items-center mb-3"><a class="d-block" href="{{route('shop-single')}}"><img class="rounded" width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/06.jpg')}}" alt="Product"/></a>
            <div class="media-body pl-2 ml-1">
              <div class="d-flex align-items-center justify-content-between">
                <div class="mr-3">
                  <h4 class="nav-heading font-size-md mb-1"><a class="font-weight-medium" href="{{route('shop-single')}}">Wireless Bluetooth Headset</a></h4>
                  <div class="d-flex align-items-center font-size-sm"><span class="mr-2">$258.00</span><span class="mr-2">x</span>
                    <input class="form-control form-control-sm px-2" type="number" style="max-width: 3.5rem;" value="1">
                  </div>
                </div>
                <div class="pl-3 border-left"><a class="d-block text-danger text-decoration-none font-size-xl" href="#" data-toggle="tooltip" title="Remove"><i class="fe-x-circle"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="cs-offcanvas-cap d-block border-top px-4 mb-2">
          <div class="d-flex justify-content-between mb-4"><span>Total:</span><span class="h6 mb-0">$776.99</span></div><a class="btn btn-primary btn-sm btn-block" href="checkout.html"><i class="fe-credit-card font-size-base mr-2"></i>procéder à une commande</a>
        </div>
      </div>
      <!-- Navbar (Solid background + shadow)-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <header class="cs-header">
        <div class="topbar topbar-dark bg-dark">
          <div class="container d-md-flex align-items-center px-0 px-xl-3">
            <div class="d-none d-md-block text-nowrap mr-3"><i class="fe-phone font-size-base text-muted mr-1"></i><span class="text-muted mr-2">Aide</span><a class="topbar-link mr-1" href="tel:9107848015">910-784-8015</a></div>
            <div class="d-flex text-md-right ml-md-auto"><a class="topbar-link pr-2 mr-4" href="order-tracking.html"><i class="fe-map-pin font-size-base opacity-60 mr-1"></i>Suivre<span class='d-none d-sm-inline'> commandes</span></a>
{{--              <div class="dropdown ml-auto ml-md-0 mr-3"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown"><img class="mr-2" width="20" src="img/flags/en.png" alt="English"/>Eng</a>--}}
{{--                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><img class="mr-2" width="20" src="img/flags/fr.png" alt="Français"/>Français</a><a class="dropdown-item" href="#"><img class="mr-2" width="20" src="img/flags/de.png" alt="Deutsch"/>Deutsch</a><a class="dropdown-item" href="#"><img class="mt-n1 mr-2" width="20" src="img/flags/it.png" alt="Italiano"/>Italiano</a></div>--}}
{{--              </div>--}}
{{--              <div class="dropdown"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">$ Dollar (US)</a>--}}
{{--                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">€ Euro (EU)</a><a class="dropdown-item" href="#">£ Pound (UK)</a><a class="dropdown-item" href="#">¥ Yen (JP)</a></div>--}}
{{--              </div>--}}
            </div>
          </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light bg-light navbar-box-shadow navbar-sticky" data-scroll-header>
          <div class="navbar-search bg-light">
            <div class="container d-flex flex-nowrap align-items-center"><i class="fe-search font-size-xl"></i>
              <input class="form-control form-control-xl navbar-search-field" type="text" placeholder="Search site">
              <div class="d-none d-sm-block flex-shrink-0 pl-2 mr-4 border-left border-right" style="width: 10rem;">
                <select class="form-control custom-select pl-2 pr-0">
                  <option value="all">Catégories</option>
                  <option value="clothing">Clothing</option>
                  <option value="shoes">Shoes</option>
                  <option value="electronics">Electronics</option>
                  <option value="accessoriies">Accessories</option>
                  <option value="software">Software</option>
                  <option value="automotive">Automotive</option>
                </select>
              </div>
              <div class="d-flex align-items-center"><span class="text-muted font-size-xs mt-1 d-none d-sm-inline">Fermer</span>
                <button class="close p-2" type="button" data-toggle="search">&times;</button>
              </div>
            </div>
          </div>
          <div class="container px-0 px-xl-3">
            <button class="navbar-toggler ml-n2 mr-4" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand order-lg-1 mx-auto ml-lg-0 pr-lg-2 mr-lg-4" href="index.html"><img class="d-none d-lg-block" width="153" src="{{asset('dist/img/logo/logo-dark.png')}}" alt="vfurnishing"/><img class="d-lg-none" width="58" src="{{asset('dist/img/logo/logo-icon.png')}}" alt="vfurnishing"/></a>
            <div class="d-flex align-items-center order-lg-3 ml-lg-auto">
              <div class="navbar-tool"><a class="navbar-tool-icon-box mr-2" href="#" data-toggle="search"><i class="fe-search"></i></a></div>
              <div class="navbar-tool d-none d-sm-flex"><a class="navbar-tool-icon-box mr-2" href="#modal-signin" data-toggle="modal" data-view="#modal-signin-view"><i class="fe-user"></i></a></div>
              <div class="border-left mr-2" style="height: 30px;"></div>
              <div class="navbar-tool mr-2"><a class="navbar-tool-icon-box" href="#" data-toggle="offcanvas" data-offcanvas-id="shoppingCart"><i class="fe-shopping-cart"></i><span class="navbar-tool-badge">3</span></a></div>
            </div>
            <div class="cs-offcanvas-collapse order-lg-2" id="primaryMenu">
              <div class="cs-offcanvas-cap navbar-box-shadow">
                <h5 class="mt-1 mb-0">Menu</h5>
                <button class="close lead" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="cs-offcanvas-body">
                <!-- Menu-->
              </div>
              <div class="cs-offcanvas-cap border-top"><a class="btn btn-translucent-primary btn-block" href="#modal-signin" data-toggle="modal" data-view="#modal-signin-view"><i class="fe-user font-size-lg mr-2"></i>Se connecter</a></div>
            </div>
          </div>
        </div>
      </header>

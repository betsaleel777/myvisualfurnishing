@extends('site.layouts.default')
@section('content')
    <!-- Page content-->
  <!-- Hero - Featured Products (tabs)-->
  <section class="position-relative bg-gradient pt-5 pt-lg-6 pb-7 mb-7">
    <div class="cs-shape cs-shape-bottom cs-shape-curve bg-body">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
        <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
      </svg>
    </div>
    <!-- Tabs-->
    <div class="container pb-7">
      <div class="row align-items-center pb-7">
        <div class="col-lg-3">
          <ul class="nav nav-tabs cs-media-tabs cs-media-tabs-light justify-content-center justify-content-lg-start pb-3 mb-4 pb-lg-0 mb-lg-0" role="tablist">
            <li class="nav-item mb-3" style="max-width: 16.25rem;"><a class="nav-link active" href="#camera" data-toggle="tab" role="tab">
              <div class="media align-items-center">
                <img class="rounded" width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/01.jpg')}}" alt="Product"/>
                <div class="media-body pl-2 ml-1">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="font-size-sm pr-1">Décoration et ameublement</div>
                    <i class="fe-chevron-right lead ml-2 mr-1"></i>
                  </div>
                </div>
              </div>
            </a></li>
            <li class="nav-item mb-3" style="max-width: 16.25rem;"><a class="nav-link" href="#sneakers" data-toggle="tab" role="tab">
              <div class="media align-items-center">
                <img class="rounded" width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/02.jpg')}}" alt="Product"/>
                <div class="media-body pl-2 ml-1">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="font-size-sm pr-1">Compte prémium</div>
                    <i class="fe-chevron-right lead ml-2 mr-1"></i>
                  </div>
                </div>
              </div>
            </a></li>
            <li class="nav-item" style="max-width: 16.25rem;"><a class="nav-link" href="#vr" data-toggle="tab" role="tab">
              <div class="media align-items-center">
                <img class="rounded" width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/03.jpg')}}" alt="Product"/>
                <div class="media-body pl-2 ml-1">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="font-size-sm pr-1">Compte standard</div>
                    <i class="fe-chevron-right lead ml-2 mr-1"></i>
                  </div>
                </div>
              </div>
            </a></li>
          </ul>
        </div>
        <div class="col-lg-9">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="camera">
              <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                  <div class="mx-auto" style="max-width: 443px;">
                    <img src="{{asset('dist/img/demo/shop-homepage/hero/01.png')}}" alt="Security Camera"/>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1 text-center text-lg-left">
                  <div class="pl-xl-5">
                    <h2 class="h1 text-light">Décorez et meublez votre maison en 3D</h2>
                    <p class="font-size-lg text-light mb-lg-5">Imprimer le devis de la décoration</p>
                    <a class="btn btn-translucent-light" href="https://www.kozikaza.com/kazaplan/new">Commencez gratuitement!</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="sneakers">
              <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                  <div class="mx-auto" style="max-width: 443px;">
                    <img src="{{asset('dist/img/demo/shop-homepage/hero/02.png')}}" alt="Running Sneakers"/>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1 text-center text-lg-left">
                  <div class="pl-xl-5">
                    <h2 class="h1 text-light">Vous êtes un décorateur d'intérieur proféssionel!</h2>
                    <p class="font-size-lg text-light mb-lg-5">Créer un compte prémium pour accéder a des fonctionalités exclusives</p>
                    <a class="btn btn-translucent-light" href="#">Commencer en prémium</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="vr">
              <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                  <div class="mx-auto" style="max-width: 443px;"><img src="{{asset('dist/img/demo/shop-homepage/hero/03.png')}}" alt="VR Headset"/>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1 text-center text-lg-left">
                  <div class="pl-xl-5">
                    <h2 class="h1 text-light">Vous êtes néophite en décoration d'intérieur ?</h2>
                    <p class="font-size-lg text-light mb-lg-5">Créer un compte pour sauvegarder vos plans.</p>
                    <a class="btn btn-translucent-light" href="#">Créer un compte</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Categories (carousel)-->
  <section class="container bg-overlay-content" style="margin-top: -290px;">
    <div class="cs-carousel">
      <div class="cs-carousel-inner" data-carousel-options="{&quot;items&quot;: 3, &quot;controls&quot;: false, &quot;gutter&quot;: 24, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;560&quot;:{&quot;items&quot;:2},&quot;850&quot;:{&quot;items&quot;:3}}}">
        <!-- Category-->
        <div class="pb-2">
          <a class="card card-category box-shadow mx-1" href="#"><span class="badge badge-lg badge-floating badge-floating-right badge-success">minimum $8.99</span><img class="card-img-top" src="{{asset('dist/img/shop/categories/01.jpg')}}" alt="Clothing"/>
            <div class="card-body">
              <h4 class="card-title">Bureau</h4>
            </div>
          </a></div>
        <!-- Category-->
        <div class="pb-2">
          <a class="card card-category box-shadow mx-1" href="#"><span class="badge badge-lg badge-floating badge-floating-right badge-info">minimum $14.99</span><img class="card-img-top" src="{{asset('dist/img/shop/categories/02.jpg')}}" alt="Electronics"/>
            <div class="card-body">
              <h4 class="card-title">Chambres</h4>
            </div>
          </a></div>
        <!-- Category-->
        <div class="pb-2">
          <a class="card card-category box-shadow mx-1" href="#"><span class="badge badge-lg badge-floating badge-floating-right badge-danger">minimum $5.99</span><img class="card-img-top" src="{{asset('dist/img/shop/categories/03.jpg')}}" alt="accessories"/>
            <div class="card-body">
              <h4 class="card-title">Salons</h4>
            </div>
          </a></div>
        <!-- Category-->
        <div class="pb-2">
          <a class="card card-category box-shadow mx-1" href="#"><span class="badge badge-lg badge-floating badge-floating-right badge-warning">minimum $7.99</span><img class="card-img-top" src="{{asset('dist/img/shop/categories/04.jpg')}}" alt="Kids"/>
            <div class="card-body">
              <h4 class="card-title">Déco et équipement</h4>
            </div>
          </a></div>
      </div>
    </div>
  </section>
  <!-- Trending products (grid)-->
  <section class="container pt-5 mt-5 mt-md-0 pt-md-6 pt-lg-7">
    <h2 class="text-center mb-5">Produits tendances</h2>
    <div class="row pb-1">
      <!-- Item-->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
        <div class="card card-product card-hover">
          <a class="card-img-top" href="{{route('shop-single')}}"><img src="{{asset('dist/img/shop/catalog/01.jpg')}}" alt="Product thumbnail"/></a>
          <div class="card-body"><a class="meta-link font-size-xs mb-1" href="#">Men's clothing</a>
            <h3 class="font-size-md font-weight-medium mb-2"><a class="meta-link" href="{{route('shop-single')}}">Simple Cotton Gray T-shirt</a>
            </h3><span class="text-heading font-weight-semibold">$19.00</span>
          </div>
          <div class="card-footer">
            <div class="star-rating">
              <i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star"></i><i class="sr-star fe-star"></i>
            </div>
            <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="fe-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="fe-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Item-->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
        <div class="card card-product card-hover">
          <a class="card-img-top" href="{{route('shop-single')}}"><img src="{{asset('dist/img/shop/catalog/02.jpg')}}" alt="Product thumbnail"/></a>
          <div class="card-body"><a class="meta-link font-size-xs mb-1" href="#">Electronics</a>
            <h3 class="font-size-md font-weight-medium mb-2"><a class="meta-link" href="{{route('shop-single')}}">Wireless Headphones</a></h3>
            <span class="text-heading font-weight-semibold">$165.00</span>
          </div>
          <div class="card-footer">
            <div class="star-rating">
              <i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star"></i>
            </div>
            <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="fe-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="fe-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Item-->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
        <div class="card card-product card-hover">
          <span class="badge badge-floating badge-pill badge-success">New</span><a class="card-img-top" href="{{route('shop-single')}}"><img src="{{asset('dist/img/shop/catalog/03.jpg')}}" alt="Product thumbnail"/></a>
          <div class="card-body"><a class="meta-link font-size-xs mb-1" href="#">Accessories</a>
            <h3 class="font-size-md font-weight-medium mb-2"><a class="meta-link" href="{{route('shop-single')}}">Military Cotton Cap</a></h3>
            <span class="text-heading font-weight-semibold">$28.00</span>
          </div>
          <div class="card-footer">
            <div class="star-rating">
              <i class="sr-star fe-star"></i><i class="sr-star fe-star"></i><i class="sr-star fe-star"></i><i class="sr-star fe-star"></i><i class="sr-star fe-star"></i>
            </div>
            <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="fe-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="fe-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Item-->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
        <div class="card card-product card-hover">
          <a class="card-img-top" href="{{route('shop-single')}}"><img src="{{asset('dist/img/shop/catalog/09.jpg')}}" alt="Product thumbnail"/></a>
          <div class="card-body"><a class="meta-link font-size-xs mb-1" href="#">Women's shoes</a>
            <h3 class="font-size-md font-weight-medium mb-2"><a class="meta-link" href="{{route('shop-single')}}">Women Colorblock Sneakers</a>
            </h3><span class="text-heading font-weight-semibold">$154.00</span>
          </div>
          <div class="card-footer">
            <div class="star-rating">
              <i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star"></i>
            </div>
            <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="fe-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="fe-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Item-->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
        <div class="card card-product card-hover">
          <span class="badge badge-floating badge-pill badge-danger">Sale</span><a class="card-img-top" href="{{route('shop-single')}}"><img src="{{asset('dist/img/shop/catalog/04.jpg')}}" alt="Product thumbnail"/></a>
          <div class="card-body"><a class="meta-link font-size-xs mb-1" href="#">Electronics</a>
            <h3 class="font-size-md font-weight-medium mb-2"><a class="meta-link" href="{{route('shop-single')}}">360 Degrees Camera</a></h3>
            <del class="font-size-sm text-muted mr-1">$120.40</del>
            <span class="text-heading font-weight-semibold">$98.75</span>
          </div>
          <div class="card-footer">
            <div class="star-rating">
              <i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star"></i>
            </div>
            <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="fe-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="fe-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Item-->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
        <div class="card card-product card-hover">
          <a class="card-img-top" href="{{route('shop-single')}}"><img src="{{asset('dist/img/shop/catalog/07.jpg')}}" alt="Product thumbnail"/></a>
          <div class="card-body"><a class="meta-link font-size-xs mb-1" href="#">Accessories</a>
            <h3 class="font-size-md font-weight-medium mb-2"><a class="meta-link" href="{{route('shop-single')}}">3-Color Sun Stash Hat</a></h3>
            <span class="text-heading font-weight-semibold">$25.99</span>
          </div>
          <div class="card-footer">
            <div class="star-rating">
              <i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star"></i><i class="sr-star fe-star"></i>
            </div>
            <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="fe-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="fe-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Item-->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
        <div class="card card-product card-hover">
          <span class="badge badge-floating badge-pill badge-warning">Top rated</span><a class="card-img-top" href="{{route('shop-single')}}"><img src="{{asset('dist/img/shop/catalog/06.jpg')}}" alt="Product thumbnail"/></a>
          <div class="card-body"><a class="meta-link font-size-xs mb-1" href="#">Backpacks</a>
            <h3 class="font-size-md font-weight-medium mb-2"><a class="meta-link" href="{{route('shop-single')}}">Vintage Travel Backpack</a></h3>
            <span class="text-heading font-weight-semibold">$82.00</span>
          </div>
          <div class="card-footer">
            <div class="star-rating">
              <i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i>
            </div>
            <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="fe-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="fe-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Item-->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
        <div class="card card-product card-hover">
          <a class="card-img-top" href="{{route('shop-single')}}"><img src="{{asset('dist/img/shop/catalog/08.jpg')}}" alt="Product thumbnail"/></a>
          <div class="card-body"><a class="meta-link font-size-xs mb-1" href="#">Electronics</a>
            <h3 class="font-size-md font-weight-medium mb-2"><a class="meta-link" href="{{route('shop-single')}}">Speaker with Voice Control</a>
            </h3><span class="text-heading font-weight-semibold">$49.99</span>
          </div>
          <div class="card-footer">
            <div class="star-rating">
              <i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star"></i>
            </div>
            <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="fe-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="fe-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Item-->
      <div class="col-lg-3 col-md-4 col-sm-6 d-none d-md-block d-lg-none mb-grid-gutter">
        <div class="card card-product card-hover">
          <a class="card-img-top" href="{{route('shop-single')}}"><img src="{{asset('dist/img/shop/catalog/05.jpg')}}" alt="Product thumbnail"/></a>
          <div class="card-body"><a class="meta-link font-size-xs mb-1" href="#">Men's shoes</a>
            <h3 class="font-size-md font-weight-medium mb-2"><a class="meta-link" href="{{route('shop-single')}}">Sport Running Sneakers</a></h3>
            <span class="text-heading font-weight-semibold">$140.00</span>
          </div>
          <div class="card-footer">
            <div class="star-rating">
              <i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star"></i>
            </div>
            <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="fe-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="fe-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center"><a class="btn btn-outline-primary" href="shop-ls.html">plus d'articles</a></div>
  </section>
  <!-- New arrivals (widget) + Promo banner-->
  <section class="container pt-5 mt-3 mt-md-0 pt-md-6 pt-lg-7">
    <div class="row">
      <div class="col-lg-4 d-none d-lg-block">
        <div class="card h-100 p-4">
          <div class="p-2">
            <div class="d-flex justify-content-between align-items-center mb-4 pb-1">
              <h3 class="font-size-xl mb-0">New arrivals</h3><a class="font-size-sm font-weight-medium mr-n2" href="shop-ls.html">Voir
              plus<i class="fe-chevron-right font-size-lg ml-1"></i></a>
            </div>
            <div class="media align-items-center pb-2 mb-1">
              <a class="d-block" href="#"><img class="rounded" width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/04.jpg')}}" alt="Product"/></a>
              <div class="media-body pl-2 ml-1">
                <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium" href="#">Block-colored Hooded Top</a></h4>
                <p class="font-size-sm mb-0">$27.50</p>
              </div>
            </div>
            <div class="media align-items-center pb-2 mb-1">
              <a class="d-block" href="#"><img class="rounded" width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/05.jpg')}}" alt="Product"/></a>
              <div class="media-body pl-2 ml-1">
                <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium" href="#">Smart Watch Series 5</a></h4>
                <p class="font-size-sm mb-0">$364.99</p>
              </div>
            </div>
            <div class="media align-items-center pb-2 mb-1">
              <a class="d-block" href="#"><img class="rounded" width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/02.jpg')}}" alt="Product"/></a>
              <div class="media-body pl-2 ml-1">
                <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium" href="#">Running Sneakers, Collection</a></h4>
                <p class="font-size-sm mb-0">$145.00</p>
              </div>
            </div>
            <div class="media align-items-center">
              <a class="d-block" href="#"><img class="rounded" width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/06.jpg')}}" alt="Product"/></a>
              <div class="media-body pl-2 ml-1">
                <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium" href="#">Bluetooth Headset</a></h4>
                <p class="font-size-sm mb-0">$258.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="bg-secondary rounded-lg pt-5 px-3 pl-sm-5 pr-sm-2">
          <div class="d-sm-flex align-items-end text-center text-sm-left pl-2">
            <div class="mr-sm-n6 pb-5">
              <h2 class="h1 text-sm-nowrap">Ma maisons en 3D</h2>
              <p class="pb-2 mx-auto mx-sm-0" style="max-width: 14rem;">Apprennez à manipuler l'outils 3D.</p>
              <div class="d-inline-block bg-faded-success text-success font-size-sm font-weight-medium rounded-sm px-3 py-2">voir
                nos tutoriels
              </div>
              <br><br>
{{--              <div class="cs-countdown pt-3 h4 justify-content-center justify-content-sm-start" data-countdown="10/01/2021 07:00:00 PM">--}}
{{--                <div class="cs-countdown-days">--}}
{{--                  <span class="cs-countdown-value">0</span><span class="cs-countdown-label font-size-xs text-muted">Days</span>--}}
{{--                </div>--}}
{{--                <div class="cs-countdown-hours">--}}
{{--                  <span class="cs-countdown-value">0</span><span class="cs-countdown-label font-size-xs text-muted">Hours</span>--}}
{{--                </div>--}}
{{--                <div class="cs-countdown-minutes">--}}
{{--                  <span class="cs-countdown-value">0</span><span class="cs-countdown-label font-size-xs text-muted">Mins</span>--}}
{{--                </div>--}}
{{--              </div>--}}
              <a class="btn btn-primary" href="#">lancer l'outils 3D</a>
            </div>
            <div><img src="{{asset('dist/img/demo/shop-homepage/banner.png')}}" alt="Promo banner"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Brands-->
{{--  <section class="container pt-5 mt-3 mt-md-0 pt-md-6 pt-lg-7 pb-md-4">--}}
{{--    <h2 class="mb-5 text-center">Acheter dans un magasin</h2>--}}
{{--    <div class="row">--}}
{{--      <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 box-shadow card-hover py-3 py-sm-4" href="#">--}}
{{--        <div class="card-body px-1 py-0 text-center">--}}
{{--          <div class="cs-swap-image">--}}
{{--            <img class="cs-swap-to" width="150" src="{{asset('dist/img/shop/brands/01_color.png')}}" alt="Brand logo"/><img class="cs-swap-from" width="150" src="{{asset('dist/img/shop/brands/01_gray.png')}}" alt="Brand logo"/>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </a></div>--}}
{{--      <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 box-shadow card-hover py-3 py-sm-4" href="#">--}}
{{--        <div class="card-body px-1 py-0 text-center">--}}
{{--          <div class="cs-swap-image">--}}
{{--            <img class="cs-swap-to" width="150" src="{{asset('dist/img/shop/brands/02_color.png')}}" alt="Brand logo"/><img class="cs-swap-from" width="150" src="{{asset('dist/img/shop/brands/02_gray.png')}}" alt="Brand logo"/>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </a></div>--}}
{{--      <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 box-shadow card-hover py-3 py-sm-4" href="#">--}}
{{--        <div class="card-body px-1 py-0 text-center">--}}
{{--          <div class="cs-swap-image">--}}
{{--            <img class="cs-swap-to" width="150" src="{{asset('dist/img/shop/brands/03_color.png')}}" alt="Brand logo"/><img class="cs-swap-from" width="150" src="{{asset('dist/img/shop/brands/03_gray.png')}}" alt="Brand logo"/>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </a></div>--}}
{{--      <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 box-shadow card-hover py-3 py-sm-4" href="#">--}}
{{--        <div class="card-body px-1 py-0 text-center">--}}
{{--          <div class="cs-swap-image">--}}
{{--            <img class="cs-swap-to" width="150" src="{{asset('dist/img/shop/brands/04_color.png')}}" alt="Brand logo"/><img class="cs-swap-from" width="150" src="{{asset('dist/img/shop/brands/04_gray.png')}}" alt="Brand logo"/>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </a></div>--}}
{{--      <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 box-shadow card-hover py-3 py-sm-4" href="#">--}}
{{--        <div class="card-body px-1 py-0 text-center">--}}
{{--          <div class="cs-swap-image">--}}
{{--            <img class="cs-swap-to" width="150" src="{{asset('dist/img/shop/brands/05_color.png')}}" alt="Brand logo"/><img class="cs-swap-from" width="150" src="{{asset('dist/img/shop/brands/05_gray.png')}}" alt="Brand logo"/>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </a></div>--}}
{{--      <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 box-shadow card-hover py-3 py-sm-4" href="#">--}}
{{--        <div class="card-body px-1 py-0 text-center">--}}
{{--          <div class="cs-swap-image">--}}
{{--            <img class="cs-swap-to" width="150" src="{{asset('dist/img/shop/brands/06_color.png')}}" alt="Brand logo"/><img class="cs-swap-from" width="150" src="{{asset('dist/img/shop/brands/06_gray.png')}}" alt="Brand logo"/>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </a></div>--}}
{{--      <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 box-shadow card-hover py-3 py-sm-4" href="#">--}}
{{--        <div class="card-body px-1 py-0 text-center">--}}
{{--          <div class="cs-swap-image">--}}
{{--            <img class="cs-swap-to" width="150" src="{{asset('dist/img/shop/brands/07_color.png')}}" alt="Brand logo"/><img class="cs-swap-from" width="150" src="{{asset('dist/img/shop/brands/07_gray.png')}}" alt="Brand logo"/>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </a></div>--}}
{{--      <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 box-shadow card-hover py-3 py-sm-4" href="#">--}}
{{--        <div class="card-body px-1 py-0 text-center">--}}
{{--          <div class="cs-swap-image">--}}
{{--            <img class="cs-swap-to" width="150" src="{{asset('dist/img/shop/brands/08_color.png')}}" alt="Brand logo"/><img class="cs-swap-from" width="150" src="{{asset('dist/img/shop/brands/08_gray.png')}}" alt="Brand logo"/>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </a></div>--}}
{{--      <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 box-shadow card-hover py-3 py-sm-4" href="#">--}}
{{--        <div class="card-body px-1 py-0 text-center">--}}
{{--          <div class="cs-swap-image">--}}
{{--            <img class="cs-swap-to" width="150" src="{{asset('dist/img/shop/brands/09_color.png')}}" alt="Brand logo"/><img class="cs-swap-from" width="150" src="{{asset('dist/img/shop/brands/09_gray.png')}}" alt="Brand logo"/>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </a></div>--}}
{{--      <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 box-shadow card-hover py-3 py-sm-4" href="#">--}}
{{--        <div class="card-body px-1 py-0 text-center">--}}
{{--          <div class="cs-swap-image">--}}
{{--            <img class="cs-swap-to" width="150" src="{{asset('dist/img/shop/brands/10_color.png')}}" alt="Brand logo"/><img class="cs-swap-from" width="150" src="{{asset('dist/img/shop/brands/10_gray.png')}}" alt="Brand logo"/>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </a></div>--}}
{{--      <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 box-shadow card-hover py-3 py-sm-4" href="#">--}}
{{--        <div class="card-body px-1 py-0 text-center">--}}
{{--          <div class="cs-swap-image">--}}
{{--            <img class="cs-swap-to" width="150" src="{{asset('dist/img/shop/brands/11_color.png')}}" alt="Brand logo"/><img class="cs-swap-from" width="150" src="{{asset('dist/img/shop/brands/11_gray.png')}}" alt="Brand logo"/>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </a></div>--}}
{{--      <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 box-shadow card-hover py-3 py-sm-4" href="#">--}}
{{--        <div class="card-body px-1 py-0 text-center">--}}
{{--          <div class="cs-swap-image">--}}
{{--            <img class="cs-swap-to" width="150" src="{{asset('dist/img/shop/brands/12_color.png')}}" alt="Brand logo"/><img class="cs-swap-from" width="150" src="{{asset('dist/img/shop/brands/12_gray.png')}}" alt="Brand logo"/>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </a></div>--}}
{{--    </div>--}}
{{--  </section>--}}
  <!-- Reviews-->
  <section class="bg-secondary py-5 py-md-6 mt-4 mt-md-5">
    <div class="container-fluid py-3 py-md-0">
      <h2 class="mb-5 text-center">Avis des Clients</h2>
      <div class="cs-carousel">
        <div class="cs-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16}, &quot;520&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 12}, &quot;860&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 23}, &quot;1080&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 23}, &quot;1380&quot;:{&quot;items&quot;:5, &quot;gutter&quot;: 23}, &quot;1600&quot;:{&quot;items&quot;:6, &quot;gutter&quot;: 23}}}">
          <!-- Review Card-->
          <div class="py-2">
            <div class="card h-100 border-0 box-shadow mx-1">
              <div class="card-body">
                <a class="media align-items-center nav-heading mb-3" href="#"><img width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/01.jpg')}}" alt="Product thumb"/>
                  <div class="media-body font-size-md font-weight-medium pl-2 ml-1">Outdoor HD Cloud Security Camera</div>
                </a>
                <div class="mb-2 pb-1 star-rating">
                  <i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star"></i>
                </div>
                <p class="font-size-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
              </div>
              <footer class="font-size-sm px-4 pb-4">
                <div class="media align-items-center border-top mb-n2 pt-3">
                  <img class="rounded-circle" width="42" src="{{asset('dist/img/testimonials/01.jpg')}}" alt="Emma Brown"/>
                  <div class="media-body text-heading font-weight-medium pl-2 ml-1 mt-n1">Emma Brown</div>
                </div>
              </footer>
            </div>
          </div>
          <!-- From Instagram-->
          <div class="py-2">
            <a class="card h-100 border-0 box-shadow mx-1" href="#"><span class="card-floating-icon"><i class="fe-instagram"></i></span>
              <img class="card-img-top" src="{{asset('dist/img/demo/shop-homepage/instagram/01.jpg')}}" alt="Image"/>
              <footer class="font-size-sm mt-auto py-2 px-4">
                <div class="media align-items-center py-2">
                  <img class="rounded-circle" width="42" src="{{asset('dist/img/testimonials/02.jpg')}}" alt="@morni.janeffel"/>
                  <div class="media-body text-heading font-weight-medium pl-2 ml-1 mt-n1">@morni.janeffel</div>
                </div>
              </footer>
            </a>
          </div>
          <!-- Review Card-->
          <div class="py-2">
            <div class="card h-100 border-0 box-shadow mx-1">
              <div class="card-body">
                <a class="media align-items-center nav-heading mb-3" href="#"><img width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/02.jpg')}}" alt="Product thumb"/>
                  <div class="media-body font-size-md font-weight-medium pl-2 ml-1">Running Sneakers, Sports Collection</div>
                </a>
                <div class="mb-2 pb-1 star-rating">
                  <i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i>
                </div>
                <p class="font-size-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
              </div>
              <footer class="font-size-sm px-4 pb-4">
                <div class="media align-items-center border-top mb-n2 pt-3">
                  <img class="rounded-circle" width="42" src="{{asset('dist/img/testimonials/06.jpg')}}" alt="Edward Chew"/>
                  <div class="media-body text-heading font-weight-medium pl-2 ml-1 mt-n1">Edward Chew</div>
                </div>
              </footer>
            </div>
          </div>
          <!-- From Instagram-->
          <div class="py-2">
            <a class="card h-100 border-0 box-shadow mx-1" href="#"><span class="card-floating-icon"><i class="fe-instagram"></i></span><img class="card-img-top" src="{{asset('dist/img/demo/shop-homepage/instagram/02.jpg')}}" alt="Image"/>
              <footer class="font-size-sm mt-auto py-2 px-4">
                <div class="media align-items-center py-2">
                  <img class="rounded-circle" width="42" src="{{asset('dist/img/testimonials/09.jpg')}}" alt="@jane.palson"/>
                  <div class="media-body text-heading font-weight-medium pl-2 ml-1 mt-n1">@jane.palson</div>
                </div>
              </footer>
            </a></div>
          <!-- Review Card-->
          <div class="py-2">
            <div class="card h-100 border-0 box-shadow mx-1">
              <div class="card-body">
                <a class="media align-items-center nav-heading mb-3" href="#"><img width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/06.jpg')}}" alt="Product thumb"/>
                  <div class="media-body font-size-md font-weight-medium pl-2 ml-1">Wireless Bluetooth Headset</div>
                </a>
                <div class="mb-2 pb-1 star-rating">
                  <i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star"></i>
                </div>
                <p class="font-size-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
              </div>
              <footer class="font-size-sm px-4 pb-4">
                <div class="media align-items-center border-top mb-n2 pt-3">
                  <img class="rounded-circle" width="42" src="{{asset('dist/img/testimonials/03.jpg')}}" alt="Tim Brooks"/>
                  <div class="media-body text-heading font-weight-medium pl-2 ml-1 mt-n1">Tim Brooks</div>
                </div>
              </footer>
            </div>
          </div>
          <!-- From Instagram-->
          <div class="py-2">
            <a class="card h-100 border-0 box-shadow mx-1" href="#"><span class="card-floating-icon"><i class="fe-instagram"></i></span><img class="card-img-top" src="{{asset('dist/img/demo/shop-homepage/instagram/03.jpg')}}" alt="Image"/>
              <footer class="font-size-sm mt-auto py-2 px-4">
                <div class="media align-items-center py-2">
                  <img class="rounded-circle" width="42" src="{{asset('dist/img/testimonials/05.jpg')}}" alt="@sarah.cole"/>
                  <div class="media-body text-heading font-weight-medium pl-2 ml-1 mt-n1">@sarah.cole</div>
                </div>
              </footer>
            </a></div>
          <!-- Review Card-->
          <div class="py-2">
            <div class="card h-100 border-0 box-shadow mx-1">
              <div class="card-body">
                <a class="media align-items-center nav-heading mb-3" href="#"><img width="60" src="{{asset('dist/img/demo/shop-homepage/thumbnails/04.jpg')}}" alt="Product thumb"/>
                  <div class="media-body font-size-md font-weight-medium pl-2 ml-1">Block-colored Hooded Top</div>
                </a>
                <div class="mb-2 pb-1 star-rating">
                  <i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star-filled active"></i><i class="sr-star fe-star"></i>
                </div>
                <p class="font-size-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
              </div>
              <footer class="font-size-sm px-4 pb-4">
                <div class="media align-items-center border-top mb-n2 pt-3">
                  <img class="rounded-circle" width="42" src="{{asset('dist/img/testimonials/04.jpg')}}" alt="Michael Smith"/>
                  <div class="media-body text-heading font-weight-medium pl-2 ml-1 mt-n1">Michael Smith</div>
                </div>
              </footer>
            </div>
          </div>
          <!-- From Instagram-->
          <div class="py-2">
            <a class="card h-100 border-0 box-shadow mx-1" href="#"><span class="card-floating-icon"><i class="fe-instagram"></i></span><img class="card-img-top" src="{{asset('dist/img/demo/shop-homepage/instagram/04.jpg')}}" alt="Image"/>
              <footer class="font-size-sm mt-auto py-2 px-4">
                <div class="media align-items-center py-2">
                  <img class="rounded-circle" width="42" src="{{asset('dist/img/testimonials/02.jpg')}}" alt="@morni.janeffel"/>
                  <div class="media-body text-heading font-weight-medium pl-2 ml-1 mt-n1">@morni.janeffel</div>
                </div>
              </footer>
            </a></div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

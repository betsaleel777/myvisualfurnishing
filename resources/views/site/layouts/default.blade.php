@include('site.site-head')
@include('site.site-header')
<div id="panel">
   @include('flash')
   @yield('content')
</div>
@include('site.site-footer')

@include('site.site-head')
<div id="panel">
    @include('site.site-header')
    @include('flash')
    @yield('content')
    @include('site.site-footer')
</div>
@include('site.site-scripts')

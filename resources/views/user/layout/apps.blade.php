@extends('user.layout.skeletons')

@section('apps')

@include('user.layout.components.navbar1')

<main id="main">
    @yield('contents')
</main>

@include('user.layout.components.footer')

@endsection
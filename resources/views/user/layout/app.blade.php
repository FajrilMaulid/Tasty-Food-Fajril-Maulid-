@extends('user.layout.skeleton')

@section('app')

@include('user.layout.components.navbar')

<main id="main">
    @yield('content')
</main>

@include('user.layout.components.footer')

@endsection
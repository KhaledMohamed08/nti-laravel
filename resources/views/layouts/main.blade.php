@extends('layouts.empty')
@section('body')
    @include('includes.nav')
    <!-- Product List -->
    <div class="container my-3">

        <x-alert />
        {{-- <x-alert></x-alert> --}}

        @yield('content')

    </div>
    @include('includes.footer')
@endsection

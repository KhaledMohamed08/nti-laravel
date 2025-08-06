@include('includes.head')

@include('includes.header')

<section class="container">
    <x-alert />
    @yield('content')
</section>


@include('includes.footer')

@include('includes.foot')

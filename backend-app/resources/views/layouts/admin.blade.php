

@include('layouts.head')
@auth('admin')
@include('layouts.navbar')
@include('layouts.sidebar')
@endauth

@yield('content')

@auth('admin')
@include('layouts.footer')
@endauth
@include('layouts.scripts')

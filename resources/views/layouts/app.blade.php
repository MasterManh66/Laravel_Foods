@include('layouts.header')
    {{-- app.blade.php is the master page --}}
    {{-- index.blade.php is the child page --}}
    {{-- about.blade.php is the child page --}}
    @yield('content')
@include('layouts.footer')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - Mazer Admin Dashboard</title>

    @include('includes.style')
   
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('includes.sidebar')
        </div>

        <div id="main" class='layout-navbar'>
           @include('includes.header')
            <div id="main-content">
                <div class="page-content">
                    @yield('content')
                </div>

                 @include('includes.footer')
            </div>
        </div>
    </div>

    <!-- Scripts -->
     @include('includes.script')

</body>

</html>

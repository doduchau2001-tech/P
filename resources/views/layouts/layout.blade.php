<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    @yield('style')
    @include('layouts.alert')
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        @yield('content_layout')
    </div>
    @yield('script')
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    @yield('style')
</head>

<body>
    @include('layouts.alert')
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        @yield('content_layout')
    </div>
    @yield('script')
</body>

</html>

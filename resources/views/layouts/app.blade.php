<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{settings()->get("org_full_name", $default = "STS Cinema")}}</title>
    <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="{{ asset('storage') }}{{ '/' }}{{ settings()->get('logo') }}"
/>
    @include('layouts.styles')
</head>

<body class="hold-transition sidebar-mini">
    @guest
        @yield('content')
    @else
        <div class="wrapper">
            <x-nav-bar />
            <x-left-sidebar />

            @yield('content')
            <x-right-sidebar />
            <x-admin-footer />
        </div>
    @endguest
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    @include('layouts.script')
    @stack('script')
</body>

</html>

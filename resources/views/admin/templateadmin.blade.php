<!doctype html>
<html class="no-js" lang="en">

@include('admin.includes.header')

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        @include('admin.includes.slidebar')
        <!-- Header top area start-->
        <div class="content-inner-all">
            @include('admin.includes.menubar')
            <!-- Header top area end-->
            <!-- Breadcome start-->
            @yield('content')
            <!-- Transitions End-->
        </div>
    </div>
    <!-- Footer Start-->
    @include('admin.includes.footer')
</body>

</html>

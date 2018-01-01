<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
@include('admin.asset.head')
<body>
<section id="container">
    <!--header start-->
    @include('admin.header.header')
    <!--header end-->
    <!--sidebar start-->
    @include('admin.side-menu.side-menu')
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- //market-->
            @yield('body')
        </section>
        <!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
                <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">Akther Hossain</a></p>
            </div>
        </div>
        <!-- / footer -->
    </section>
    <!--main content end-->
</section>
@include('admin.asset.script')
<!-- //calendar -->
</body>
</html>

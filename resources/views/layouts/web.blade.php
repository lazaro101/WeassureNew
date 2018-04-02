@extends('layouts.header')

@section('title','WeAssure')

@section('maincontent')
<body class="sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-warning fixed-top navbar-transparent" color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/" >
                    <b>WeAssure</b>
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="nowui/assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/Product">
                            <p>Products</p>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="/Gallery">
                            <p>Gallery</p>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="/Update">
                            <p>Updates</p>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="/About">
                            <p>About Us</p>
                        </a>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="wrapper">
        @yield('content')
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="/">
                                WEASSURE
                            </a>
                        </li>
                        <li>
                            <a href="/Product">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="/Gallery">
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a href="/Update">
                                Updates
                            </a>
                        </li>
                        <li>
                            <a href="/About">
                                About Us
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, WEASSURE.COM
                </div>
            </div>
        </footer>
    </div>
</body>
@endsection
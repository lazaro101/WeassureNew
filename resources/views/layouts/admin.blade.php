@extends('layouts.header')

@section('title','Admin')

@section('maincontent')
<body class="sidebar-collapse">
    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent" color-on-scroll="400"> -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/Admin">
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
                        <a class="nav-link" href="/Admin/Employees">
                            <p>Employees</p>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="/Admin/Products">
                            <p>Products</p>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="/Admin/Updates">
                            <p>Updates</p>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="/Admin/Gallery">
                            <p>Gallery</p>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">
                            <p>Logout</p>
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
                            <a href="/Admin">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/Admin/Employees">
                                Employees
                            </a>
                        </li>
                        <li>
                            <a href="/Admin/Products">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="/Admin/Updates">
                                Updates
                            </a>
                        </li>
                        <li>
                            <a href="/Admin/Gallery">
                                Gallery
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
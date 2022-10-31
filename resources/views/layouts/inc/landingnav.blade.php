<header> 
<nav class="navbar landernav navbar-expand-lg ms-auto sticky-top navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="/staticimg/sienslogo2.png/" alt="logo" height="70px" width="190px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <a class="navlinks" href="{{ url('home') }}">
                        <li class="navopts"> 
                            HOME
                        </li>
                    </a>
                    <a class="navlinks" href="{{ url('prodpage') }}">
                    <li class="navopts"> 
                        PRODUCTS
                    </li>
                    </a>
        
                    <a class="navlinks" href="{{ url('/contacts') }}">
                    <li class="navopts"> 
                        CONTACT US
                    </li>
                    </a> 
                    <a class="navlinks" href="{{ url('/aboutus') }}">
                    <li class="navopts"> 
                        ABOUT US
                    </li>
                    </a> 
                    <a class="navlinks" href="">
                    <a class="navlinks" href="{{ url('cart') }}">

                    </a>
                </ul>
            </div>
        </div>
    </nav>
</header>

<header> 
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark clientnave">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/assets/staticimgs/cse.png" alt="logo" height="70px" width="90px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <a class="clientlinks navlinks" href="{{ url('/') }}">
                        <li class="clientnavopts"> 
                            HOME
                        </li>
                    </a>
                    <a class="navlinks clientlinks" href="{{ url('productlist') }}">
                    <li class="clientnavopts"> 
                        PRODUCTS
                    </li>
                    </a>
        
                    <a class="navlinks clientlinks" href="{{ url('/contacts') }}">
                    <li class="clientnavopts"> 
                        CONTACT US
                    </li>
                    </a> 
                    <a class="navlinks clientlinks" href="{{ url('/aboutus') }}">
                    <li class="clientnavopts"> 
                        ABOUT US
                    </li>
                    </a> 
                </ul>
            </div>
        </div>
    </nav>
</header>

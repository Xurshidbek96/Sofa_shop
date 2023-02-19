<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link @yield('home')" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @yield('about')" href="/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @yield('design')" href="/design">Design</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @yield('shop')" href="/shop">Shop</a>
        </li>
        <li class="nav-item @yield('contact')">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <div class="search_icon">
            <ul>
                <li><a href="#"><img src="/front/images/search-icon.png"></a></li>
                <li><a href="#"><img src="/front/images/user-icon.png"></a></li>
            </ul>
        </div>
    </form>
</div>

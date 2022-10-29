<!-- Main Header Area Start Here -->
<header>
    <!-- Header Top Start Here -->
    <div class="header-top-area">
        <div class="container">
            <!-- Header Top Start -->
            <div class="header-top">
                <ul>
                    <li><a href="#">Free Ship từ đơn 49.000Đ</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                </ul>
                <ul>
                    <li><span>Language</span> <a href="#">English<i class="lnr lnr-chevron-down"></i></a>
                        <!-- Dropdown Start -->
                        <ul class="ht-dropdown">
                            <li><a href="#"><img src="/assets_homepage/img/header/1.jpg" alt="language-selector">English</a></li>
                            <li><a href="#"><img src="/assets_homepage/img/header/2.jpg" alt="language-selector">Francis</a></li>
                        </ul>
                        <!-- Dropdown End -->
                    </li>
                    <li><span>Đơn vị tiền tệ</span><a href="#"> VNĐ <i class="lnr lnr-chevron-down"></i></a>
                        <!-- Dropdown Start -->
                        <ul class="ht-dropdown">
                            <li><a href="#">&#36; USD</a></li>
                            <li><a href="#"> € Euro</a></li>
                            <li><a href="#">&#163; Pound Sterling</a></li>
                        </ul>
                        <!-- Dropdown End -->
                    </li>
                    <li>Tài Khoản Của Tôi<i class="lnr lnr-chevron-down"></i>
                        <!-- Dropdown Start -->
                        @if ( Auth::guard('agent')->check())
                            <ul class="ht-dropdown">
                                <li><a href="/agent/logout">Logout</a></li>
                            </ul>
                        @else
                            <ul class="ht-dropdown">
                                <li><a href="/agent/login">Login</a></li>
                                <li><a href="/agent/register">Register</a></li>
                            </ul>
                        @endif

                        <!-- Dropdown End -->
                    </li>
                </ul>
            </div>
            <!-- Header Top End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Top End Here -->
    <!-- Header Middle Start Here -->
    <div class="header-middle ptb-15">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class="col-lg-3 col-md-12">
                    <div class="logo mb-all-30">
                        <a href="http://127.0.0.1:8000/"><img src="/assets_homepage/img/logo/logo.png" alt="logo-image"></a>
                    </div>
                </div>
                <!-- Categorie Search Box Start Here -->
                <div class="col-lg-5 col-md-8 ml-auto mr-auto col-10">
                    <div class="categorie-search-box">
                        <form action="#">
                            <div class="form-group">
                                <select class="bootstrap-select" name="poscats">
                                    <option value="0">Tất cả Danh Mục</option>
                                    <option value="2">Arrivals</option>
                                    <option value="3">Cameras</option>
                                    <option value="4">Cords and Cables</option>
                                    <option value="5">gps accessories</option>
                                    <option value="6">Microphones</option>
                                    <option value="7">Wireless Transmitters</option>
                                    <option value="8">GamePad</option>
                                    <option value="9">cube lifestyle hd</option>
                                    <option value="10">Bags</option>
                                    <option value="11">Bottoms</option>
                                    <option value="12">Shirts</option>
                                    <option value="13">Tailored</option>
                                    <option value="14">Home &amp; Kitchen</option>
                                    <option value="15">Large Appliances</option>
                                    <option value="16">Armchairs</option>
                                    <option value="17">Bunk Bed</option>
                                    <option value="18">Mattress</option>
                                    <option value="19">Sideboard</option>
                                    <option value="20">Small Appliances</option>
                                    <option value="21">Bootees Bags</option>
                                    <option value="22">Jackets</option>
                                    <option value="23">Shelf</option>
                                    <option value="24">Shoes</option>
                                    <option value="25">Phones &amp; Tablets</option>
                                    <option value="26">Tablet</option>
                                    <option value="27">phones</option>
                                </select>
                            </div>
                            <input type="text" name="search" placeholder="Bạn cần tìm...">
                            <button><i class="lnr lnr-magnifier"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Categorie Search Box End Here -->
                <!-- Cart Box Start Here -->
                <div class="col-lg-4 col-md-12">
                    <div class="cart-box mt-all-30">
                        <ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
                            <li><a href="/cart"><i class="lnr lnr-cart"></i><span class="my-cart"><span class="total-pro">2</span><span>cart</span></span></a>
                                <ul class="ht-dropdown cart-box-width" id="cartTop">
                                    <li id="cartTop">
                                        <!-- Cart Box Start -->
                                        <div class="single-cart-box">
                                            <div class="cart-img">
                                                <a href="#"><img src="/assets_homepage/img/products/1.jpg" alt="cart-image"></a>
                                                <span class="pro-quantity">1X</span>
                                            </div>
                                            <div class="cart-content">
                                                <h6><a href="product.html">Printed Summer Red </a></h6>
                                                <span class="cart-price">27.45</span>
                                                <span>Size: S</span>
                                                <span>Color: Yellow</span>
                                            </div>
                                            <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                        </div>
                                        <!-- Cart Box End -->
                                        <!-- Cart Footer Inner Start -->
                                        <div class="cart-footer">
                                           <ul class="price-content">
                                               <li>Subtotal <span>$57.95</span></li>
                                               <li>Shipping <span>$7.00</span></li>
                                               <li>Taxes <span>$0.00</span></li>
                                               <li>Total <span>$64.95</span></li>
                                           </ul>
                                            <div class="cart-actions text-center">
                                                <a class="cart-checkout" href="checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                        <!-- Cart Footer Inner End -->
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="lnr lnr-heart"></i><span class="my-cart"><span>Wish</span><span>list (0)</span></span></a>
                            </li>
                            @if (Auth::guard('agent')->check())
                                <li><a href="#"><i class="lnr lnr-user"></i>
                                        <span class="my-cart">
                                            <span>
                                                <strong>{{ Auth::guard('agent')->user()->ho_va_ten }}</strong>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="/agent/login"><i class="lnr lnr-user"></i>
                                    <span class="my-cart align-middle">Sign In</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- Cart Box End Here -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Middle End Here -->
    <!-- Header Bottom Start Here -->
    <div class="header-bottom  header-sticky">
        <div class="container">
            <div class="row align-items-center">
                 <div class="col-xl-3 col-lg-4 col-md-6 vertical-menu d-none d-lg-block">
                    <span class="categorie-title">Shop by Categories </span>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 ">
                    <nav class="d-none d-lg-block">
                        <ul class="header-bottom-list d-flex">
                            <li class="active"><a href="/">Home<i class="fa fa-angle-down"></i></a>
                            </li>
                            @foreach ($menuCha as $value_cha)
                            <li>
                                <a href="/danh-muc/{{$value_cha->slug_danh_muc}}-post{{ $value_cha->id }}">{{ $value_cha->ten_danh_muc }}</a>
                                <ul class="ht-dropdown">
                                    @foreach ($menuCon as $value_con)
                                        @if($value_con->id_danh_muc_cha == $value_cha->id)
                                            <li><a href="/danh-muc/{{ $value_con->id }}">{{ $value_con->ten_danh_muc }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach

                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </nav>
                    <div class="mobile-menu d-block d-lg-none">
                        <nav>
                            <ul>
                                <li><a href="index.html">home</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul>
                                        <li><a href="index.html">Home Version 1</a></li>
                                        <li><a href="index-2.html">Home Version 2</a></li>
                                        <li><a href="index-3.html">Home Version 3</a></li>
                                        <li><a href="index-4.html">Home Version 4</a></li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                                <li><a href="shop.html">shop</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="product.html">product details</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="single-blog.html">blog details</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="#">pages</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="login.html">sign in</a></li>
                                        <li><a href="forgot-password.html">forgot password</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="https://www.facebook.com/quan.ho.66">about us</a></li>
                                <li><a href="contact.html">contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Bottom End Here -->
    <!-- Mobile Vertical Menu Start Here -->
    <div class="container d-block d-lg-none">
        <div class="vertical-menu mt-30">
            <span class="categorie-title mobile-categorei-menu">Shop by Categories</span>
            <nav>
                <div id="cate-mobile-toggle" class="category-menu sidebar-menu sidbar-style mobile-categorei-menu-list menu-hidden ">
                    <ul>
                        <li class="has-sub"><a href="#">Automotive & Motorcycle </a>
                            <ul class="category-sub">
                                <li class="has-sub"><a href="shop.html">Office chair</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">Bibendum Cursus</a></li>
                                        <li><a href="shop.html">Dignissim Turpis</a></li>
                                        <li><a href="shop.html">Dining room</a></li>
                                        <li><a href="shop.html">Dining room</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="shop.html">Purus Lacus</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">Magna Pellentesq</a></li>
                                        <li><a href="shop.html">Molestie Tortor</a></li>
                                        <li><a href="shop.html">Vehicula Element</a></li>
                                        <li><a href="shop.html">Sagittis Blandit</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">gps accessories</a></li>
                                <li><a href="shop.html">Microphones</a></li>
                                <li><a href="shop.html">Wireless Transmitters</a></li>
                            </ul>
                            <!-- category submenu end-->
                        </li>
                        <li class="has-sub"><a href="#">Sports & Outdoors</a>
                            <ul class="category-sub">
                                <li class="menu-tile">Cameras</li>
                                <li><a href="shop.html">Cords and Cables</a></li>
                                <li><a href="shop.html">gps accessories</a></li>
                                <li><a href="shop.html">Microphones</a></li>
                                <li><a href="shop.html">Wireless Transmitters</a></li>
                            </ul>
                            <!-- category submenu end-->
                        </li>
                        <li class="has-sub"><a href="#">Home & Kitchen</a>
                            <ul class="category-sub">
                                <li><a href="shop.html">kithen one</a></li>
                                <li><a href="shop.html">kithen two</a></li>
                                <li><a href="shop.html">kithen three</a></li>
                                <li><a href="shop.html">kithen four</a></li>
                            </ul>
                            <!-- category submenu end-->
                        </li>
                        <li class="has-sub"><a href="#">Phones & Tablets</a>
                            <ul class="category-sub">
                                <li><a href="shop.html">phone one</a></li>
                                <li><a href="shop.html">Tablet two</a></li>
                                <li><a href="shop.html">Tablet three</a></li>
                                <li><a href="shop.html">phone four</a></li>
                            </ul>
                            <!-- category submenu end-->
                        </li>
                        <li class="has-sub"><a href="#">TV & Video</a>
                            <ul class="category-sub">
                                <li><a href="shop.html">smart tv</a></li>
                                <li><a href="shop.html">real video</a></li>
                                <li><a href="shop.html">Microphones</a></li>
                                <li><a href="shop.html">Wireless Transmitters</a></li>
                            </ul>
                            <!-- category submenu end-->
                        </li>
                        <li><a href="#">Beauty</a> </li>
                        <li><a href="#">Sport & tourisim</a></li>
                        <li><a href="#">Meat & Seafood</a></li>
                    </ul>
                </div>
                <!-- category-menu-end -->
            </nav>
        </div>
    </div>
    <!-- Mobile Vertical Menu Start End -->
</header>
<!-- Main Header Area End Here -->

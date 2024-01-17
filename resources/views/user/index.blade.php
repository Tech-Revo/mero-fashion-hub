
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
 
     <title>Ekka - Ecommerce HTML Template + Admin Dashboard.</title>
     <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
     <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
     <meta name="author" content="ashishmaraviya">
     
    <!-- site Favicon -->
    <link rel="icon" href="assets/images/favicon/favicon-2.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon-2.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon-2.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{url('assets/css/ecicons.min.css')}}" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{url('assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/countdownTimer.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/slick.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}" />

    <!-- Main Style -->
    <link rel="stylesheet" href="{{url('assets/css/user-style.css')}}" />
    
</head>
<body>
    <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header start  -->
    <header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top Message Start -->
                    <div class="col header-top-left col-md-5">
                        <div class="header-top-message">
                            Free Shipping On All Order Over $100 Code : NEW
                        </div>
                    </div>
                    <!-- Header Top Message End -->
                    <!-- Header Top Language Currency -->
                    <div class="col header-top-right d-none d-lg-block col-md-7">
                        <div class="header-top-right-inner d-flex justify-content-end">
                            <div class="header-top-link">
                                <a href="track-order.html">Track Order</a>
                            </div>
                            <div class="header-top-link">
                                <a href="about-us.html">About</a>
                            </div>
                            <div class="header-top-link">
                                <a href="contact-us.html">Contact</a>
                            </div>
                            <div class="header-top-link">
                                <a href="faq.html">Help</a>
                            </div>
                            <!-- Currency Start -->
                            <div class="header-top-lan-curr header-top-curr dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i
                                        class="ecicon eci-angle-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                    <li><a class="dropdown-item" href="#">EUR €</a></li>
                                </ul>
                            </div>
                            <!-- Currency End -->
                            <!-- Language Start -->
                            <div class="header-top-lan-curr header-top-lan dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown">Country <i
                                        class="ecicon eci-angle-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Italiano</a></li>
                                </ul>
                            </div>
                            <!-- Language End -->
                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col header-top-res d-lg-none">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fi-rr-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="register.html">Register</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="login.html">Login</a></li>
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header Cart Start -->
                            <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><i class="fi-rr-heart"></i></div>
                                <span class="ec-header-count ec-wishlist-count">4</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header Cart Start -->
                            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><i class="fi-rr-shopping-basket"></i></div>
                                <span class="ec-header-count ec-cart-count">3</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <i class="ecicon eci-bars"></i>
                            </a>
                            <!-- Header menu End -->
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center ec-header-logo">
                            <div class="header-logo">
                                <a href="index.html"><img src="assets/images/logo/logo-2.png" alt="Site Logo" /><img
                                        class="dark-logo" src="assets/images/logo/dark-logo-2.png" alt="Site Logo"
                                        style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center ec-header-search">
                            <div class="header-search">
                                <form class="ec-search-group-form" action="#">
                                    <input class="form-control" placeholder="Search" type="text">
                                    <div class="ec-search-select-inner">
                                        <select name="ec-search-cat">
                                            <option selected disabled>All Category</option>
                                            <option value="cloths">Cloths</option>
                                            <option value="bag">Bag</option>
                                            <option value="shoes">Shoes</option>
                                        </select>
                                    </div>
                                    <button class="search_submit" type="submit"><i class="ecicon eci-search"
                                            aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center">
                            <div class="ec-header-bottons">
                                <!-- Header User Start -->
                                <div class="ec-header-user dropdown">
                                    <button class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fi-rr-user"></i>
                                        <span class="ec-btn-title">My Account</span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="register.html">Register</a></li>
                                        <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                        <li><a class="dropdown-item" href="login.html">Login</a></li>
                                    </ul>
                                </div>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon"><i class="fi-rr-heart"></i><span
                                            class="ec-header-count ec-wishlist-count">0</span></div>
                                    <span class="ec-btn-title">wishlist</span>
                                </a>
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                    <div class="header-icon"><i
                                        class="fi-rr-shopping-basket"></i><span
                                            class="ec-header-count ec-cart-count">3</span></div>
                                    <span class="ec-btn-title">Cart</span>
                                </a>
                                <!-- Header Cart End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">

                    <!-- Ec Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo/logo-2.png" alt="Site Logo" /><img
                                    class="dark-logo" src="assets/images/logo/dark-logo-2.png" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col align-self-center ec-header-search">
                        <div class="header-search">
                            <form class="ec-search-group-form" action="#">
                                <input class="form-control" placeholder="Search" type="text">
                                <div class="ec-search-select-inner">
                                    <select name="ec-search-cat">
                                        <option selected disabled>All Category</option>
                                        <option value="cloths">Cloths</option>
                                        <option value="bag">Bag</option>
                                        <option value="shoes">Shoes</option>
                                    </select>
                                </div>
                                <button class="search_submit" type="submit"><i class="ecicon eci-search"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->

        <!-- EC Main Menu Start -->
        <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="ec-main-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li class="dropdown position-static"><a href="javascript:void(0)">Categories</a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Classic
                                                        Variation</a></li>
                                                <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a>
                                                </li>
                                                <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a>
                                                </li>
                                                <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a>
                                                </li>
                                                <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a>
                                                </li>
                                                <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Classic
                                                        Variation</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-3.html">Banner left sidebar 3
                                                        column</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-4.html">Banner left sidebar 4
                                                        column</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-3.html">Banner right sidebar
                                                        3 column</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-4.html">Banner right sidebar
                                                        4 column</a></li>
                                                <li><a href="shop-banner-full-width.html">Banner Full width 4 column</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Columns
                                                        Variation</a></li>
                                                <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                                <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">List Variation</a>
                                                </li>
                                                <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                                <li><a href="shop-list-banner-left-sidebar.html">Banner left sidebar</a>
                                                </li>
                                                <li><a href="shop-list-banner-right-sidebar.html">Banner right
                                                        sidebar</a></li>
                                                <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="ec-main-banner w-100">
                                                <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img
                                                            class="img-responsive"
                                                            src="{{url('assets/img/5.jpg')}}" alt=""></a>
                                                </li>
                                                <li><a class="p-0" href="shop-left-sidebar-col-4.html"><img
                                                            class="img-responsive"
                                                            src="{{url('assets/img/menu-banner/6.jpg')}}" alt=""></a>
                                                </li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-3.html"><img
                                                            class="img-responsive"
                                                            src="assets/images/menu-banner/7.jpg" alt=""></a>
                                                </li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-4.html"><img
                                                            class="img-responsive"
                                                            src="{{url('assets/img/8.jpg')}}" alt=""></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Products</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product page
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                                <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product 360
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                                <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product video
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-video-left-sidebar.html">Video left sidebar</a>
                                                </li>
                                                <li><a href="product-video-right-sidebar.html">Video right sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product
                                                gallery
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-gallery-left-sidebar.html">Gallery left sidebar</a>
                                                </li>
                                                <li><a href="product-gallery-right-sidebar.html">Gallery right
                                                        sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product-full-width.html">Product full width</a></li>
                                        <li><a href="product-360-full-width.html">360 full width</a></li>
                                        <li><a href="product-video-full-width.html">Video full width</a></li>
                                        <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="terms-condition.html">Terms Condition</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span class="main-label-note-new" data-toggle="tooltip"
                                        title="NEW"></span><a href="javascript:void(0)">Others</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                                Confirmation
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a></li>
                                                <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a></li>
                                                <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a></li>
                                                <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a></li>
                                                <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail Reset
                                                password
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-forgot-password-1.html">Reset password 1</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-2.html">Reset password 2</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-3.html">Reset password 3</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-4.html">Reset password 4</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-5.html">Reset password 5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                                Promotional
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-offers-1.html">Offer mail 1</a></li>
                                                <li><a href="email-template-offers-2.html">Offer mail 2</a></li>
                                                <li><a href="email-template-offers-3.html">Offer mail 3</a></li>
                                                <li><a href="email-template-offers-4.html">Offer mail 4</a></li>
                                                <li><a href="email-template-offers-5.html">Offer mail 5</a></li>
                                                <li><a href="email-template-offers-6.html">Offer mail 6</a></li>
                                                <li><a href="email-template-offers-7.html">Offer mail 7</a></li>
                                                <li><a href="email-template-offers-8.html">Offer mail 8</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-hot"></span>
                                            <a href="javascript:void(0)">Vendor account
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                                <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                                <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                                <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-trending"></span>
                                            <a href="javascript:void(0)">User account
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="user-profile.html">User Profile</a></li>
                                                <li><a href="user-history.html">History</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="track-order.html">Track Order</a></li>
                                                <li><a href="user-invoice.html">Invoice</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Construction
                                                pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="404-error-page.html">404 error page</a></li>
                                                <li><a href="under-maintenance.html">maintanence page</a></li>
                                                <li><a href="coming-soon.html">Coming soon page</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-new"></span>
                                            <a href="javascript:void(0)">Vendor Catalog
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                                <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                        <li><a href="blog-detail-left-sidebar.html">detail left sidebar</a></li>
                                        <li><a href="blog-detail-right-sidebar.html">detail right sidebar</a></li>
                                        <li><a href="blog-full-width.html">full width</a></li>
                                        <li><a href="blog-detail-full-width.html">detail full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                                    <ul class="sub-menu">
                                        <li><a href="elemets-products.html">Products</a></li>
                                        <li><a href="elemets-typography.html">Typography</a></li>
                                        <li><a href="elemets-title.html">Titles</a></li>
                                        <li><a href="elemets-categories.html">Categories</a></li>
                                        <li><a href="elemets-buttons.html">Buttons</a></li>
                                        <li><a href="elemets-tabs.html">Tabs</a></li>
                                        <li><a href="elemets-accordions.html">Accordions</a></li>
                                        <li><a href="elemets-blog.html">Blogs</a></li>
                                    </ul>
                                </li>
                                <li><a href="offer.html">Hot Offers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
        <!-- Ekka Menu Start -->
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="index.html">Home</a></li>

                        <li><a href="javascript:void(0)">Categories</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a></li>
                                        <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a></li>
                                        <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a></li>
                                        <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a></li>
                                        <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-banner-left-sidebar-col-3.html">Banner left sidebar 3
                                                column</a></li>
                                        <li><a href="shop-banner-left-sidebar-col-4.html">Banner left sidebar 4
                                                column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-3.html">Banner right sidebar 3
                                                column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-4.html">Banner right sidebar 4
                                                column</a></li>
                                        <li><a href="shop-banner-full-width.html">Banner Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Columns Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                        <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">List Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                        <li><a href="shop-list-banner-left-sidebar.html">Banner left sidebar</a></li>
                                        <li><a href="shop-list-banner-right-sidebar.html">Banner right sidebar</a></li>
                                        <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                    </ul>
                                </li>
                                <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img class="img-responsive"
                                            src="{{url('assets/img/5.jpg')}}" alt=""></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Products</a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">Product page</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                        <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product 360</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                        <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product vodeo</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-video-left-sidebar.html">vodeo left sidebar</a></li>
                                        <li><a href="product-video-right-sidebar.html">vodeo right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product gallery</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-gallery-left-sidebar.html">Gallery left sidebar</a></li>
                                        <li><a href="product-gallery-right-sidebar.html">Gallery right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-full-width.html">Product full width</a></li>
                                <li><a href="product-360-full-width.html">360 full width</a></li>
                                <li><a href="product-video-full-width.html">Video full width</a></li>
                                <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Others</a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">Mail Confirmation</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a></li>
                                        <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a></li>
                                        <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a></li>
                                        <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a></li>
                                        <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Mail Reset password</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-forgot-password-1.html">Reset password 1</a></li>
                                        <li><a href="email-template-forgot-password-2.html">Reset password 2</a></li>
                                        <li><a href="email-template-forgot-password-3.html">Reset password 3</a></li>
                                        <li><a href="email-template-forgot-password-4.html">Reset password 4</a></li>
                                        <li><a href="email-template-forgot-password-5.html">Reset password 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Mail Promotional</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-offers-1.html">Offer Mail 1</a></li>
                                        <li><a href="email-template-offers-2.html">Offer Mail 2</a></li>
                                        <li><a href="email-template-offers-3.html">Offer Mail 3</a></li>
                                        <li><a href="email-template-offers-4.html">Offer Mail 4</a></li>
                                        <li><a href="email-template-offers-5.html">Offer Mail 5</a></li>
                                        <li><a href="email-template-offers-6.html">Offer Mail 6</a></li>
                                        <li><a href="email-template-offers-7.html">Offer Mail 7</a></li>
                                        <li><a href="email-template-offers-8.html">Offer Mail 8</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Vendor Account Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                        <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                        <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                        <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">User Account Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="user-profile.html">User Profile</a></li>
                                        <li><a href="user-history.html">User History</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="user-invoice.html">User Invoice</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Construction Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="404-error-page.html">404 Error Page</a></li>
                                        <li><a href="under-maintenance.html">Maintenance Page</a></li>
                                        <li><a href="coming-soon.html">Comming Soon Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Vendor Catalog Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                        <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="compare.html">Compare</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="track-order.html">Track Order</a></li>
                                <li><a href="terms-condition.html">Terms Condition</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="blog-detail-left-sidebar.html">Blog detail left sidebar</a></li>
                                <li><a href="blog-detail-right-sidebar.html">Blog detail right sidebar</a></li>
                                <li><a href="blog-full-width.html">Blog full width</a></li>
                                <li><a href="blog-detail-full-width.html">Blog detail full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                            <ul class="sub-menu">
                                <li><a href="elemets-products.html">Products</a></li>
                                <li><a href="elemets-typography.html">Typography</a></li>
                                <li><a href="elemets-title.html">Titles</a></li>
                                <li><a href="elemets-categories.html">Categories</a></li>
                                <li><a href="elemets-buttons.html">Buttons</a></li>
                                <li><a href="elemets-tabs.html">Tabs</a></li>
                                <li><a href="elemets-accordions.html">Accordions</a></li>
                                <li><a href="elemets-blog.html">Blogs</a></li>
                            </ul>
                        </li>
                        <li><a href="offer.html">Hot Offers</a></li>
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <div class="header-top-lan-curr">
                        <!-- Language Start -->
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div>
                        <!-- Language End -->
                        <!-- Currency Start -->
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div>
                        <!-- Currency End -->
                    </div>
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>

        <!-- Ekka Menu End -->
    </header>
    <!-- Header End  -->

    <!-- Ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="assets/images/product-image/6_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="single-product-left-sidebar.html" class="cart_pro_title">Unisex classic tee</a>
                            <span class="cart-price"><span>$99.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="assets/images/product-image/3_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Leather purse for women</a>
                            <span class="cart-price"><span>$85.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="assets/images/product-image/4_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Woolen hat for men</a>
                            <span class="cart-price"><span>$130.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Ekka Cart End -->

    <!-- Main Slider Start -->
    <div class="ec-main-slider section ">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex slide-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Women Fashion</h2>
                                    <h1 class="ec-slide-title">Top New Winter <br>Collection</h1>
                                    <p>Get it form 50% off</p>
                                    <a href="#" class="btn btn-lg btn-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex slide-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Men's Fashion</h2>
                                    <h1 class="ec-slide-title">Top New summer <br>Collection</h1>
                                    <p>Get it form 50% off</p>
                                    <a href="#" class="btn btn-lg btn-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!--  category Section Start -->
    <section class="section ec-category-section section-space-mb">
        <div class="container">
            <div class="row">
                <div class="ec_cat_slider">
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <h2 class="d-none">Category</h2>
                                <div class="ec-cat-image">
                                    <i class="fi-rr-laptop"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Laptops & PC</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="ec-cat-image">
                                    <i class="fi-rr-stopwatch"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Smartwatches</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="ec-cat-image">
                                    <i class="fi-rr-camera"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Cameras</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="ec-cat-image">
                                    <i class="fi-rr-gamepad"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Console Games</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="ec-cat-image">
                                    <i class="fi-rr-headset"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Headphones</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="ec-cat-image">
                                    <i class="fi-rr-video-camera"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Virtual Reality</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="ec-cat-image">
                                    <i class="fi-rr-camera"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Cameras</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category Section End -->

    <!-- ec Banner Section Start -->
    <section class="ec-banner section section-space-p">
        <h2 class="d-none">Banner</h2>
        <div class="container">
            <div class="row">
                <div class="ec-banner-bottom">
                    <div class="ec-banner-inner">
                        <div class="ec-banner-block ec-banner-block-4 mar-b-30">
                            <div class="banner-block">
                                <img src="{{url('assets/img/banner/13.jpg')}}" alt="" />
                                <div class="banner-content">
                                    <div class="banner-text">
                                        <span class="ec-banner-discount">Big Discount</span>
                                        <span class="ec-banner-title">20% Off</span>
                                        <span class="ec-banner-stitle">Men shoes collection</span>
                                    </div>
                                    <span class="ec-banner-btn"><a href="shop-left-sidebar-col-3.html">Shop Now</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="ec-banner-block ec-banner-block-5">
                            <div class="banner-block">
                                <img src="{{url('assets/img/banner/14.jpg')}}" alt="" />
                                <div class="banner-content">
                                    <div class="banner-text">
                                        <span class="ec-banner-discount">Big Discount</span>
                                        <span class="ec-banner-title">40% Off</span>
                                        <span class="ec-banner-stitle">Women jacket collection</span>
                                    </div>
                                    <span class="ec-banner-btn"><a href="shop-left-sidebar-col-3.html">Shop Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ec Banner Section End -->

    <!-- Trending Item Start -->
    <section class="section ec-trend-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-title">Trending Item</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-trend-slider">
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/1_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/1_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy teddybear</a></h5>
                                <span class="ec-price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/1_1.jpg"
                                                    data-src-hover="assets/images/product-image/1_1.jpg"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#be7a50;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/1_2.jpg"
                                                    data-src-hover="assets/images/product-image/1_2.jpg"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#bd4e6f;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/1_3.jpg"
                                                    data-src-hover="assets/images/product-image/1_3.jpg"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#528fb7;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/1_4.jpg"
                                                    data-src-hover="assets/images/product-image/1_4.jpg"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#56a58e;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <ul class="ec-opt-size">
                                            <li><a href="#" class="ec-opt-sz" data-old="$470.00" data-new="$419.00"
                                                    data-tooltip="Large">L</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/2_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/2_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Gym backpack mens</a></h5>
                                <span class="ec-price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/2_2.jpg"
                                                    data-src-hover="assets/images/product-image/2_2.jpg"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#e2a100;"></span></a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <ul class="ec-opt-size">
                                            <li><a href="#" class="ec-opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$470.00" data-new="$419.00"
                                                    data-tooltip="Large">L</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/3_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/3_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Leather purse for women</a></h5>
                                <span class="ec-price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/3_1.jpg"
                                                    data-src-hover="assets/images/product-image/3_1.jpg"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#86c1f5;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/3_2.jpg"
                                                    data-src-hover="assets/images/product-image/3_2.jpg"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#71d6c8;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/3_3.jpg"
                                                    data-src-hover="assets/images/product-image/3_3.jpg"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#81d48e;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/3_4.jpg"
                                                    data-src-hover="assets/images/product-image/3_4.jpg"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#e6b87d;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz" data-old="$450.00"
                                                    data-new="$399.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">M</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/4_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/4_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Men's wool hat with brim</a></h5>
                                <span class="ec-price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/4_1.jpg"
                                                    data-src-hover="assets/images/product-image/4_1.jpg"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#b48059;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/4_2.jpg"
                                                    data-src-hover="assets/images/product-image/4_2.jpg"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#71a06b;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/4_3.jpg"
                                                    data-src-hover="assets/images/product-image/4_3.jpg"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#64c2da;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/4_4.jpg"
                                                    data-src-hover="assets/images/product-image/4_4.jpg"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#9b6cc2;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz" data-old="$450.00"
                                                    data-new="$399.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">M</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/5_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/5_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens leather belt</a></h5>
                                <span class="ec-price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{url('assets/img/products/5_1.jpg')}}"
                                                    data-src-hover="{{url('assets/img/products/5_1.jpg')}}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#272727;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{url('assets/img/products/5_2.jpg')}}"
                                                    data-src-hover="{{url('assets/img/products/5_2.jpg')}}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#533838;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz" data-old="$450.00"
                                                    data-new="$399.00" data-tooltip="Small">34</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">36</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/6_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/6_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens plain t-shirt</a></h5>
                                <span class="ec-price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/6_1.jpg"
                                                    data-src-hover="assets/images/product-image/6_1.jpg"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#acbadf;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/6_2.jpg"
                                                    data-src-hover="assets/images/product-image/6_2.jpg"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#74c1c4;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz" data-old="$450.00"
                                                    data-new="$399.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$470.00" data-new="$419.00"
                                                    data-tooltip="Large">L</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$480.00" data-new="$429.00"
                                                    data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/7_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/7_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens fashion cotton shirt</a></h5>
                                <span class="ec-price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/7_1.jpg"
                                                    data-src-hover="assets/images/product-image/7_1.jpg"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#68b180;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/7_2.jpg"
                                                    data-src-hover="assets/images/product-image/7_2.jpg"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#a373da;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz" data-old="$450.00"
                                                    data-new="$399.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$470.00" data-new="$419.00"
                                                    data-tooltip="Large">L</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$480.00" data-new="$429.00"
                                                    data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/8_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/8_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Boy smart watch</a></h5>
                                <span class="ec-price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/8_2.jpg"
                                                    data-src-hover="assets/images/product-image/8_2.jpg"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#adadad;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/8_3.jpg"
                                                    data-src-hover="assets/images/product-image/8_3.jpg"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#d1b5d0;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/8_4.jpg"
                                                    data-src-hover="assets/images/product-image/8_4.jpg"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#91a7e4;"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/9_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/9_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Boy Sport shoes Fashion</a></h5>
                                <span class="ec-price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/9_1.jpg"
                                                    data-src-hover="assets/images/product-image/9_1.jpg"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#5d7bff;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/9_2.jpg"
                                                    data-src-hover="assets/images/product-image/9_2.jpg"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#a3d3ff;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/9_3.jpg"
                                                    data-src-hover="assets/images/product-image/9_3.jpg"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#7dffc2;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assets/images/product-image/9_4.jpg"
                                                    data-src-hover="assets/images/product-image/9_4.jpg"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#835f5f;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz" data-old="$450.00"
                                                    data-new="$399.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$460.00" data-new="$409.00"
                                                    data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$470.00" data-new="$419.00"
                                                    data-tooltip="Large">L</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$480.00" data-new="$429.00"
                                                    data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Item end -->

    <!--  offer Section Start -->
    <section class="section ec-offer-section section-space-mt section-space-mb">
        <h2 class="d-none">Offer</h2>
        <img src="{{url('assets/img/offer_bg_2.jpg')}}" alt="" class="offer_bg" />
        <div class="ec-offer-inner">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center ec-offer-content">
                    <h2 class="ec-offer-stitle">Style Of The Year</h2>
                    <h2 class="ec-offer-title">Trading Offer Sale</h2>
                    <span class="ec-offer-desc">New Product Purchase Up To 50% Off All Now Fast Shopping</span>
                    <span class="ec-offer-btn"><a href="#" class="btn btn-lg btn-primary">Shop Now</a></span>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-title">Exclusive Products</h2>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center mb-3">
                    <ul class="ec-pro-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                href="#tab-pro-new-arrivals">New Arrivals</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-pro-special-offer">Special Offer</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-best-sellers">Best
                                Sellers</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-new-arrivals">
                            <div class="row">
                               
                              
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{url('assets/img/products/11_2.jpg')}}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{url('assets/img/products/11_2.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Smart air pods pro</a></h5>
                                            <span class="ec-price">
                                                <span class="new-price">$75.00</span>
                                                <span class="old-price">$99.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{url('assets/img/products/11_2.jpg')}}"
                                                                data-src-hover="{{url('assets/img/products/11_2.jpg')}}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#5e6778;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{url('assets/img/products/11_2.jpg')}}"
                                                                data-src-hover="{{url('assets/img/products/11_2.jpg')}}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#d38d85;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{url('assets/img/products/11_2.jpg')}}"
                                                                data-src-hover="{{url('assets/img/products/11_2.jpg')}}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#c7b899;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{url('assets/img/products/11_2.jpg')}}"
                                                                data-src-hover="{{url('assets/img/products/11_2.jpg')}}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#d3d3d3;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <!-- ec 1st Product tab end -->

                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-special-offer">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{url('assets/img/products/5_2.jpg')}}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{url('assets/img/products/5_2.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-15%</span>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Leather satchel for womens</a></h5>
                                            <span class="ec-price">
                                                <span class="new-price">$62.00</span>
                                                <span class="old-price">$78.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{url('assets/img/products/5_2.jpg')}}"
                                                                data-src-hover="{{url('assets/img/products/5_2.jpg')}}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#6a8b36;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{url('assets/img/products/5_2.jpg')}}"
                                                                data-src-hover="{{url('assets/img/products/5_2.jpg')}}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#b9754f;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{url('assets/img/products/5_2.jpg')}}"
                                                                data-src-hover="{{url('assets/img/products/5_2.jpg')}}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#bd669d;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{url('assets/img/products/5_2.jpg')}}"
                                                                data-src-hover="{{url('assets/img/products/5_2.jpg')}}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#8e6db7;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$78.00" data-new="$62.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$95.00"
                                                                data-new="$70.00" data-tooltip="Medium">M</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                
                                
                            </div>
                        </div>
                        <!-- ec 2nd Product tab end -->


                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-best-sellers">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{url('assets/img/products/1_2.jpg')}}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{url('assets/img/products/1_2.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-30%</span>
                                                <span class="flags">
                                                    <span class="sale">On Sale</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Boy shirt Plain fashion</a></h5>
                                            <span class="ec-price">
                                                <span class="new-price">$399.00</span>
                                                <span class="old-price">$450.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{url('assets/img/products/1_2.jpg')}}"
                                                                data-src-hover="{{url('assets/img/products/1_2.jpg')}}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fc0404;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{url('assets/img/products/1_2.jpg')}}"
                                                                data-src-hover="{{url('assets/img/products/1_2.jpg')}}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#dadb10;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{url('assets/img/products/1_2.jpg')}}"
                                                                data-src-hover="{{url('assets/img/products/1_2.jpg')}}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#d105c6;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{url('assets/img/products/1_2.jpg')}}"
                                                                data-src-hover="{{url('assets/img/products/1_2.jpg')}}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#02ae0c;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$450.00" data-new="$399.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$460.00"
                                                                data-new="$409.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$470.00"
                                                                data-new="$419.00" data-tooltip="Large">L</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$480.00"
                                                                data-new="$429.00" data-tooltip="Extra Large">XL</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                               
                                
                                
                                
                            </div>
                        </div>
                        <!-- ec 3rd Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->

    

    <!--  services Section Start -->
    <section class="section ec-services-section section-space-p">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-4">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-truck-moving"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>Free Shipping</h2>
                            <p>Lorem is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-4">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-hand-holding-seeding"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>24 / 7 Online Support</h2>
                            <p>Lorem is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-4">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-donate"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>Money back</h2>
                            <p>Lorem is simply dummy text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->

  

    

  

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/2_1.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/2_2.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/2_3.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/2_2.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/2_2.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/2_1.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/2_2.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/2_3.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/2_2.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/2_3.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Trainers GYM Backpack</a></h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="old-price">$100.00</span>
                                    <span class="new-price">$80.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-variation-content">
                                            <ul>
                                                <li><span style="background-color:#696d62;"></span></li>
                                                <li><span style="background-color:#d73808;"></span></li>
                                                <li><span style="background-color:#577023;"></span></li>
                                                <li><span style="background-color:#2ea1cd;"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ec-pro-variation-inner ec-pro-variation-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
                                            <ul>
                                                <li><span>S</span></li>
                                                <li><span>M</span></li>
                                                <li><span>L</span></li>
                                                <li><span>XL</span></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    

    <!-- Add to Cart successfully toast Start -->
    <div id="addtocart_toast" class="addtocart_toast">
        <div class="desc">You Have Add To Cart Successfully</div>
    </div>
    <div id="wishlist_toast" class="wishlist_toast">
        <div class="desc">You Have Add To Wishlist Successfully</div>
    </div>
    <!-- Add to Cart successfully toast end -->

    <!-- Chat Boat -->
        <!-- <div class="dim"></div> -->
        <div class="ec-chat animate__animated animate__fadeOutRight">
            <div class="ec-dim"></div>
            <div class="row ec-setuser">
                <div class="col-md-12 p-0">
                    <p class="welcome-text"><b>Hi John! </b><br/> Please fill out the form below to start chatting.</p>
                </div>
                <div class="col-md-12 p-0">
                    <div class="form-group">
                        <input type="text" class="ec-form form-control username" maxlength=20 placeholder="Name..">
                    </div>
                </div>
                <div class="col-md-12 p-0">
                    <div class="form-group">
                        <input type="email" class="ec-form form-control useremail" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-12 p-0">
                    <select class="ec-form form-control select2_el select2-hidden-accessible userreson"
                        data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option selected="selected">Select Option</option>
                        <option value="1">Order</option>
                        <option value="2">Payment</option>
                        <option value="3">Return</option>
                        <option data-select2-id="3">Other</option>
                    </select>
                </div>
                <div class="col-md-12 p-0">
                    <button class="btn btn-primary btn-rounded btn-block">Start Chat</button>
                </div>
            </div>
            <div class="ec-reminder">Welcome! Remember to be kind to others&hellip;</div>
            <div class="ec-chatbox">
                <div class="messages-wrapper">
                    <div class="status"></div>
                </div>
            </div>
            <div class="ec-typing"></div>
            <div class="ec-reply">
                <input class="usermsg" type="text" placeholder="Type a message..." disabled /><button
                    class="send">Send</button>
            </div>
        </div>

    <div class="ec-float-chat">
        <div class="ec-chat-icon">
            <i class="fi-rr-headset"></i>
        </div>
    </div>
    <!-- Chat Boat end -->
@include('user.layout.footer')
    

</body>

</html>
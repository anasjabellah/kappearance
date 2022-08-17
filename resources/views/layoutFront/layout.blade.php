<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Furns - Responsive eCommerce HTML Template" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Furns - Responsive eCommerce HTML Template" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Furns - Responsive eCommerce HTML Template" />
    <meta name="robots" content="noindex, follow" />
    <!-- Add site Favicon -->
    <link rel="icon" href="assets/images/favicon/favicon.png" sizes="32x32" />
    <link rel="icon" href="assets/images/favicon/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png" />
    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Replace_with_your_site_title",
            "url": "Replace_with_your_site_URL"
        }
    </script>

    <!-- vendor css (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/vendor/simple-line-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/vendor/ionicons.min.css') }}" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/plugins/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/plugins/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/plugins/jquery.lineProgressbar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/plugins/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/plugins/venobox.css') }}" />
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/style.css') }}" />
       <!-- limonte-sweetalert2 -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

    <!-- Header Area start  -->
    <div class="header section">
        <!-- Header Bottom  Start -->
        <div class="header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row align-self-center">
                    <!-- Header Logo Start -->
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="{{ url('/') }}"><img src="{{ url('images') }}/Kappearance.png" alt="Site Logo" width="150px" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Action Start -->
                    <div class="col align-self-center">
                        <div class="header-actions">
                            <div class="header_account_list">
                                <a href="javascript:void(0)" class="header-action-btn search-btn"><i class="icon-magnifier"></i></a>
                                <div class="dropdown_search">
                                    <form class="action-form" action="#">
                                        <input class="form-control" placeholder="Enter your search key" type="text">
                                        <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Single Wedge Start -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                        class="icon-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="{{ url('') }}">My account</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/') }}">Checkout</a></li>
                                    <li><a class="dropdown-item" href="login.html">{{ url('/login')}}</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge End -->
                            <a href="{{ url('/cart') }}" class="header-action-btn header-action-btn-cart  pr-0">
                                <i class="icon-handbag"></i>
                                <span class="header-action-num">{{ count((array) session('cart')) }}</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="icon-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
        <!-- Header Bottom  End -->
        
        <!-- Header Bottom  Start -->
        <div class="header-bottom d-lg-none sticky-nav bg-white">
            <div class="container position-relative">
                <div class="row align-self-center">
                    <!-- Header Logo Start -->
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="index.html"><img src="{{ url('images') }}/Kappearance.png" alt="Site Logo" width="100px" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Action Start -->
                    <div class="col align-self-center">
                        <div class="header-actions">
                            <div class="header_account_list">
                                <a href="javascript:void(0)" class="header-action-btn search-btn"><i class="icon-magnifier"></i></a>
                                <div class="dropdown_search">
                                    <form class="action-form" action="#">
                                        <input class="form-control" placeholder="Enter your search key" type="text">
                                        <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Single Wedge Start -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                        class="icon-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="{{ url('') }}">My account</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/') }}">Checkout</a></li>
                                    <li><a class="dropdown-item" href="login.html">{{ url('/login')}}</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge End -->
                            <a href="" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="icon-handbag"></i>
                                <span class="header-action-num">{{ count((array) session('cart')) }}</span>
                            </a>
                            <a href="" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="icon-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
        <!-- Header Bottom  End -->

        <!-- Main Menu Start -->
        <div class="bg-black d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a>  </li>
                                <li><a href="{{ url('/about') }}">About us</a></li>
                                <li class="dropdown position-static"><a href="#">Categories <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                @foreach ($categories as $category)
                                                    <li class="title"><a href="/Category/{{ $category->id  }}/products">{{ $category->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/Contact') }}" >Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu End -->

    </div>
    <!-- Header Area End  -->


    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>
        <div class="inner customScroll">

            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="{{ url('/') }}"><span class="menu-text">Home</span></a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            @foreach ($categories as $category)
                               <li><a href="/Category/{{ $category->id  }}/products">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li><a href="{{ url('/Contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
        </div>
    </div>
    <!-- OffCanvas Menu End -->

    
    
    @if(session('success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2500
        })
    </script>
    @endif

    @yield('content')





    <!-- Footer Area Start -->

    <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                            <div class="single-wedge">
                                <h4 class="footer-herading">about us</h4>
                                <p class="about-text">k-appearance </p>
                                <ul class="link-follow">
                                    <li class="li">
                                        <a class="paypal icon-paypal m-0" title="Paypal" href="#"></a>
                                    </li>
                                    <li class="li">
                                        <a class="tumblr icon-social-tumblr" title="Tumblr" href="#"></a>
                                    </li>
                                    <li class="li">
                                        <a class="twitter icon-social-twitter" title="Twitter" href="#"></a>
                                    </li>
                                    <li class="li">
                                        <a class="pinterest icon-social-pinterest" title="Pinterest" href="#"></a>
                                    </li>
                                    <li class="li">
                                        <a class="linkedin icon-social-linkedin" title="Linkedin" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-sm-6 col-lg-3 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                            <div class="single-wedge">
                                <h4 class="footer-herading">information</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="about.html">About us</a></li>
                                            <li class="li"><a class="single-link" href="#">Delivery Information</a></li>
                                            <li class="li"><a class="single-link" href="privacy-policy.html">Privacy & Policy</a></li>
                                            <li class="li"><a class="single-link" href="#">Terms & Condition</a></li>
                                            <li class="li"><a class="single-link" href="#">Manufactures</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-2 col-sm-6 mb-lm-30px" data-aos="fade-up" data-aos-delay="600">
                            <div class="single-wedge">
                                <h4 class="footer-herading">my account</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="my-account.html">My
                                                    Account</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="cart.html">My Cart</a></li>
                                            <li class="li"><a class="single-link" href="login.html">Login</a></li>
                                            <li class="li"><a class="single-link" href="wishlist.html">Wishlist</a></li>
                                            <li class="li"><a class="single-link" href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                            <div class="single-wedge">
                                <h4 class="footer-herading">newsletter</h4>
                                <div class="footer-links">
                                    <!-- News letter area -->
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input class="email" type="email" required="" placeholder="Your Mail*" name="EMAIL" value="" />
                                                <div class="mc-news" aria-hidden="true">
                                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                                </div>
                                                <div class="clear">
                                                    <button id="mc-embedded-subscribe" class="button btn-primary" type="submit" name="subscribe" value=""><i
                                                            class="icon-cursor"></i> Send Mail</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- News letter area  End -->
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row flex-sm-row-reverse">
                        <div class="col-md-6 text-right">
                            <div class="payment-link">
                                <img src="assets/images/icons/payment.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <p class="copy-text">Copyright © 2021 <a class="company-name" href="https://hasthemes.com/">
                                    HasThemes</a>. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Area End -->
    <script src="{{ asset('frontEnd/assets/js/vendor/vendor.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/js/plugins/plugins.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/js/main.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
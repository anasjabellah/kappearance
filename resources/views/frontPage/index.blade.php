@extends('layoutFront.layout')
@section('content')



    <div class="offcanvas-overlay"></div>

    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                @foreach ($products as $product)
                <div class="hero-slide-item slider-height swiper-slide d-flex">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="hero-slide-content slider-animated-1">
                                    <span class="category">${{ $product->price }}</span>
                                    <h3 class="">{{ $product->name }}</h3>
                                    <a href="#" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5">
                                <div class="hero-slide-image">
                                    <img src="{{ url('images', $product->image ) }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Hero/Intro Slider End -->

    <!-- Product Category Start -->
    <div class="section pt-100px pb-100px">
        <div class="container">
            <div class="category-slider swiper-container" data-aos="fade-up">
                <div class="category-wrapper swiper-wrapper">
                    <!-- Single Category -->
                    @foreach ($categories as $category)
                    <div class=" swiper-slide">
                        <a href="Category/{{  $category->id }}/products" class="category-inner ">
                            <div class="category-single-item">
                                <img src="{{ url('images', $category->image ) }}" alt="" width="80px" >
                                <span class="title">{{ $category->name }}</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <!-- Single Category -->
                </div>
            </div>
        </div>
    </div>
    <!-- Product Category End -->

    <!-- Product tab Area Start -->
    <div class="section product-tab-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" data-aos="fade-up">
                    <div class="section-title mb-0">
                        <h2 class="title">Our Products</h2>
                        <p class="sub-title mb-6">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product-new-arrivals">
                            <div class="row">
                                @foreach ($products as $product)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="/product/{{ $product->id }}" class="image">
                                                <img src="{{ url('images', $product->image ) }}" alt="Product" />
                                                <img class="hover-image" src="{{ url('images', $product->image ) }}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <a href="{{ route('add.to.cart', $product->id) }}" title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="/product/{{ $product->id }}">{{ $product->name }}</a></h5>
                                            <span class="price">
                                                <span class="new">${{ $product->price }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
                                @endforeach
                            </div>
                        </div>
                        <!-- 2nd tab end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product tab Area End -->


    <!-- Banner Section Start -->
    <div class="section pb-100px pt-100px">
        <div class="container">
            <!-- Banners Start -->
            <div class="row">
                <!-- Banner Start -->
                <div class="col-lg-6 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <a href="shop-left-sidebar.html" class="banner">
                        <img src="{{ url('images') }}/design.jpg"  />
                    </a>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col-lg-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <a href="shop-left-sidebar.html" class="banner">
                        <img src="{{ url('images') }}/design2.png"  />
                    </a>
                </div>
                <!-- Banner End -->
            </div>
            <!-- Banners End -->
        </div>
    </div>
    <!-- Banner Section End -->


    <!--  Blog area Start -->
    <div class="main-blog-area pb-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center mb-11">
                        <h2 class="title">Latest News</h2>
                        <p class="sub-title">Evryone deserve to dress well </p>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <div class="blog-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
                <!-- Start single blog -->
                <div class="swiper-wrapper">
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="{{ url('images') }}/September.jpg" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">22 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Interior design is the art.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-5">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="{{ url('images') }}/September7.png" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Decorate your home with furns.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-5">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="{{ url('images') }}/Untitled3.png" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">09 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Spatialize with that the furns.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-5">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="{{ url('images') }}/Untitled4.png" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Unique products will impress.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-5">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!--  Blog area End -->

    

@endsection
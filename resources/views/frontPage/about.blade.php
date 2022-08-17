@extends('layoutFront.layout')
@section('content')

    <div class="offcanvas-overlay"></div>
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row breadcrumb_box  align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-left">
                            <h2 class="breadcrumb-title">About Us</h2>
                        </div>
                        <div class="col-lg-6  col-md-6 col-sm-12">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list text-center text-md-right">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">About</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- About Us Area Start -->
    <section class="about-area pb-100px pt-100px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left-image mb-md-30px mb-lm-30px" data-aos="fade-up">
                        <img src="{{ url('images') }}/Kappearance1.png" alt="K-appearance" class="img-responsive w-100" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="about-title" data-aos="fade-up">
                            <h2>Welcome To K-appearance</h2>
                        </div>
                        <p class="mb-6" data-aos="fade-up" data-aos-delay="200">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam fugit consequuntur
                            voluptatibus ex sint iure in, distinctio sed dolorem aspernatur veritatis repellendus
                            dolorum voluptate, animi libero officiis eveniet accusamus recusandae. Temporibus
                            amet ducimus sapiente voluptatibus autem dolorem magnam quas, porro suscipit. Quibusdam
                            culpa asperiores exercitationem architecto quo distinctio sed dolorem!
                        </p>
                        <p data-aos="fade-up" data-aos-delay="300">
                            Sint voluptatum beatae necessitatibus quos mollitia vero, optio asperiores aut tempora iusto
                            eum rerum, possimus, minus quidem ut saepe laboriosam. Praesentium aperiam accusantium minus
                            repellendus laudantium provident quod recusandae exercitationem natus
                            dignissimos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->

    <div class="banner-preduct-wrapper pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 pr-0">
                    <div class="banner-product-image">
                        <a class="venobox " href="{{ url('images') }}/design1.png" data-gall="myGallery">
                            <img src="{{ url('images') }}/design1.png" class="img-fluid w-100" alt="Banner images">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="banner-product-image mt-lm-15px">
                        <a class="venobox " href="{{ url('images') }}/design3.png" data-gall="myGallery">
                            <img src="{{ url('images') }}/design3.png" class="img-fluid w-100" alt="Banner images">
                        </a>
                    </div>
                    <div class="banner-product-image mt-3">
                        <a class="venobox " href="{{ url('images') }}/design4.png" data-gall="myGallery">
                            <img src="{{ url('images') }}/design4.png" class="img-fluid w-100" alt="Banner images">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Start  Team Section    -->
    <div class="team-section">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">Meet Our Team</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Content Text Area -->
        <div class="team-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="0">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/images/team/leader1.png" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Ms. Veronica</h6>
                                <span class="team-title">Web Designer</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="200">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/images/team/leader2.png" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Missa Santos</h6>
                                <span class="team-title">CEO Founder</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="400">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/images/team/leader3.png" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Missa Santos</h6>
                                <span class="team-title">Chief Officer</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="team-single" data-aos="fade-up" data-aos-delay="600">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/images/team/leader4.png" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Lisa Antonia</h6>
                                <span class="team-title">CTO</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   End  Team Section   -->

@endsection
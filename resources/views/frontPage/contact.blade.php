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
                            <h2 class="breadcrumb-title">Contact Us</h2>
                        </div>
                        <div class="col-lg-6  col-md-6 col-sm-12">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list text-center text-md-right">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- contact area start -->
    <div class="contact-area pb-100px pt-100px">
        <div class="container">
            <div class="contact-map mb-10">
                <div id="mapid" data-aos="fade-up" data-aos-delay="200">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.266432204169!2d-9.515835345981335!3d30.400181813573973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c9348acaf1ab%3A0x3bdfbcc4889e9ed2!2sKalenya%20-%20Agence%20de%20marketing%20digital!5e0!3m2!1sar!2sma!4v1658934183170!5m2!1sar!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-row-2 row">
                <div class="col-lg-4 col-md-5 mb-lm-60px col-sm-12 col-xs-12 w-sm-100">
                    <div class="contact-info-wrap">
                        <h2 class="title" data-aos="fade-up" data-aos-delay="200">Contact Info</h2>
                        <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-inner">
                                <span class="sub-title">Phone:</span>
                            </div>
                            <div class="contact-info-dec">
                                <p><a href="tel:+012345678102">{{ $Setting->phone }}</a></p>
                            </div>
                        </div>
                        <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-inner">
                                <span class="sub-title">Email:</span>
                            </div>
                            <div class="contact-info-dec">
                                <p><a href="mailto://urwebsitenaem.com">{{ $Setting->email }}</a></p>
                            </div>
                        </div>
                        <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-inner " style="margin-right: 10px">
                                <span class="sub-title">Address: </span>
                            </div>
                            <div class="contact-info-dec">
                                <p  class="ms-2"> {{ $Setting->address }}</p>
                            </div>
                        </div>
                        <div class="contact-social">
                            <h3 class="title" data-aos="fade-up" data-aos-delay="200">Follow Us</h3>
                            <div class="social-info" data-aos="fade-up" data-aos-delay="200">
                                <ul class="d-flex">
                                    <li>
                                        <a href="{{ $Setting->facebook }}"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $Setting->twitter }}"><i class="icon-social-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $Setting->youtube }}"><i class="icon-social-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $Setting->google }}"><i class="icon-social-google"></i></a>
                                    </li>
                                    <li>
                                        <a class="m-0" href="{{ $Setting->instagram }}"><i class="icon-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <div class="contact-title mb-30">
                            <h2 class="title">Get In Touch</h2>
                        </div>

                        @if(session('status'))
                        <div class="alert alert-success mb-1 mt-1">
                            {{ session('status') }}
                        </div>
                      @endif

                        <form class="contact-form-style" action="{{ route('Contact.store') }}" method="POST" enctype="multipart/form-data"  >
                            @csrf
                            <div class="row">

                                <div class="col-lg-6">
                                    <input name="name" placeholder="Name*" type="text" />
                                    @error('name')
                                       <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <input name="email" placeholder="Email*" type="email" />
                                    @error('email')
                                       <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <input name="address" placeholder="address*" type="text" />
                                    @error('address')
                                       <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <input name="phone" placeholder="phone*" type="text" />
                                    @error('phone')
                                       <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <input name="subject" placeholder="Subject*" type="text" />
                                    @error('subject')
                                       <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Your Message*"></textarea>
                                    @error('message')
                                       <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror

                                </div>
                                
                            </div>
                            
                            <button class="btn btn-primary btn-hover-dark mt-4" type="submit">SEND</button>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->


@endsection
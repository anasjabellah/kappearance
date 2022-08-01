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
                            <h2 class="breadcrumb-title">Shop</h2>
                        </div>
                        <div class="col-lg-6  col-md-6 col-sm-12">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list text-center text-md-right">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Shop</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- Shop Category pages -->
    <div class="shop-category-area pb-100px pt-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  col-md-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <p>There Are {{ $getAllProduct }} Products.</p>
                        <!-- Left Side End -->
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <div class="shop-select">
                                <select class="shop-sort">
                                    <option data-display="Relevance">Relevance</option>
                                    <option value="1"> Name, A to Z</option>
                                    <option value="2"> Name, Z to A</option>
                                    <option value="3"> Price, low to high</option>
                                    <option value="4"> Price, high to low</option>
                                </select>

                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6">
                                    <!-- Single Prodect -->
                                    <div class="product mb-5">
                                        <div class="thumb">
                                            <a href="/product/{{ $product->id }}" class="image">
                                                <img src="{{ url('images', $product->image ) }}" alt="Product" />
                                                <img class="hover-image" src="{{ url('images', $product->image ) }}" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="/product/{{ $product->id }}" >{{ $product->name }}</a></h5>
                                            <span class="price">
                                                <span class="new">$ {{ $product->price }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center mb-md-30px mb-lm-30px mt-6" data-aos="fade-up">
                            <ul>
                                <li>
                                    <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                </li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li>
                                    <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    </div>




@endsection
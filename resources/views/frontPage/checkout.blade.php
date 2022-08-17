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
                                <li class="breadcrumb-item active">Checkout</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- checkout area start -->
    <div class="checkout-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <div class="row">
                            
                            <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <input type="hidden" name="product_id" value="{{  $product->id }}">
                                <input type="hidden" name="user_id" value="1">
                                <input type="hidden" name="total_price" value="{{  $product->price }}">
                                <input type="hidden" name="quantity" value="1">
    
                                <div class="col-lg-12">
                                    <div class="billing-info mb-4">
                                        <label>Name</label>
                                        <input type="text"  placeholder="name" name="name"/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-4">
                                        <label> Address</label>
                                        <input class="billing-address" placeholder="Address" type="text" name="adress" />
                                    </div>
                                </div>
    
                                <div class="col-lg-12">
                                    <div class="billing-info mb-4">
                                        <label>Email</label>
                                        <input class="billing-address" placeholder="Email" type="email" name="email" />
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>Phone</label>
                                        <input type="text" placeholder="Phone" name="phone" />
                                    </div>
                                </div>
                                
                                
                                <div class="col-lg-6">
                                    <div class="billing-info mb-4">
                                        <label>City</label>
                                        <input type="text" placeholder="City" name="city" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>County</label>
                                        <input type="text" placeholder="County" name="country" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>Postal Code</label>
                                        <input type="text" placeholder="Code Postal" name="postal_code" />
                                    </div>
                                </div>
                                <button type="submit" class="btn-hover" >Place Order</button>

                            </form>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                        <div class="your-order-area">
                            <h3>Your order</h3>
                            <div class="your-order-wrap gray-bg-4">
                                <div class="your-order-product-info">
                                    <div class="your-order-top">
                                        <ul>
                                            <li>Product</li>
                                            <li>Total</li>
                                        </ul>
                                    </div>
                                    <div class="your-order-middle">
                                        <ul>
                                            <li><span class="order-middle-left">Product Name X 1</span> <span class="order-price">$ {{ $product->price }} </span></li>
                                        </ul>
                                    </div>
                                    <div class="your-order-bottom">
                                        <ul>
                                            <li class="your-order-shipping">Shipping</li>
                                            <li>Free shipping</li>
                                        </ul>
                                    </div>
                                    <div class="your-order-total">
                                        <ul>
                                            <li class="order-total">Total</li>
                                            <li>${{ $product->price }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion element-mrg">
                                        <div id="faq" class="panel-group">
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                    <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-1" class="collapsed" aria-expanded="true">Direct bank transfer</a>
                                                    </h4>
                                                </div>
                                                <div id="my-account-1" class="panel-collapse collapse show" data-bs-parent="#faq">
    
                                                    <div class="panel-body">
                                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                    <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-2" aria-expanded="false" class="collapsed">Check payments</a></h4>
                                                </div>
                                                <div id="my-account-2" class="panel-collapse collapse" data-bs-parent="#faq">
    
                                                    <div class="panel-body">
                                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                    <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-3">Cash on delivery</a></h4>
                                                </div>
                                                <div id="my-account-3" class="panel-collapse collapse" data-bs-parent="#faq">
    
                                                    <div class="panel-body">
                                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- checkout area end -->


@endsection
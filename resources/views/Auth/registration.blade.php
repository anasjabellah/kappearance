
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
                            <li class="breadcrumb-item active">Login</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- login area start -->
<div class="login-register-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a href="{{ route('login') }}" >
                            <h4>login</h4>
                        </a>
                        <a class="active" data-bs-toggle="tab" href="{{ route('register-user') }}">
                            <h4>register</h4>
                        </a>
                    </div>

                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="{{ route('register.custom') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="role" value="0">
                                        <input type="text" placeholder="Username"  name="name" required autofocus />
                                            @if ($errors->has('name'))
                                               <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif

                                        <input type="password" name="password" required placeholder="Password" />
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif

                                        <input  placeholder="Email" type="email" name="email" required autofocus />
                                            @if ($errors->has('email'))
                                               <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif

                                        <div class="button-box">
                                            <button type="submit"><span>Register</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login area end -->

@endsection

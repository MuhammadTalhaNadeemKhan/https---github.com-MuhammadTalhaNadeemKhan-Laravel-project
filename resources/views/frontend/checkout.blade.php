@extends('frontend.layouts.app')  

@section('title', 'cheakout')

@section('content')

         
            
            <div class="side-mobile-menu bg-white pt-30 pb-30 pl-30 pr-30">
                <div class="close-icon float-right pt-10">
                    <a href="javascript:void(0);"><span class="icon-clear"></span></a>
                </div>
                <div class="header-search-content pt-110">
                    <h4 class="pb-10 text-center">Searching</h4>
                    <ul class="">
                        <li><a class="active" href="{{ route('shop') }}">All categories</a></li>
                        <li><a href="{{ route('shop') }}">Bedroom</a></li>
                        <li><a href="{{ route('shop') }}">Decor</a></li>
                        <li><a href="{{ route('shop') }}">Decoration</a></li>
                        <li><a href="{{ route('shop') }}">Kitchen</a></li>
                        <li><a href="{{ route('shop') }}">Lamp</a></li>
                    </ul>
                    <form action="https://wphix.com/template/atoga-prv-1/agota/contact.html" class="position-relative pt-10 pb-15">
                        <input type="text" placeholder="Search Products...">
                        <a class="position-absolute" href="javascript:void(0)"><span class="icon-search"></span></a>
                    </form>
                </div>
                <div class="mobile-menu"></div>
                <div class="menu-login pt-50 pb-200">
                    <ul class="header-login d-flex justify-content-between border-bottom-gray">
                        <li><a href="{{ route('login') }}">Login / register</a></li>
                        <li><a href="{{ route('login') }}"><span class="icon-users"></span></a></li>
                    </ul>
                    <ul class="header-heart d-flex justify-content-between border-bottom-gray">
                        <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                        <li><a href="{{ route('wishlist') }}"><span class="icon-heart"></span></a></li>
                    </ul>
                </div>
            </div>

            
            <div class="header-search-details text-center white-bg pt-60 pl-230 pr-230">
                <div class="close-icon float-right">
                    <a href="javascript:void(0);"><span class="icon-clear"></span></a>
                </div>
                <div class="header-search-content pt-200 ml-150 mr-150">
                    <h4 class="mb-25">Searching</h4>
                    <ul class="d-flex justify-content-center">
                        <li><a class="active" href="{{ route('shop') }}">All categories</a></li>
                        <li><a href="{{ route('shop') }}">Bedroom</a></li>
                        <li><a href="{{ route('shop') }}">Decor</a></li>
                        <li><a href="{{ route('shop') }}">Decoration</a></li>
                        <li><a href="{{ route('shop') }}">Kitchen</a></li>
                        <li><a href="{{ route('shop') }}">Lamp</a></li>
                    </ul>
                    <form action="#" class="position-relative pt-10">
                        <input type="text" placeholder="Search Products...">
                        <a class="position-absolute" href="#"><span class="icon-search"></span></a>
                    </form>
                </div>
            </div>

          

        <main>

             
            <div class="slider-area over-hidden">
                <div class="single-page cart-height d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12  d-flex align-items-center justify-content-center">
                                    <div class="page-title page-title1 pt-135 pb-20">
                                        <h2 class="text-capitalize text-dark mb-15">My Cart</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb justify-content-center bg-transparent">
                                            <li class="breadcrumb-item"><a class="secondary-color" href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active text-capitalize text-dark" aria-current="page">Cart</li>
                                            </ol>
                                        </nav> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
             
        
             
            <div class="coupon-area mt-80">
                <div class="container-wrapper pl-15 pr-15">
                    <div class="row">
                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-12 col-12">
                            <div class="coupon-accordion">
                                
                                <h6 class="pt-15 pl-40 pb-15 mb-25">Returning customer? <span id="login" class="primary-color transition-3">Click here to login</span></h6>
                                <div id="checkout-login" class="coupon-content border-gray pt-30 pb-35 pl-30 pr-30 mb-25">
                                    <div class="coupon-info">
                                        <p class="coupon-text mb-15">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                                            sit amet ipsum luctus.</p>
                                        <form action="#">
                                            <p class="log-mail mb-0">
                                                <label>Username or email <span class="required"><span class="theme-color">*</span></span></label>
                                                <input type="text" class="form-control primary-bg2 border-gray">
                                            </p>
                                            <p class="log-pass mb-0">
                                                <label>Password <span class="required"><span class="theme-color">*</span></span></label>
                                                <input type="text" class="form-control primary-bg2 border-gray">
                                            </p>
                                            <div class="log-btn mb-0">
                                                <a href="#" class="btn p-add-cart p-add-cart2 pt-3 pb-3 mb-15 px-5 text-uppercase mr-3">Login</a>
                                                <div class="save-info d-inline-block mb-30 mt-2">
                                                    <input class="p-0 pr-1" type="checkbox" aria-label="Checkbox for following text input">
                                                    <p class="mb-0 d-inline-block">Remember me</p>
                                                </div>
                                            </div>
                                            <p class="lost-password mb-0">
                                                <a href="#" class="theme-color">Lost your password?</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-12 col-12">
                            <div class="coupon-accordion">
                                
                                <h6 class="pt-15 pl-40 pb-15 mb-25">Have a coupon? <span  id="couponshow" class="primary-color">Click here to enter your code</span></h6>
                                <div id="checkout-coupon" class="checkout-content">
                                    <div class="coupon-info">
                                        <form action="#">
                                            <p class="checkout-coupon">
                                                <input type="text" class="form-control primary-bg2 border-gray" placeholder="Coupon Code">
                                                <a href="#" class="btn p-add-cart p-add-cart2 mb-15 px-5 text-uppercase">Apply coupon</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            
            <div class="checkout-area mb-60">
                <div class="container-wrapper pl-15 pr-15">
                    <div class="row">
                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                            <div class="checkbox-form">
                                <h4 class="pb-10 mb-20 border-b-light-gray3">Billing Details</h4>
                                <div class="row">
                                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                        <div class="country-select mb-30">
                                            <label>Country <span class="theme-color">*</span></label>
                                            <select class="w-100 primary-bg2 mb-20">
                                                <option value="volvo">bangladesh</option>
                                                <option value="saab">Algeria</option>
                                                <option value="mercedes">Afghanistan</option>
                                                <option value="audi">Ghana</option>
                                                <option value="audi2">Albania</option>
                                                <option value="audi3">Bahrain</option>
                                                <option value="audi4">Colombia</option>
                                                <option value="audi5">Dominican Republic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                        <div class="checkout-form-list mb-20">
                                            <label>First Name <span class="theme-color">*</span></label>
                                            <input type="text" placeholder="" class="form-control primary-bg2 border-gray">
                                        </div>
                                    </div>
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                        <div class="checkout-form-list mb-20">
                                            <label>Last Name <span class="theme-color">*</span></label>
                                            <input type="text" placeholder="" class="form-control primary-bg2 border-gray">
                                        </div>
                                    </div>
                                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                        <div class="checkout-form-list mb-20">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="" class="form-control primary-bg2 border-gray">
                                        </div>
                                    </div>
                                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                        <div class="checkout-form-list mb-20">
                                            <label>Address <span class="theme-color">*</span></label>
                                            <input type="text" placeholder="Street address" class="form-control primary-bg2 border-gray">
                                        </div>
                                    </div>
                                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                        <div class="checkout-form-list mb-20">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)" class="form-control primary-bg2 border-gray">
                                        </div>
                                    </div>
                                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                        <div class="checkout-form-list mb-20">
                                            <label>Town / City <span class="theme-color">*</span></label>
                                            <input type="text" placeholder="Town / City" class="form-control primary-bg2 border-gray">
                                        </div>
                                    </div>
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                        <div class="checkout-form-list mb-20">
                                            <label>State / County <span class="theme-color">*</span></label>
                                            <input type="text" class="form-control primary-bg2 border-gray">
                                        </div>
                                    </div>
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                        <div class="checkout-form-list mb-20">
                                            <label>Postcode / Zip <span class="theme-color">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip" class="form-control primary-bg2 border-gray">
                                        </div>
                                    </div>
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                        <div class="checkout-form-list mb-20">
                                            <label>Email Address <span class="theme-color">*</span></label>
                                            <input type="email" placeholder="" class="form-control primary-bg2 border-gray">
                                        </div>
                                    </div>
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                        <div class="checkout-form-list mb-20">
                                            <label>Phone <span class="theme-color">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip" class="form-control primary-bg2 border-gray">
                                        </div>
                                    </div>
                                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                        <div class="checkout-form-list create-acc mr-1">
                                            <div class="save-info d-inline-block">
                                                <input id="cbox-account" class="p-0 pr-2" type="checkbox" >
                                                <p class="mb-0 d-inline-block text-uppercase">Create an account?</p>
                                            </div>
                                            <div id="cbox-account-info" class="checkout-form-list create-account">
                                                <p>Create an account by entering the information below. If you are a returning
                                                    customer please login at the top of the page.</p>
                                                <label>Account password <span class="theme-color">*</span></label>
                                                <input type="password" placeholder="password" class="form-control primary-bg2 border-gray">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="different-address">
                                    <div class="ship-different-title pb-15 pt-1">
                                        <div class="save-info pb-10 border-b-light-gray">
                                            <p class="mb-0 d-inline-block text-uppercase pr-15">Ship to a different address?</p>
                                            <input id="ship-box" class="p-0" type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <div id="ship-box-info">
                                        <div class="row">
                                            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                                <div class="country-select mb-30">
                                                    <label>Country <span class="required primary-bg2">*</span></label>
                                                    <select class="form-control">
                                                        <option value="volvo">bangladesh</option>
                                                        <option value="saab">Algeria</option>
                                                        <option value="mercedes">Afghanistan</option>
                                                        <option value="audi">Ghana</option>
                                                        <option value="audi2">Albania</option>
                                                        <option value="audi3">Bahrain</option>
                                                        <option value="audi4">Colombia</option>
                                                        <option value="audi5">Dominican Republic</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                                <div class="checkout-form-list mt-30 mb-30">
                                                    <label>First Name <span class="required">*</span></label>
                                                    <input type="text" placeholder="" class="form-control primary-bg2 border-gray">
                                                </div>
                                            </div>
                                            <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                                <div class="checkout-form-list mt-30 mb-30">
                                                    <label>Last Name <span class="required">*</span></label>
                                                    <input type="text" placeholder="" class="form-control primary-bg2 border-gray">
                                                </div>
                                            </div>
                                            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                                <div class="checkout-form-list mb-30">
                                                    <label>Company Name</label>
                                                    <input type="text" placeholder="" class="form-control primary-bg2 border-gray">
                                                </div>
                                            </div>
                                            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                                <div class="checkout-form-list mb-40">
                                                    <label>Address <span class="required">*</span></label>
                                                    <input type="text" placeholder="Street address" class="form-control primary-bg2 border-gray">
                                                </div>
                                            </div>
                                            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                                <div class="checkout-form-list mb-30">
                                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" class="form-control primary-bg2 border-gray">
                                                </div>
                                            </div>
                                            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                                <div class="checkout-form-list mb-30">
                                                    <label>Town / City <span class="required">*</span></label>
                                                    <input type="text" placeholder="Town / City" class="form-control primary-bg2 border-gray">
                                                </div>
                                            </div>
                                            <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                                <div class="checkout-form-list mb-30">
                                                    <label>State / County <span class="required">*</span></label>
                                                    <input type="text" class="form-control primary-bg2 border-gray">
                                                </div>
                                            </div>
                                            <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                                <div class="checkout-form-list mb-30">
                                                    <label>Postcode / Zip <span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip" class="form-control primary-bg2 border-gray">
                                                </div>
                                            </div>
                                            <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                                <div class="checkout-form-list mb-30">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input type="email" placeholder="" class="form-control primary-bg2 border-gray">
                                                </div>
                                            </div>
                                            <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                                <div class="checkout-form-list mb-30">
                                                    <label>Phone <span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip" class="form-control primary-bg2 border-gray">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list mb-40">
                                            <label>Order Notes</label>
                                            <textarea id="checkout-mess" placeholder="Notes about your order, e.g. special notes for delivery." class="form-control pt-20 pl-20 primary-bg2 border-gray"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                            <div class="your-order mb-30 pt-30 pr-40 pb-45 pl-40 mt-15">
                                <h4 class="pb-10 mb-20 border-b-light-gray3">Your order</h4>
                                <div class="your-order-table table-responsive">
                                    <table class="width100">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">$165.00</span>
                                                </td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">$50.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">$215.00</span></td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Shipping</th>
                                                <td>
                                                    <ul>
                                                        <li class="d-flex">
                                                            <input type="radio" class="r-inpt mb-2 mr-1">
                                                            <label>
                                                                Flat Rate: <span class="amount">$8.00</span>
                                                            </label>
                                                        </li>
                                                        <li class="d-flex">
                                                            <input type="radio" class="r-inpt mb-2 mr-1">
                                                            <label>Free Shipping:</label>
                                                        </li>
                                                        <li></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount text-danger"><b>$215.00</b></span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="payment-method mt-40">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card border-gray rounded-0 mb-10 white-bg">
                                            <div class="card-header bg-white border-b-light-gray" id="headingOne">
                                                <h6 class="mb-0">
                                                    <button class="btn-link border-0 text-uppercase" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Direct Bank Transfer
                                                    </button>
                                                </h6>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <P class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</P>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-gray rounded-0 mb-10 white-bg">
                                            <div class="card-header bg-white border-b-light-gray" id="headingTwo">
                                                <h6 class="mb-0">
                                                    <button class="btn-link collapsed border-0 text-uppercase" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Cheque Payment
                                                    </button>
                                                </h6>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="card-body">
                                                        <P class="mb-0">Please send your cheque to Store Name, Store Street, Store Town, StoreState / County, StorePostcode.
                                                        </P>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-gray rounded-0 mb-10 white-bg">
                                            <div class="card-header bg-white border-b-light-gray" id="headingThree">
                                                <h6 class="mb-0">
                                                    <button class="btn-link collapsed border-0 text-uppercase" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        PayPal
                                                    </button>
                                                </h6>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <P class="mb-0">Pay via PayPal; you can pay with your credit card if you don’t have a
                                                        PayPal account.</P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-button-payment mt-20">
                                        <a href="#" class="btn p-add-cart p-add-cart2 pt-15 pb-15 mb-10 text-uppercase mt-2 w-100 mr-2">Place order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </main>

@endsection
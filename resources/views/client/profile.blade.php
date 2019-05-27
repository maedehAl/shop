@extends("layout")
@section("content")


    <!-- Page-Banner-AREA START -->
    <section class="page-banner-area">
        <div class="col-xs-12">
            <div class="page-banner-brief">
                <h2>My Account</h2>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li class="active"><a href="#">My Account</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page-Banner-AREA END -->
    <section class="content">
        <!-- MY-ACCOUNT-AREA START -->
        <div class="my-account-area margin-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel-group  margin-btm-0" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#personal-info" aria-expanded="true">
                                            <i class="fa fa-building"></i>
                                            <span>My Personal Information</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="personal-info" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="billing-address">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" class="custom-form" placeholder="First Name" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="custom-form" placeholder="Last Name" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="text" class="custom-form" placeholder="Office Address" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="text" class="custom-form" placeholder="Home Address" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <select class="custom-select custom-form">
                                                                    <option>City</option>
                                                                    <option>Dhaka</option>
                                                                    <option>New York</option>
                                                                    <option>London</option>
                                                                    <option>Melbourne</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <select class="custom-select custom-form">
                                                                    <option>Country</option>
                                                                    <option>Bangladesh</option>
                                                                    <option>United States</option>
                                                                    <option>United Kingdom</option>
                                                                    <option>Australia</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <select class="custom-select custom-form">
                                                                    <option>Post Code</option>
                                                                    <option>012345</option>
                                                                    <option>0123456</option>
                                                                    <option>01234567</option>
                                                                    <option>012345678</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="custom-form" type="password" placeholder="Password" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" class="custom-form" placeholder="Cell Number" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="custom-form" placeholder="Phone Number" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="text" class="custom-form" placeholder="Email" name="email" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <textarea class="custom-form" placeholder="Additional information"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="subscribe" checked="checked"/>
                                                                I wish to subscribe to the 69 Fashion newsletter.
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" name="subscribe"/>
                                                                I have read and agree to the
                                                                <a href="#"><b>Privacy Policy</b></a>
                                                            </label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="submit" class="custom-submit-2 save" value="Save" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#shipping-info" aria-expanded="false">
                                            <i class="fa fa-shopping-bag"></i>
                                            <span>My shipping address</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="shipping-info" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <!-- CHECKOUT-AREA START -->
                                        <div class="checkout-area">
                                            <form action="#">
                                                <div class="row">
                                                    <!-- Shipping-Address Start -->
                                                    <div class="col-md-12">
                                                        <div class="shipping-address">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <select class="custom-select custom-form">
                                                                        <option>Select Delivery Method</option>
                                                                        <option>Select Delivery Method</option>
                                                                        <option>Select Delivery Method</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input class="custom-form" type="text" placeholder="Subash" name="firstname"/>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input class="custom-form" type="text" placeholder="Chandra" name="lastname"/>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="text" class="custom-form" placeholder="Address" />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <select class="custom-select custom-form">
                                                                        <option>City</option>
                                                                        <option>Dhaka</option>
                                                                        <option>New York</option>
                                                                        <option>London</option>
                                                                        <option>Melbourne</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select class="custom-select custom-form">
                                                                        <option>Country</option>
                                                                        <option>Bangladesh</option>
                                                                        <option>United States</option>
                                                                        <option>United Kingdom</option>
                                                                        <option>Australia</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input class="custom-form" type="text" placeholder="Phone Number" />
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select class="custom-select custom-form">
                                                                        <option>Post Code</option>
                                                                        <option>012345</option>
                                                                        <option>0123456</option>
                                                                        <option>01234567</option>
                                                                        <option>012345678</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="text" class="custom-form" placeholder="Email" name="email" />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <textarea class="custom-form" placeholder="Order Note"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Shipping-Address End -->
                                                </div>
                                            </form>
                                        </div>
                                        <!-- CHECKOUT-AREA END -->
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#payment-info" aria-expanded="false" >
                                            <i class="fa fa-university"></i>
                                            <span>Payment Method</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="payment-info" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <!-- CHECKOUT-AREA START -->
                                        <div class="checkout-area">
                                            <form action="#">
                                                <div class="row">
                                                    <!-- Enter-Payment Start -->
                                                    <div class="col-md-12">
                                                        <div class="enter-payment">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="text" class="custom-form" placeholder="Card Type" />
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="custom-form" placeholder="Card Number" />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="custom-select custom-form">
                                                                                <option>Month</option>
                                                                                <option>January</option>
                                                                                <option>February</option>
                                                                                <option>March</option>
                                                                                <option>April</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <select class="custom-select custom-form">
                                                                                <option>Year</option>
                                                                                <option>2016</option>
                                                                                <option>2017</option>
                                                                                <option>2018</option>
                                                                                <option>2019</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="custom-form" placeholder="Card Security Code" />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <input type="submit" class="custom-form custom-submit" value="pay now" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="submit" class="custom-form custom-submit" value="cancel order" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a class="custom-form custom-submit" href="#">continue shopping</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="order">
                                                            <h2 class="title-3">Review your order</h2>
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="text-left">Sub Total</td>
                                                                        <td class="text-right">$ 2750.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-left">Packaging</td>
                                                                        <td class="text-right">$ 07.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-left">Shipping</td>
                                                                        <td class="text-right">$ 13.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-left">Discount off</td>
                                                                        <td class="text-right">$ 00.00</td>
                                                                    </tr>
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td class="text-right custom-td"><strong>Total =</strong></td>
                                                                        <td class="text-right custom-td"><strong>$ 2770.00</strong></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Enter-Payment End -->
                                                </div>
                                            </form>
                                        </div>
                                        <!-- CHECKOUT-AREA END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel-group margin-btm-0" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="wishlist.html" >
                                            <i class="fa fa-heart"></i>
                                            <span>My Wishlist Information</span>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="cart.html">
                                            <i class="fa fa-list-ol"></i>
                                            <span>Order history and details</span>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MY-ACCOUNT-AREA END -->
        <!-- BRANDS-LOGO-AREA START -->
        <div class="brands-logo-area">
            <div class="container">
                <div class="row">
                    <div class="active-brands-logo">
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/1.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/2.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/3.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/4.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/5.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/6.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/1.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- BRANDS-LOGO-AREA END -->
    </section>

@endsection
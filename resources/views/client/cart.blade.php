@extends("layout")
@section("content")


    <!-- Page-Banner-AREA START -->
    <section class="page-banner-area">
        <div class="col-xs-12">
            <div class="page-banner-brief">
                <h2>Shopping Cart</h2>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li class="active"><a href="#">Shopping Cart</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page-Banner-AREA END -->
    <section class="content">
        <!-- CART-AREA START -->
        <div class="cart-area margin-70">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="cart-table-head">
                                    <tr>
                                        <td class="text-center"> Items</td>
                                        <td class="text-center"> Price</td>
                                        <td class="text-center"> Quantity</td>
                                        <td class="text-center"> Total Price</td>
                                        <td class="text-center"> Remove</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-left shopping-cart-breif">
                                            <a href="#"><img src="img/cart/1.jpg" alt="#" /></a>
                                            <h5><a href="#" class="text-uppercase">Product Title Demo</a></h5>
                                            <p>Color: Blue</p>
                                            <p>Size: SL</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="custom-cart">$52.00</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            $104.00
                                        </td>
                                        <td class="text-center remove">
                                            <a href="#"><i class="pe-7s-close"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td class="text-left shopping-cart-breif">
                                            <a href="#"><img src="img/cart/2.jpg" alt="#" /></a>
                                            <h5><a href="#" class="text-uppercase">Product Title Demo</a></h5>
                                            <p>Color: Blue</p>
                                            <p>Size: SL</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="custom-cart">$52.00</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            $104.00
                                        </td>
                                        <td class="text-center remove">
                                            <a href="#"><i class="pe-7s-close"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td class="text-left shopping-cart-breif">
                                            <a href="#"><img src="img/cart/1.jpg" alt="#" /></a>
                                            <h5><a href="#" class="text-uppercase">Product Title Demo</a></h5>
                                            <p>Color: Blue</p>
                                            <p>Size: SL</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="custom-cart">$52.00</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            $104.00
                                        </td>
                                        <td class="text-center remove">
                                            <a href="#"><i class="pe-7s-close"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="shipping-discount-details">
                        <div class="row">
                            <div class="col-sm-4 col-sm-12">
                                <label class="custom-form custom-submit active-submit">Calculate Shipping</label>
                                <p>Enter your coupun code if you have one!</p>
                                <select class="custom-select custom-form">
                                    <option>Country</option>
                                    <option>Bangladesh</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>Australia</option>
                                </select>
                                <select class="custom-select custom-form">
                                    <option>City</option>
                                    <option>Dhaka</option>
                                    <option>New York</option>
                                    <option>London</option>
                                    <option>Melbourne</option>
                                </select>
                                <input type="text" class="custom-form" placeholder="Post Code" />
                                <input type="submit" class="custom-submit-2" value="Apply Coupon" />
                            </div>
                            <div class="col-sm-4 col-sm-12">
                                <label class="custom-form custom-submit active-submit">Coupon Discount</label>
                                <p>Enter your coupun code if you have one!</p>
                                <input type="text" class="custom-form" placeholder="Enter your code here" />
                                <input type="submit" class="custom-submit-2" value="Apply Coupon" />
                            </div>
                            <div class="col-sm-4 col-sm-12">
                                <label class="custom-form custom-submit active-submit">Payment Details</label>
                                <div class="order">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="text-left">Sub Total</td>
                                            <td class="text-right">$ 2750.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Shipping</td>
                                            <td class="text-right">$ 13.00</td>
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
                                <input type="submit" class="custom-submit-2" value="Procced To Checkout" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- CART-AREA END -->
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
    <!-- FOOTER-AREA START -->



@endsection
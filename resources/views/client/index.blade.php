@extends("layout")
@section("content")


    <!-- MOBILE-MENU-AREA START -->
    <div class="mobile-menu-area hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">Home</a>
                                    <ul class="submenu">
                                        <li><a href="index.html">Home Page 1</a></li>
                                        <li><a href="index-2.html">Home Page 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="shop.html">Women</a></li>
                                <li><a href="shop-list.html">Men</a></li>
                                <li><a href="#">page's</a>
                                    <ul class="submenu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="shop.html">Shop Grid View</a></li>
                                        <li><a href="shop-list.html">Shop List View</a></li>
                                        <li><a href="single-product.html">Single-Product</a></li>
                                        <li><a href="single-blog.html">Single-blog</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MOBILE-MENU-AREA END -->
    <!-- SLIDER-AREA START -->
    <section class="slider-area style-2">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="img/slider-2/slider-2-1.jpg" alt="" title="#slider-direction-1"  />
                <img src="img/slider-1/slider-1-3.jpg" alt="" title="#slider-direction-2"  />
                <img src="img/slider-2/slider-2-1.jpg" alt="" title="#slider-direction-3"  />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-lft s-tb slider-1">
                    <div class="title-container s-tb-c title-compress">
                        <div class="layer-1">
                            <div class="custom-slider">
                                <h5>New Arrival</h5>
                                <h2 class="title1">Women's Autumn<br> Collection</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an  scrambled it to make a type specimen book.</p>
                            </div>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-lfl s-tb slider-2">
                    <div class="title-container s-tb-c">
                        <div class="layer-1 layer-2">
                            <div class="custom-slider">
                                <h5>New Arrival</h5>
                                <h2 class="title1">Men's Autumn<br> Collection</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an  scrambled it to make a type specimen book.</p>
                            </div>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-lfl s-tb slider-2">
                    <div class="title-container s-tb-c">
                        <div class="layer-1 layer-3">
                            <div class="custom-slider">
                                <h5>New Arrival</h5>
                                <h2 class="title1">Women's Autumn<br> Collection</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an  scrambled it to make a type specimen book.</p>
                            </div>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SLIDER-AREA END -->
    <section class="content style-2">

        <!-- FEATURED-PRODUCTS-AREA START -->
        <div class="featured-products-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-title">
                            <h2>Featured Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="active-product-carousel navigation-top">


                        @foreach($products as $product)
                            <!-- Single-Product Start -->
                                <div class="col-md-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <div class="label-parcent">
                                                <span class="parcent">{{$product['offer']}}%</span>
                                            </div>
                                            <a class="pro-image" href="#">
                                                <img class="primary-image" src="/uploads/{{$product['image']}}" alt="#">
                                                <img class="secondary-image" src="/uploads/{{$product['image']}}" alt="#">
                                            </a>
                                            <div class="pro-actions">
                                                <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Wishlist" data-placement="left"><i class="pe-7s-like"></i></a>
                                                <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Compare" data-placement="left"><i class="pe-7s-repeat"></i></a>
                                                <a class="action-btn" href="#" data-toggle="tooltip" data-original-title="Add to Cart" data-placement="left"><i class="pe-7s-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name">
                                                <a href="#">{{$product['name']}}</a>
                                            </h2>
                                            <div class="pro-rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">{{number_format($product['price'])}} تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single-Product End -->
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURED-PRODUCTS-AREA END -->


        <!-- TESTIMONIALS-AREA START -->
        <div class="testimonials-area style-2">
            <div class="testimonials">
                <div class="container">
                    <div class="row">
                        <div class="active-testimonial-carousel navigation-bottom">
                            <div class="col-md-12">
                                <div class="single-testimonial">
                                    <h2>Salim Rana</h2>
                                    <h3>Chairman</h3>
                                    <div class="author-photo">
                                        <img src="img/review/1.jpg" alt="" />
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-testimonial">
                                    <h2>Robert Miller</h2>
                                    <h3>Chairman</h3>
                                    <div class="author-photo">
                                        <img src="img/testimonial/1.jpg" alt="" />
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TESTIMONIALS-AREA END -->
        <!-- BLOG-POST-AREA START -->
        <div class="blog-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-title ">
                            <h2>last from blogs</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="active-blog-post  navigation-top">
                        <!-- Blog-Post-Inner Start -->
                        <div class="col-md-12">
                            <div class="blog-post-inner">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html">
                                        <img src="img/blog/1.jpg" alt="" />
                                        <span class="moretag"></span>
                                    </a>
                                    <div class="post-meta">
                                        <div class="single-meta date">
                                            <p>25<span>June</span></p>
                                        </div>
                                        <div class="single-meta like">
                                            <button class="post-like"><i class="pe-7s-like"></i></button><sup>55</sup>
                                        </div>
                                        <div class="single-meta comments">
                                            <a href="single-blog.html"><i class="pe-7s-comment"></i><sup>42</sup></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-brief">
                                    <h3><a href="#">Blog Title Dummy</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.... </p>
                                </div>
                            </div>
                        </div>
                        <!-- Blog-Post-Inner End -->
                        <!-- Blog-Post-Inner Start -->
                        <div class="col-md-12">
                            <div class="blog-post-inner">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html">
                                        <img src="img/blog/2.jpg" alt="" />
                                        <span class="moretag"></span>
                                    </a>
                                    <div class="post-meta">
                                        <div class="single-meta date">
                                            <p>18<span>April</span></p>
                                        </div>
                                        <div class="single-meta like">
                                            <button class="post-like"><i class="pe-7s-like"></i></button><sup>65</sup>
                                        </div>
                                        <div class="single-meta comments">
                                            <a href="single-blog.html"><i class="pe-7s-comment"></i><sup>48</sup></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-brief">
                                    <h3><a href="#">Blog Title Dummy</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.... </p>
                                </div>
                            </div>
                        </div>
                        <!-- Blog-Post-Inner End -->
                        <!-- Blog-Post-Inner Start -->
                        <div class="col-md-12">
                            <div class="blog-post-inner">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html">
                                        <img src="img/blog/1.jpg" alt="" />
                                        <span class="moretag"></span>
                                    </a>
                                    <div class="post-meta">
                                        <div class="single-meta date">
                                            <p>26<span>March</span></p>
                                        </div>
                                        <div class="single-meta like">
                                            <button class="post-like"><i class="pe-7s-like"></i></button><sup>72</sup>
                                        </div>
                                        <div class="single-meta comments">
                                            <a href="single-blog.html"><i class="pe-7s-comment"></i><sup>60</sup></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-brief">
                                    <h3><a href="#">Blog Title Dummy</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.... </p>
                                </div>
                            </div>
                        </div>
                        <!-- Blog-Post-Inner End -->
                        <!-- Blog-Post-Inner Start -->
                        <div class="col-md-12">
                            <div class="blog-post-inner">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html">
                                        <img src="img/blog/2.jpg" alt="" />
                                        <span class="moretag"></span>
                                    </a>
                                    <div class="post-meta">
                                        <div class="single-meta date">
                                            <p>25<span>June</span></p>
                                        </div>
                                        <div class="single-meta like">
                                            <button class="post-like"><i class="pe-7s-like"></i></button><sup>24</sup>
                                        </div>
                                        <div class="single-meta comments">
                                            <a href="single-blog.html"><i class="pe-7s-comment"></i><sup>19</sup></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-brief">
                                    <h3><a href="#">Blog Title Dummy</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.... </p>
                                </div>
                            </div>
                        </div>
                        <!-- Blog-Post-Inner End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG-POST-AREA END -->
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
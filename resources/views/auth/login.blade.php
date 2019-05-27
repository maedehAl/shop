@extends("layout")

@section("content")

    <!-- Page-Banner-AREA START -->
    <section class="page-banner-area">
        <div class="col-xs-12">
            <div class="page-banner-brief">
                <h2>Registration</h2>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li class="active"><a href="#">Registration</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page-Banner-AREA END -->
    <section class="content">
        <!-- LOGIN-AREA START -->
        <div class="lognin-area">
            <div class="container">
                <div class="row">

                    <!-- Registered-Customers Start -->
                    <div class="col-md-12">


                        <form action="{{route("login")}}" method="post">

                            {{ csrf_field() }}
                            <div class="registered-customers margin-65">
                                <h2 class="title-3">ورود به فروشگاه</h2>
                                <div class="registered">
                                    @include("errors")
                                    <p>اگر حساب کاربری دارید وارد شوید</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="email" type="text" class="custom-form" placeholder="پست الکترونیک" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="password" type="password" class="custom-form" placeholder="رمز عبور" />
                                        </div>
                                    </div>

                                    <input type="submit" class="custom-submit-2" value="ورود" />
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- LOGIN-AREA END -->
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


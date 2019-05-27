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

                    <!-- Registered-Customers End -->
                    <div class="col-md-12">


                        <form action="{{route("register")}}" method="post">

                            {{ csrf_field() }}
                            <div class="new-customers margin-65">
                                <h2 class="title-3">عضویت</h2>
                                @include("errors")

                                <div class="row">
                                    <div class="col-sm-12">
                                        <input value="{{old('name')}}" name="name" type="text" class="custom-form" placeholder="نام" />
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <input value="{{old('address')}}" name="address" type="text" class="custom-form" placeholder="آدرس" />
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <input value="{{old('mobile')}}" name="mobile" type="text" class="custom-form" placeholder="موبایل" />
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <input value="{{old('phone')}}" name="phone" type="text" class="custom-form" placeholder="تلفن" />
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <input value="{{old('code_melli')}}" name="code_melli" type="text" class="custom-form" placeholder="کد ملی" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <input value="{{old('postal_code')}}" name="postal_code" type="text" class="custom-form" placeholder="کد پستی" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <input value="{{old('email')}}" class="custom-form" type="text" placeholder="پست الکترونیک" name="email" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="custom-form" type="password" name="password" placeholder="گذرواژه" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="custom-form" type="password" name="password_confirmation" placeholder="تکرار گذرواژه" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" class="custom-form custom-submit no-margin" value="عضویت" />
                                    </div>
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


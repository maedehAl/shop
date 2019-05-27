@extends("admin.layout")

@section("content")

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">
                        ویرایش محصول
                    </h2>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">


                    <form action="{{route("product.update",$product['id'])}}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <input placeholder="نام محصول" value="{{$product['name']}}" name="name" class="form-control">
                        </div>


                        <div class="form-group">
                            <input placeholder="قیمت محصول" value="{{$product['price']}}" name="price" class="form-control">
                        </div>

                        <div class="form-group">
                            <input placeholder="تخفیف محصول" value="{{$product['offer']}}" name="offer" class="form-control">
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Upload</legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>انتخاب تصویر جدید</p>
                                        <input name="image_input" type="file" class="form-control">
                                    </div>
                                    <div class="col-md-4 col-md-offset-2" style="border-right:1px solid lightgray">

                                        <p>تصویر فعلی</p>

                                        <img src="/uploads/{{$product->image}}" width="50px" alt="">

                                    </div>
                                </div>
                                <hr>
                            </fieldset>
                        </div>



                        <div class="form-group">
                            <select name="category_id" class="form-control">

                                @foreach($categories as $value)

                                    <option value="{{$value['id']}}" @if($value['id'] == $product['category_id']) selected @endif>{{$value['name']}}</option>

                                @endforeach

                            </select>
                        </div>


                        <div class="form-group">
                            <textarea placeholder="توضیحات محصول" name="description" class="form-control">{{$product['description']}}</textarea>
                        </div>


                        <button class="btn btn-success">ویرایش</button>



                    </form>


                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

@endsection
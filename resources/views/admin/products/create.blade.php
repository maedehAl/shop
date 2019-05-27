@extends("admin.layout")

@section("content")

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">
                        افزودن محصول جدید
                    </h2>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">


                    <form action="{{route("product.store")}}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <input placeholder="نام محصول" name="name" class="form-control">
                        </div>


                        <div class="form-group">
                            <input placeholder="قیمت محصول" name="price" class="form-control">
                        </div>

                        <div class="form-group">
                            <input placeholder="تخفیف محصول" name="offer" class="form-control">
                        </div>

                        <div class="form-group">
                            <input name="image_input" type="file" class="form-control">
                        </div>



                        <div class="form-group">
                            <select name="category_id" class="form-control">

                                @foreach($categories as $value)

                                    <option value="{{$value['id']}}">{{$value['name']}}</option>

                                @endforeach

                            </select>
                        </div>


                        <div class="form-group">
                            <textarea placeholder="توضیحات محصول" name="description" class="form-control"></textarea>
                        </div>

                        <button class="btn btn-success">ذخیره</button>



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
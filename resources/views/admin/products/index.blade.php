@extends("admin.layout")

@section("content")

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">
                        لیست محصول ها
                    </h2>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">


                    <table class="table">
                        <thead>

                            <tr>

                                <th>Id</th>
                                <th>تصویر</th>
                                <th>نام</th>
                                <th>قیمت</th>
                                <th>تاریخ ساخت</th>
                                <th>تاریخ ویرایش</th>
                                <th>ویرایش</th>
                                <th>حذف</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach($products as $value)

                                <tr>

                                    <td>{{$value['id']}}</td>
                                    <td><img src="/uploads/{{$value['image']}}" width="50px" height="auto" alt="{{$value['name']}}"> </td>
                                    <td>{{$value['name']}}</td>
                                    <td>{{number_format($value['price'])}} تومان</td>
                                    <td>{{$value['created_at']}}</td>
                                    <td>{{$value['updated_at']}}</td>
                                    <td><a href="{{route("product.edit",$value['id'])}}"><button class="btn btn-primary"> <i class="fa fa-pencil"></i> </button></a></td>

                                    <td>
                                        <form method="post" action="{{route("product.delete",$value['id'])}}">

                                            <input type="hidden" name="_method" value="delete">

                                            {{ csrf_field() }}

                                            <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button>

                                        </form>
                                    </td>

                                </tr>

                            @endforeach

                        </tbody>
                    </table>


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
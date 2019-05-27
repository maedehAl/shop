@extends("admin.layout")

@section("content")

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">
                        ویرایش دسته بندی
                    </h2>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">


                    <form action="{{route("category.update",$category['id'])}}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <input value="{{$category['name']}}" placeholder="نام دسته بندی" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <select name="parent_id" class="form-control">

                                <option value="">بدون دسته بندی پدر</option>

                                @foreach($categories as $value)

                                    <option value="{{$value['id']}}" @if($value['id'] == $category['parent_id']) selected @endif>{{$value['name']}}</option>

                                @endforeach

                            </select>
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
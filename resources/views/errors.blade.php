@if($errors->any())

    @foreach($errors->all() as $v)

        <div class="alert alert-danger">

            <p>{{$v}}</p>

        </div>

    @endforeach

@endif
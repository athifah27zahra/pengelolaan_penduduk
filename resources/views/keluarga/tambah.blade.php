
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">
  </head>
  <body>
  <ul style="
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    ">
    <li style="float: right"><a style="display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;" href="#">Pengelolaan Kartu Keluarga</a></li>
    <li style="float: right"><a style="display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;" href="#">Laporan</a></li>
  </ul>

  <body>
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
            {{ Form::open(['route'=> ['keluarga.store', $keluarga->id]]) }}
                    <div class="card-header">Input Data</div>

                    <div class="card-body">
                        @include('keluarga._form')
                    </div>

                    <div class="card-footer">
                        <input type="submit" value="save" class="btn btn-primary">
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
</body>
</html>
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
    text-decoration: none;" href="{{ route('keluarga.index') }}">Pengelolaan Kartu Keluarga</a></li>
    <li style="float: right"><a style="display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;" href="#">Laporan</a></li>
  </ul>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Pengelolaan Kartu Keluarga</h1>
            </div>
            <div class="panel-body">
                <form action="{{url('keluarga.create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-success">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nomor KK</th>
                            <th>Nagari</th>
                            <th>Jorong</th>
                            <th>Total Anggota</th>
                            <th>Tanggal Pencatatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                      @foreach($keluarga as $kk)
                          <tr>
                              <td> {{$kk -> no}}</td>
                              <td> {{$kk -> jorong->nagari->nama}}</td>
                              <td> {{$kk -> jorong->nama}}</td>
                              <td> {{$kk -> penduduks_count}}</td>
                              <td> {{$kk -> tanggal_pencatatan}}</td>
                              <td>
                                <a href="{{ route('keluarga.show', [$kk->id]) }}" class="btn btn-primary btn-sm" type="button">Detail</a>
                                <a href="/keluarga/{{$kk->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/keluarga/{{$kk->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
    
  <script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
  crossorigin="anonymous"></script>
  </body>
</html>


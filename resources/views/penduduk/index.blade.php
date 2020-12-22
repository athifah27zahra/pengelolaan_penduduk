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
                <h1>Pengelolaan Penduduk</h1>
            </div>
            <div class="panel-body">
                <form action="{{url('penduduk.create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-success">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data_penduduk as $key => $d)
                        <tr>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->nik }}</td>
                            <td>{{ $d->tempat_lahir }}</td>
                            <td>
                                <a href="{{url('read',array($d->id))}}">Read</a>
                                <a href="{{url('delete',array($d->id))}}">Delete</a>
                                <a href="{{url('edit',array($d->id))}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
  <!-- <body>
  <div class="container">
    <div class="row">
    <div class="col-6">
      <h1>Data Penduduk</h1>
    </div>

    <div class="col-8">
      <button type="button" class="btn btn-primary float-right">Tambah Data Penduduk</button>
    </div>
    <br>
      <table class="table">
        <tr>
          <th>Nama</th>
          <th>NIK</th>
          <th>Jenis Kelamin</th>
          <th>Tanggal Lahir</th>
          <th>Tempat Lahir</th>
        </tr>

        @foreach($data_penduduk as $penduduk)
        <tr>
          <td>{{$penduduk->nama}}</td>
          <td>{{$penduduk->nik}}</td>
          <td>{{$penduduk->jenis_kelamin}}</td>
          <td>{{$penduduk->tempat_lahir}}</td>
          <td>{{$penduduk->tanggal_lahir}}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div> -->
  
    
  <script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
  crossorigin="anonymous"></script>
  </body>
</html>


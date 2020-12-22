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
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Pengelolaan Kartu Keluarga</h1>
            </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                    <label for="" class="col-form-label">Nomor Kartu Keluarga :</label>
                                </div>

                                <div class="col-md-3">
                                    <label for="" class="col-form-label">{{ $keluarga->no }}</label>
                                </div>

                                <div class="col-md-3">
                                    <label for="" class="col-form-label">Tanggal Pencatatan :</label>
                                </div>

                                <div class="col-md-3">
                                    <label for="" class="col-form-label">{{ $keluarga->tanggal_pencatatan }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="" class="col-form-label">Nagari :</label>
                                </div>

                                <div class="col-md-3">
                                    <label for="" class="col-form-label">{{ $keluarga->jorong->nagari->nama }}</label>
                                </div>

                                <div class="col-md-3">
                                    <label for="" class="col-form-label">Jorong :</label>
                                </div>

                                <div class="col-md-3">
                                    <label for="" class="col-form-label">{{ $keluarga->jorong->nama }}</label>
                                </div>
                            </div>

                    <div class="col-lg-12">
                        <a href="/keluarga/{{$penduduks->id}}/tambah" class = "btn btn-primary btn-sm">Tambah</a>
                                    
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                        <br>
                        <br>
                            <table class="table table-responsive-md table-bordered table-stripped">
                                <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Status</th>
                                    <th>Status Pernikahan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach($penduduks as $penduduk)
                                        <tr>
                                            <td>{{ $penduduk->nik }}</td>
                                            <td>{{ $penduduk->nama }}</td>
                                            <td>{{ $penduduk->tempat_lahir }}</td>
                                            <td>{{ $penduduk->tanggal_lahir }}</td>
                                            <td>{{ $penduduk->status_keluarga }}</td>
                                            <td>{{ $penduduk->status_pernikahan }}</td>
                                            <td>
                                            <a href="/keluarga/{{$penduduk->id}}/edit" class = "btn btn-warning btn-sm">Edit</a>
                                            <a href="/keluarga/{{$penduduk->id}}/delete" class = "btn btn-danger btn-sm" onclick = "return confirm('Yakin Mau Menghapus data ?')" >Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
  <script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
  crossorigin="anonymous"></script>
  </body>
</html>


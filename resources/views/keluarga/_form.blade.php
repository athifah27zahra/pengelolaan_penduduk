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
                <h4>Input Data Keluarga</h4>
            </div>
            <div class="panel-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" id="id" class="form-control" required="require">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>                    
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select class="form-control" id="agama">
                            <option value="1">Islam</option>
                            <option value="2">Protestan</option>
                            <option value="3">Katolik</option>
                            <option value="4">Hindu</option>
                            <option value="5">Buddha</option>
                            <option value="6">Konghucu</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin">
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="level_pendidikan" class="form-label">Level Pendidikan</label>
                        <select name="level_pendidikan" id="level_pendidikan" class="form-control">
                            <option value="">Pilih Level Pendidikan</option>
                            @foreach ($level_pendidikan as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <select name="pekerjaan" id="pekerjaan" class="form-control">
                            <option value="">Pilih Pekerjaan</option>
                            @foreach ($pekerjaan as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status_pernikahan">Status Pernikahan</label>
                        <select class="form-control" id="status_pernikahan">
                            <option value="1">Belum Menikah</option>
                            <option value="2">Menikah</option>
                            <option value="3">Janda/Duda</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="status_keluarga">Status Keluarga</label>
                        <select class="form-control" id="status_keluarga">
                            <option value="1">Ayah</option>
                            <option value="2">Ibu</option>
                            <option value="3">Anak</option>
                            <option value="4">Orang Tua</option>
                        </select>
                    </div> 

                    <div class="form-group">
                        <label for="ayah">Nama Ayah</label>
                        <input type="text" name="ayah" id="ayah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ibu">Nama Ibu</label>
                        <input type="text" name="ibu" id="ibu" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
    
  <script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
  crossorigin="anonymous"></script>
  </body>
</html>


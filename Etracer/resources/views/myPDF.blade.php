<!DOCTYPE html>
<html>
<body>
    
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="sparkline8-list basic-res-b-30 shadow-reset">
                <div class="sparkline8-hd">
                  <div class="main-sparkline8-hd">
                    <h1>Kuesioner Pendahuluan</h1>
                  </div>
                  <div class="static-table-list">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Angkatan</th>
                          <th>Prodi</th>
                          <th>IPK</th>
                          <th>Tahun Masuk</th>
                          <th>Alamat</th>
                          <th>Kota</th>
                          <th>Provinsi</th>
                          <th>Kode Pos</th>
                          <th>Nomer HP</th>


                        </tr>
                      </thead>
                      <tbody>
                        @foreach($printPdf as $p)
                        <tr>
                          <td>{{$p->nama}}</td>
                          <td>{{$p->jenis_kel}}</td>
                          <td>{{$p->angkatan}}</td>
                          <td>{{$p->prodi}}</td>
                          <td>{{$p->ipk}}</td>
                          <td>{{$p->tahun_masuk}}</td>
                          <td>{{$p->almt}}</td>
                          <td>{{$p->almt_kota}}</td>
                          <td>{{$p->almt_prov}}</td>
                          <td>{{$p->almt_kodepos}}</td>
                          <td>{{$p->telp}}</td>

                        </tr>
                        <tr>
                          @endforeach
                        </tr>
                      </tbody>

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

 
</body>
</html>
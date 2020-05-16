@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('admin/DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('admin/CrudProduk')}}">Data Produk</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ubah Data Produk</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

            <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ubah Produk</h6>
                </div>
                <div class="card-body">
                    <!------------ Alert----------->

                      @if($errors->any())
                              <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <ul>
                                      @foreach ($errors->all() as $error)
                                      <li>{{$error}}</li>
                                      @endforeach
                                    </ul>
                              </div>
                            @endif

                    <!------------ Alert----------->

                  <form enctype="multipart/form-data" class="contact-form-area contact-page-form contact-form text-left" action="AksiUbahProduk{{$datas->id_produk}}" method="post">

                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                      <label><b>Nama Produk</b></label>
                      <input type="text" class="form-control" name="nama_produk" placeholder="Masukkan Nama Produk" value="{{$datas->nama_produk}}"> <!-- membaca data dari database-->
                    </div>
                    <div class="form-group">
                      <label><b>Harga</b></label>
                      <input type="number" minlength="0" class="form-control" name="harga" placeholder="Masukkan Harga" value="{{$datas->harga}}">
                    </div>
                    <div class="form-group">
                      <label><b>Stok</b></label>
                      <input type="number" minlength="0" class="form-control" name="stok" placeholder="Masukkan Stok" value="{{$datas->stok}}">
                    </div>
                    <div class="form-group">
                      <label><b>Jenis Produk</b></label>
                      <div class="form-select">
                        <select name="jenis_produk" class="form-control">
                          <option>Pilih Jenis Produk</option>
@foreach($UpdateJenisProduks as $JenisProduk)
    <option value="{{$JenisProduk->id_jenis_produk}}" {{ ($datas->id_jenis_produk == $JenisProduk->id_jenis_produk) ? 'selected' : ''}}>

    {{$JenisProduk->nama_jenis_produk}}</option>
@endforeach
                        <select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label><b>Seni Tari</b></label>
                      <div class="form-select">
                        <select name="seni_tari" class="form-control">
                          <option>Pilih Seni Tari</option>
@foreach($UpdateSeniTaris as $SeniTari)
    <option value="{{$SeniTari->id_seni_tari}}" {{ ($datas->id_seni_tari == $SeniTari->id_seni_tari) ? 'selected' : ''}}>

    {{$SeniTari->nama_seni_tari}}</option>
@endforeach
                          @foreach($UpdateSeniTaris as $SeniTari)
                          <option value="{{$SeniTari->id_seni_tari}}">{{$SeniTari->nama_seni_tari}}</option>
                          @endforeach
                        <select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label><b>Gambar Produk</b></label>
                      <input type="file" class="form-control" name="gambar_produk">
                    </div>
                    <div class="form-group"> 
                        <input type="reset" class="btn btn-secondary"  value="Batal">
                        <input type="submit" class="btn btn-primary" value="Ubah">
                    </div>
                </form>
              </div>
            </div>
          <!-- Form Basic -->
        </div>
      </div>
    </div>
  <!---Container Fluid-->
@endsection

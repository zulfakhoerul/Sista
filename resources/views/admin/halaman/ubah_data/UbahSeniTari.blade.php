@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Seni Tari</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('admin/DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('admin/CrudSeniTari')}}">Data Seni Tari</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ubah Data Seni Tari</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

            <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ubah Seni Tari</h6>
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

                  <form enctype="multipart/form-data" class="contact-form-area contact-page-form contact-form text-left" action="AksiUbahSeniTari{{$datas->id_seni_tari}}" method="put">

                    {{csrf_field()}}
                    <div class="form-group">
                      <label><b>Nama Seni Tari</b></label>
                      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Seni Tari" value="{{$datas->nama_seni_tari}}"> <!-- membaca data dari database-->
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

@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Produk</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('admin/DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Produk</li>
            </ol>
          </div>
          <hr>

         @if(\Session::has('alert-success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h6><i class="fas fa-sign-out-alt"></i><b> Success!!</b></h6>
                        {{Session::get('alert-success')}}
                    </div>
                  @endif

          <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="{{url ('admin/CrudProduk/TambahProduk')}}" class="btn btn-success" >Tambah data</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Id Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Jenis Produk</th>
                        <th>Seni Tari</th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Id Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Jenis Produk</th>
                        <th>Seni Tari</th>
                        <th> </th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @php
                        $no=1;
                      @endphp
                      @foreach($datas as $tampil)
                      <tr>
                        <td>{{$no++}}</td>
                        <td><img width="150px" src="{{ url('img/produk/'.$tampil->gambar_produk) }}"></td>
                        <td>{{$tampil->id_produk}}</td>
                        <td>{{$tampil->nama_produk}}</td>
                        <td>{{$tampil->harga}}</td>
                        <td>{{$tampil->stok}}</td>
                        <td>{{$tampil->JenisProduk->nama_jenis_produk}}</td>
                        <td>{{$tampil->SeniTari->nama_seni_tari}}</td>
                        <td>
                          <a class="btn btn-warning btn-sm" href="CrudProduk/UbahProduk{{$tampil->id_produk}}">
                            <i class="fas fa-pencil-alt"></i>
                            Ubah
                          </a>
                          <a class="btn btn-danger btn-sm" href="CrudProduk/HapusProduk{{$tampil->id_produk}}">
                            <i class="fas fa-trash"></i>
                            Hapus
                          </a>
                        </td>
                      </tr>
                      @endforeach 
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          <!-- DataTable with Hover -->
        </div>
      <!-- Container Fluid-->
@endsection
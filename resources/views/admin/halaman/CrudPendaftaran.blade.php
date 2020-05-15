@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pendaftaran Anggota</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Pendaftaran Anggota</li>
            </ol>
          </div>
          <hr>
         
          <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Id Pendaftaran</th>
                        <th>Nama Pendaftar</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Id User</th>
                        <th>Ikut Seni Tari</th>
                        <th>Status</th>
                        <th>Pilih Opsi</th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Id Pendaftaran</th>
                        <th>Nama Pendaftar</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Id User</th>
                        <th>Ikut Seni Tari</th>
                        <th>Status</th>
                        <th>Pilih opsi</th>
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
                        <td>{{$tampil->id_pendaftaran}}</td>
                        <td>{{$tampil->nama_pendaftar}}</td>
                        <td>{{$tampil->username}}</td>
                        <td>{{$tampil->password}}</td>
                        <td>{{$tampil->email}}</td>
                        <td>{{$tampil->ttl}}</td>
                        <td>{{$tampil->jk}}</td>
                        <td>{{$tampil->no_hp}}</td>
                        <td>{{$tampil->alamat}}</td>
                        <td>{{$tampil->id_user}}</td>
                        <td>
                          @foreach($tampil->SeniTari as $pilihsenitari)
                            {{$pilihsenitari->nama_seni_tari}}, 
                          @endforeach
                        </td>
                        <td><span class="badge badge-info">{{$tampil->status}}</span></td>
                        <td>
                          <a class="btn btn-success btn-sm" href="">
                            <i class="fas fa-check"></i>
                          </a>
                          <a class="btn btn-danger btn-sm" href="">
                            <i class="fas fa-ban"></i>
                          </a>
                        </td>
                        <td>
                          
                          <a class="btn btn-warning btn-sm" href="UbahSeniTari{{$tampil->id_user}}">
                            <i class="fas fa-pencil-alt"></i>
                            Ubah
                          </a>
                          <a class="btn btn-danger btn-sm" href="HapusSeniTari{{$tampil->id_user}}">
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
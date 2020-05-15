@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Anggota</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Anggota</li>
            </ol>
          </div>
          <hr>
         
          <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Id Anggota</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama Anggota</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Id Anggota</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama Anggota</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
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
                        <td>{{$tampil->id_anggota}}</td>
                        <td>{{$tampil->username}}</td>
                        <td>{{$tampil->password}}</td>
                        <td>{{$tampil->nama_anggota}}</td>
                        <td>{{$tampil->ttl}}</td>
                        <td>{{$tampil->jk}}</td>
                        <td>{{$tampil->email}}</td>  
                        <td>{{$tampil->no_hp}}</td>  
                        <td>{{$tampil->alamat}}</td>  
                        <td>
                          <a class="btn btn-warning btn-sm" href="UbahAkunUser{{$tampil->id_user}}">
                            <i class="fas fa-pencil-alt"></i>
                            Ubah
                          </a>
                          <a class="btn btn-danger btn-sm" href="HapusAkunUser{{$tampil->id_user}}">
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
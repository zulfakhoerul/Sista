@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kelas Tari</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Kelas Tari</li>
            </ol>
          </div>
          <hr>
         
          <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="{{url ('TambahKelas')}}" class="btn btn-success" >Tambah data</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Id Kelas</th>
                        <th>Nama Kelas</th>
                        <th>Seni Tari</th>
                        <th>Jadwal</th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Id Kelas</th>
                        <th>Nama Kelas</th>
                        <th>Seni Tari</th>
                        <th>Jadwal</th>
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
                        <td>{{$tampil->id_kelas}}</td>
                        <td>{{$tampil->nama_kelas}}</td>
                        <td>{{$tampil->SeniTari->nama_seni_tari}}</td>
                        <td>{{$tampil->Jadwal->hari}},  
                            Jam {{$tampil->Jadwal->waktu}},
                            {{$tampil->Jadwal->nama_jadwal}}
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
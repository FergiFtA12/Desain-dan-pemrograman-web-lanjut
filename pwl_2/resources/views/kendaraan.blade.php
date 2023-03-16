@extends('layout.template')

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Kendaraan</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th>No.</th>
                <th>No. Polisi</th>
                <th>Merk</th>
                <th>Jenis</th>
                <th>Tahun Buat</th>
                <th>Warna</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kendaraan as $no=>$k)
              <tr>
                <td>{{$no+1}}</td>
                <td>{{$k->no_pol}}</td>
                <td>{{$k->merk}}</td>
                <td>{{$k->jenis}}</td>
                <td>{{$k->tahun_buat}}</td>
                <td>{{$k->warna}}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>No. Polisi</th>
                <th>Merk</th>
                <th>Jenis</th>
                <th>Tahun Buat</th>
                <th>Warna</th>
              </tr>
            </tfoot>

        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer Kendaraan
    </div>
    <!-- /.card-footer-->
  </div>
  @endsection
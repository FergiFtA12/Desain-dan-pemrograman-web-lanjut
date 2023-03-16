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
      <h3 class="card-title">Hobi</h3>

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
                <th>Nama</th>
                <th>Status</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Pekerjaan</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($keluarga as $no=>$k)
              <tr>
                <td>{{$no+1}}</td>
                <td>{{$k->nama}}</td>
                <td>{{$k->status}}</td>
                <td>{{$k->umur}}</td>
                <td>{{$k->jenis_kelamin}}</td>
                <td>{{$k->Pekerjaan}}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Pekerjaan</th>
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
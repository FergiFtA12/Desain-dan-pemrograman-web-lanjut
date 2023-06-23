@extends('layouts.template')

@section('title')
  Mahasiswa
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Mahasiswa</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Mahasiswa</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body">

                  <a href="{{url('mahasiswa/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>

                  <table class="table table-bordered table-striped" id="data_mahasiswa">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Hp</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      {{-- // @if($mhs->count() > 0)
                      //   @foreach($mhs as $i => $m)
                      //     <tr>
                      //       <td>{{++$i}}</td>
                      //       <td>{{$m->nim}}</td>
                      //       <td>{{$m->nama}}</td>
                      //       <td>{{$m->kelas->nama_kelas}}</td>
                      //       <td>{{$m->jk}}</td>
                      //       <td>{{$m->hp}}</td>
                      //       <td style="display: flex">
                      //         <a href="{{ url('/mahasiswa/'. $m->id)}}" class="btn btn-sm btn-secondary mr-2">Show</a>
                      //         <a href="{{ url('/mahasiswa/'. $m->id.'/nilai') }}" class="btn btn-sm btn-primary mr-2">Nilai</a>

                      //         <a href="{{ url('/mahasiswa/'. $m->id.'/edit')}}" class="btn btn-sm btn-warning mr-2">Edit</a>

                      //         <form method="POST" action="{{ url('/mahasiswa/'.$m->id)}}">
                      //           @csrf
                      //           @method('DELETE')
                      //           <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                      //         </form>
                      //       </td>
                            
                      //     </tr>
                      //   @endforeach
                      // @else
                      //     <tr><td colspan="6" class="text-center">Data Tidak Ada</td></tr>
                      // @endif --}}
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

      <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
        <form method="post" action="{{ url('mahasiswa') }}" role="form" class="form-horizontal" id="form_mahasiswa">
        @csrf
        <div class="modal-dialog modal-">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row form-message"></div>
                    <div class="form-group required row mb-2">
                        <label class="col-sm-2 control-label col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="nim" name="nim" value="" />
                        </div>
                    </div>
                    <div class="form-group required row mb-2">
                      <label class="col-sm-2 control-label col-form-label">Nama</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="" />
                      </div>
                  </div>
                  <div class="form-group required row mb-2">
                      <label class="col-sm-2 control-label col-form-label">No. HP</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control form-control-sm" id="hp" name="hp" value="" />
                      </div>
                  </div>
              </div>
              <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </div>
      </div>
      </form>
  </div>
@endsection

@push('js_tambahan')
<script>
  $(document).ready(function (){
      var dataMahasiswa = $('#data_mahasiswa').DataTable({
          processing:true,
          serverSide:true,
          ajax:{
              'url': '{{  url('mahasiswa/data') }}',
              'dataType': 'json',
              'type': 'POST',
          },
          columns:[
              {data:'No',name:'No'},
              {data:'NIM',name:'NIM'},
              {data:'Nama',name:'Nama'},
              {data:'Kelas',name:'Kelas'},
              {data:'Jenis Kelamin',name:'Jenis Kelamin'},
              {data:'hp',name:'hp'},
              {data:'id',name:'id', sortable: false, searchable: false,
                    render: function(data, row){
                        var btn = '<a href="{{ url('/mahasiswa/')}}`+data+`/edit" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> Edit</a>` +
                                  `<a href="{{ url('/mahasiswa/') }} " class="btn btn-xs btn-info"><i class="fa fa-list"></i> Detail</a>` +
                                  `<form method="POST" action="{{ url('/mahasiswa/') }}`+data+`">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus</button>
                                    </form>`;
                        return btn;
                    }
                }
          ]
      });
      $('#form_mahasiswa').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                method: "POST",
                data: $(this).serialize(),
                dataType: 'json',
                success:function(data){
                    $('.form-message').html('');
                    if(data.status){
                        $('.form-message').html('<span class="alert alert-success" style="width: 100%">' + data.message + '</span>');
                        $('#form_mahasiswa')[0].reset();
                        dataMahasiswa.ajax.reload();
                        $('#form_mahasiswa').attr('action', '{{ url('mahasiswa') }}');
                        $('#form_mahasiswa').find('input[name="_method"]').remove();
                    }else{
                        $('.form-message').html('<span class="alert alert-danger" style="width: 100%">' + data.message + '</span>');
                        alert('error');
                    }

                    if(data.modal_close){
                        $('.form-message').html('');
                        $('#modal_mahasiswa').modal('hide');
                    }

                }
            });
        });
</script>
    
@endpush
@extends('adminlte::page')

@section('title', 'Divisi')

@section('content_header')
    <!-- <h1>Master Divisi</h1> -->
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Master Jabatan</h3>
                </div>
                <div class="panel-body">
                    
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered datatable">
                            <thead>
                                <tr>
                                    <th class="text-center" width="500">Nama</th>
                                    <th class="text-center" width="500">Tanggal Dibuat</th>
                                    <th class="text-center" width="200">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $row)
                                    <tr>
                                        <td class="text-center">{{ $row->nama_jabatan }}</td>
                                        <td class="text-center">{{ date('d F Y H:i', strtotime($row->created_at)) }}</td>
                                        <td class="text-center">
                                            <a href="{{ route("admin.master.jabatan.edit",$row->id) }}" title="Edit">
                                                <i class="glyphicon glyphicon-pencil" style="color:green"></i>
                                            </a> &nbsp;&nbsp;
                                            <a href="{{ route("admin.master.jabatan.delete",$row->id) }}" title="Hapus" class="hapus">
                                                <i class="glyphicon glyphicon-trash" style="color: red"></i>
                                            </a> 
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>            
                    </div>
                </div>
            </div>  
        </div>      
    </div>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".datatable").DataTable({
                dom: 'Bfrtip',
                buttons: [
                {
                    text : 'Tambah',
                    action: function (e, dt, node, config){
                        window.location.href = "{{ route("admin.master.jabatan.create") }}";
                    }
                }
                ],
            });

            $(".dt-buttons .btn-default").removeClass('btn-default').addClass('btn-primary').css('color','black');

            $(".hapus").on("click",function(e){
                e.preventDefault();
                var url = $(this).attr("href");

                swal({
                  title: "Apakah Anda Yakin?",
                  text: "Data ini akan di hapus LOH!!!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    $.ajax({
                        url      :   url,
                        headers  :   {
                            'X-CSRF-TOKEN' : "{{ csrf_token() }}"
                        },
                        type     :  "POST",
                        data     :  {"_method": "delete"},
                        dataType :  "JSON",
                        success  : function(res){
                            swal(res.msg, {
                                icon: "success",
                            });
                            setTimeout(function(){
                                window.location.reload();
                            },1500);
                        }, error: function(xhr, status){
                            alert("GAGAL, silahkan coba lagi");
                        }  
                    });
                    
                  } else {
                    swal("Penghapusan Di batalkan");
                  }
                });
            });
        });
    </script> 
@stop
@extends('adminlte::page')

@section('title', 'Pegawai')

@section('content_header')
    <!-- <h1>Master Divisi</h1> -->
@stop

@section('content')
    <div class="row">
    	<div class="col-md-6 col-md-offset-3 col-sm-12">
    		<div class="panel panel-primary">
    			<div class="panel-heading">
    				<h3>Tambah Pegawai</h3>
    			</div>
    			<div class="panel-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
    				<form method="post" action="{{ route("admin.master.pegawai.save") }}" class="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="">Nama Pegawai</label>
                                <input type="text" class="form-control" name="nama" required="required" value="{{ old("nama") }}" />
                            </div>
                            <div class="form-group">
                                <label for="">Telepon</label>
                                <input type="text" class="form-control" name="telepon" required="required" value="{{ old("telepon") }}" />
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea class="form-control" name="alamat">{{old ("alamat")}}</textarea> 
                            </div>
                            <div class="form-group">
                                <label for="">Divisi</label>
                                <select name="id_divisi" id="" class="form-control">
                                    @foreach($divisi as $row)
                                    <option value="{{ $row->id }}"> {{ $row->nama_divisi }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <select name="id_jabatan" id="" class="form-control">
                                    @foreach($jabatan as $row)
                                    <option value="{{ $row->id }}"> {{ $row->nama_jabatan }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Awal Kerja</label>
                                <input type="date" class="form-control" name="awal_tanggal_kerja" required="required" value="{{ old("awal") }}" />
                            </div>
                            <div class="form-group text-right">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>        
                    </form>
    			</div>
    		</div>	
    	</div>    	
    </div>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
   
@stop
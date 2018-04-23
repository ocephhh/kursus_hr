@extends('adminlte::page')

@section('title', 'Absensi')

@section('content_header')
    <!-- <h1>Master Divisi</h1> -->
@stop

@section('content')
    <div class="row">
    	<div class="col-md-6 col-md-offset-3 col-sm-12">
    		<div class="panel panel-primary">
    			<div class="panel-heading">
    				<h3>Panel Absensi</h3>
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
    				<form method="post" action="{{ route("admin.absensi.update",$row->id) }}" class="form">
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="">Id_Pegawai</label>
                                <select name="id_pegawai" id="" class="form-control">
                                    @foreach($pegawai as $row)
                                    <option value="{{ $row->id }}"> {{ $row->nama }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="">Bulan</label>
                                <select name="bulan" id="" class="form-control">
                                    <option value="januari"> Januari </option>
                                    <option value="februari"> Februari </option>
                                    <option value="maret"> Maret </option>
                                    <option value="april"> April </option>
                                    <option value="mei"> Mei </option>
                                    <option value="juni"> Juni </option>
                                    <option value="juli"> Juli </option>
                                    <option value="agustus"> Agustus </option>
                                    <option value="september"> September </option>
                                    <option value="oktober"> Oktober </option>
                                    <option value="november"> November </option>
                                    <option value="desember"> Desember </option>
                                    
                                </select>
                            </div>
                            <div>
                                <label for="">Tahun</label>
                                <select name="tahun" id="" class="form-control">
                                    @for($i=date('Y');$i>=2015;$i--)
                                    <option value="{{$i}}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div>
                                <label for="">Jumlah Masuk</label>
                                <input type="text" class="form-control" name="jumlah_masuk" required="required" value="{{ $row->jumlah_masuk }}">
                            </div>
                            <div>
                                <label for="">Jumlah Izin</label>
                                <input type="text" class="form-control" name="jumlah_izin" required="required" value="{{ $row->jumlah_izin }}">
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
@extends('adminlte::page')

@section('title', 'Gaji')

@section('content_header')
    <!-- <h1>Master Divisi</h1> -->
@stop

@section('content')
    <div class="row">
    	<div class="col-md-6 col-md-offset-3 col-sm-12">
    		<div class="panel panel-primary">
    			<div class="panel-heading">
    				<h3>Gaji</h3>
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
    				<form method="post" action="{{ route("admin.master.gaji.save") }}" class="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                <label for="">Gaji</label>
                                <input type="text" class="form-control" name="gaji" required="required" value="{{ old("nama") }}" />
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
@extends('adminlte::page')

@section('title', 'Edit Blog')

@section('content_header')
    <!-- <h1>Master Divisi</h1> -->
@stop

@section('content')
    <div class="row">
    	<div class="col-md-6 col-md-offset-3 col-sm-12">
    		<div class="panel panel-primary">
    			<div class="panel-heading">
    				<h3>Edit Blog</h3>
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
    				<form method="post" action="{{ route("admin.option.blog.update",$row->id) }}" class="form" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="judul" required="required" value="{{ $row->judul }}" />
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" value="{{ $row->gambar }}">
                            </div>
                             <div class="form-group">
                                <label for="">Content</label>
                                <textarea name="isi" id="" cols="30" rows="10">{{ $row->isi }}</textarea>
                            </div>
                             <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" required="required" value="{{ $row->tanggal }}" />
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
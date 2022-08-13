@extends('adminlte::page')
@section('title', 'Edit User')
@section('content_header')
    <h1 class="m-0 text-dark">Edit User</h1>
@stop
@section('content')

<form action="{{route('sisw.update', $sisw)}}" method="post">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sisw.update',$sisw->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIS:</strong>
                <input type="text" name="NIS" class="form-control" placeholder="NIS SISWA" value="{{ $sisw->NIS }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Siswa:</strong>
                <input type="text" name="NamaSiswa" value="{{ $sisw->NamaSiswa }}" class="form-control" placeholder="NAMA SISWA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Content">{{ $sisw->Alamat }}</textarea>
            </div>
        </div>
        <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('users.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
    </div>

    </form>


                    </div>
                 </div>
            </div>
        </div>

</form>
   @endsection
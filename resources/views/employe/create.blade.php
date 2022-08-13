@extends('adminlte::page')
@section('title', 'Tambah User')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Siswa</h1>
@stop
@section('content')
<form action="{{route('sisw.index')}}" method="post">
    <div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Input gagal.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('sisw.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIS:</strong>
                <input type="text" name="NIS" class="form-control" placeholder="NIS SISWA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Siswa:</strong>
                <input type="text" name="NamaSiswa" class="form-control" placeholder="NAMA SISWA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Content"></textarea>
            </div>
        </div>
        <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('sisw.index')}}" class="btn btn-default">
                        Batal
                    </a>
</div>
       
    </div>

</form>

                </div>
            </div>
        </div>

    </div>




@endsection
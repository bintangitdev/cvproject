@extends('adminlte::page')
@section('title', 'List Siswa')
@section('content_header')
    <h1 class="m-0 text-dark">List Siswa</h1>
@stop
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('sisw.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>NIS</th>
            <th width="280px"class="text-center">Nama Siswa</th>
            <th width="280px"class="text-center">Alamat</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($sisw as $siswa)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $siswa->NIS }}</td>
            <td>{{ $siswa->NamaSiswa }}</td>
            <td>{{ $siswa->Alamat }}</td>
            <td class="text-center">
                <form action="{{ route('sisw.destroy',$siswa->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('sisw.show',$siswa->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('sisw.edit',$siswa->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </div>
    </table>
                </div>
            </div>
        </div>
    </div>
<!-- 
    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif -->

   


    {!! $sisw->links() !!}

@endsection
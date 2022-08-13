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
            <th width="280px"class="text-center">Nama</th>
            <th width="280px"class="text-center">Kota</th>
            <th width="280px"class="text-center">Umur</th>
        </tr>
        @foreach ($employe as $employee)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $employee->Nama }}</td>
            <td>{{ $employee->Kota }}</td>
            <td>{{ $employee->Umur }}</td>
            <td class="text-center">
                <form action="{{ route('employe.destroy',$siswa->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('employe.show',$employee->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('employe.edit',$employee->id) }}">Edit</a>

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
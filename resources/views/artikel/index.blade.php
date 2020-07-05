@extends('layouts/master')

@section('content')
    <a href="{{url('/artikel/create')}}">Tambah</a>
    
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Aksi</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($artikel as $key => $item)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $item -> judul }}</td>
                <td>{{ $item -> isi }}</td>
                <td>
                  <a href="/artikel/{{$item->id}}" class="badge badge-info">Show</a>
                  <a href="/artikel/{{$item->id}}/edit" class="badge badge-success">Edit</a>
                  <a href="" class="badge badge-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
    </table>

@endsection
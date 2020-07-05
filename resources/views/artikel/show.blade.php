@extends('layouts/master')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 >Judul: {{ $artikel->judul }} </h5>
            <p class="card-text">Slug: {{ $artikel->slug }} </p>
            <p class="card-text"> {{ $artikel->isi }} </p>
            <a href="#" class="btn btn-primary">{{ $artikel->tag }} </a>
        </div>
    </div>
@endsection
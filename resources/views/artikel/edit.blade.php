@extends('../layouts/master')

@section('content')
<form action="/artikel/{{$artikel->id}}" method="post">
    @csrf
    @method('PUT')
    
    <div class="form-group">
      <label for="exampleInputEmail1">Judul</label>
    <input type="text" name="judul" value="{{ $artikel->judul}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Isi</label>
      <textarea name="isi" class="form-control" cols="30" rows="10">{{ $artikel->isi}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tag</label>
        <input type="text" name="tag" value="{{ $artikel->judul}}" class="form-control" aria-describedby="tagHelp">
        <small id="tagHelp" class="form-text text-muted">Sertakan # di setiap tag.</small>
      </div>  
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection
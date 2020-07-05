@extends('../layouts/master')

@section('content')
<form action="/artikel" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Judul</label>
      <input type="text" name="judul" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Isi</label>
      <textarea name="isi"  class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tag</label>
        <input type="text" name="tag" class="form-control" aria-describedby="tagHelp">
        <small id="tagHelp" class="form-text text-muted">Sertakan # di setiap tag.</small>
      </div>  
    <button type="submit" class="btn btn-primary">Upload</button>
  </form>
@endsection
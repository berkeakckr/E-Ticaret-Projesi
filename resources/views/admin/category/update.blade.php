@extends('admin.layouts.master')
@section('content')
    <div class="card shadow mb-4" style="width:500px">
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form method="post" action="{{route('category.update.post',$categories->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Kategori Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{$categories->title}}" required></input>
                </div>


                <div class="form-group">
                    <label>Kategori Fotoğrafı</label>
                    <br>
                    <img src="{{asset($categories->image)}}" alt="" width="150px">
                    <input type="file" name="image" class="form-control"></input>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Kategoriyi Güncelle</button>
                </div>
            </form>
        </div>
    </div>

@endsection


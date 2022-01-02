@extends('admin.layouts.master')
@section('content')
    <div class="card shadow mb-4" style="width:500px;margin-left: 300px;">
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif

            <form method="post" action="{{route('alt.category.create.post')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Kategori Başlığı</label>
                    <input type="text" name="title" class="form-control" required></input>
                </div>
                <div class="form-group">
                    <label>Üst Kategori Başlığı</label>
                <select class="form-control" name="category" required>

                    <option value="">Seçim Yapınız</option>

                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
                </div>

                <div class="form-group">
                    <label>Kategori Fotoğrafı</label>
                    <input type="file" name="image" class="form-control" ></input>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Alt Kategoriyi Oluştur</button>
                </div>
            </form>
        </div>
    </div>

@endsection


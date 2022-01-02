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
            <form method="post" action="{{route('alt.category.update.post',$alt_categories->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Kategori Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{$alt_categories->title}}" required></input>
                </div>
                <div class="form-group">
                    <label> Üst Kategori Başlığı</label>
                    <select class="form-control" name="category" required>

                        <option value="">Seçim Yapınız</option>

                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Kategori Fotoğrafı</label>
                    <br>
                    <img src="{{asset($alt_categories->image)}}" alt="" width="150px">
                    <input type="file" name="image" class="form-control"></input>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Alt Kategoriyi Güncelle</button>
                </div>
            </form>
        </div>
    </div>

@endsection


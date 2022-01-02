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

            <form method="post" action="{{route('product.create.post')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Ürün Başlığı</label>
                    <input type="text" name="title" class="form-control" required></input>
                </div>
                <div class="form-group">
                    <label>Ürün Fiyatı</label>
                    <input type="text" name="price" class="form-control" required></input>
                </div>

                <div class="form-group">
                    <label>Ürün Fotoğrafı</label>
                    <input type="file" name="image" class="form-control" required></input>
                </div>
                <div class="form-group">
                    <label>Ürün İçeriği</label>
                    <textarea name="description" class="form-control" cols="30" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label>Alt Kategori</label>
                    <select class="form-control" name="alt_category" >
                        <option value="">Seçim Yapınız</option>

                        @foreach($alt_categories as $alt_category)
                            <option value="{{$alt_category->id}}">{{$alt_category->title}}</option>

                        @endforeach

                    </select>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label>Üst Kategori</label>--}}
{{--                    <select class="form-control" name="alt_category" >--}}

{{--                        @foreach($alt_categories as $alt_category)--}}
{{--                            <option value="{{$alt_category->id}}">{{$alt_category->title}}</option>--}}
{{--                        @endforeach--}}

{{--                    </select>--}}
{{--                </div>--}}
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Ürünü Oluştur</button>
                </div>
            </form>
        </div>
    </div>

@endsection


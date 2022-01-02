@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">

        <style>
            .tablo{
                background-color: white;
            }
        </style>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <a href="{{route('product.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm col-md-1 mt-2 ml-3"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Ürün Ekle</a>
            <div class="card-body tablo">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Fotoğraf</th>
                            <th>Ürün Başlığı</th>
                            <th>Alt Kategori Başlığı</th>
                            <th>Kategori Başlığı</th>
                            <th>Açıklama</th>
                            <th>Fiyat</th>
                            <th>Oluşturma Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <img src="{{asset($product->image)}}" class="img-thumbnail rounded" width="150">
                                </td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->get_altCategory->title}}</td>
                                <td>{{$product->get_altCategory->get_ustCategory->title}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>

                                <td>{{$product->created_at->diffforHumans()}}</td>
                                <td>
                                    <a href="{{route('product.update',$product->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                    <a href="{{route('product.delete',$product->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection


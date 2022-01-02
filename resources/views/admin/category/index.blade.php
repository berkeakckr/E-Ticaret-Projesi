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
            <a href="{{route('category.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm col-md-2 mt-2 ml-3"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Kategori Ekle</a>
            <div class="card-body tablo">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Fotoğraf</th>
                            <th>Kategori Başlığı</th>

                            <th>Oluşturma Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <img src="{{asset($category->image)}}" class="img-thumbnail rounded" width="150">
                                </td>
                                <td>{{$category->title}}</td>



                                <td>{{$category->created_at->diffforHumans()}}</td>
                                <td>
                                    <a href="{{route('category.update',$category->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                    <a href="{{route('category.delete',$category->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
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


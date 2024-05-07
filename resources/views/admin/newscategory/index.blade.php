@extends('admin.layouts.master')
@section('title','News Category')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.news.category.create')}}" class="btn btn-primary my-2">Add News Category</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">News Category Lists</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>News Category</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($news_categories as $category)
                <tbody>
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$category->news_category}}</td>
                        <td>{{$category->created_at}}</td>
                        <td><a href="{{route('admin.news.category.edit',$category->category_id)}}"
                                class="btn text-info"><i class="fa fa-edit"></i>Edit</a> | <a
                                href="{{route('admin.news.category.delete',$category->category_id)}}"
                                class="btn text-danger"><i class="fa fa-trash"></i>Delete</a>
                    </tr>
                </tbody>
                <?php $i++; ?>
                @endforeach

            </table>
        </div>
    </div>
</div>
@endsection

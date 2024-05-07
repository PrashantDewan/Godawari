@extends('admin.layouts.master')
@section('title', 'Gallery')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.gallery.create')}}" class="btn btn-primary my-2">Add Gallery</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Gallery List</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Gallery Name</th>
                        <th>Gallery Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($gallerys as $gallery)


                <tbody>
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$gallery->gallery_name}}</td>
                        <td><img style="height: 150px; width:60%; " src="{{asset($gallery->gallery_image)}}" alt="">
                        </td>
                        <td><a href="{{route('admin.gallery.edit',$gallery->id)}}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a>|<a
                                href="{{route('admin.gallery.delete',$gallery->id)}}" class="btn text-danger"><i
                                    class="fa fa-trash"></i>Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php $i++; ?>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection

@extends('admin.layouts.master')
@section('title', 'News')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{ route('admin.news.create') }}" class="btn btn-primary my-2">Add News</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">News Lists</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Date</th>
                        <th>News Category</th>
                        <th>News Subject</th>
                        <th>News Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>

                @foreach ($newses as $news)
                <tbody>
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $news->date }}</td>
                        <td>{{ $news->news_category }}</td>
                        <td> {{ $news->subject }}</td>
                        <td>{!! $news->news_description !!}</td>
                        <td><a href="{{ route('admin.news.edit', $news->id) }}" class="btn text-info"><i
                                    class="fa fa-edit"></i>Edit</a>|<a
                                href="{{ route('admin.news.delete', $news->id) }}" class="btn text-danger"><i
                                    class="fa fa-trash"></i>Delete</a>|<a
                                href="{{ route('admin.news.show', $news->id) }}" class="btn text-info"><i
                                    class="fa fa-eye"></i>View</a>
                    </tr>
                </tbody>
                <?php $i++; ?>
                @endforeach

            </table>
        </div>
    </div>
</div>
@endsection

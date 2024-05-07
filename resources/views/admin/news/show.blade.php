@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.news.index')}}" class="btn btn-primary my-2">Back</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$news->subject}}</h3>
        </div>

        <div class="card-body">
            <div class="col">
                <div class="row">

                    <div class="col-12">
                        <img height="100%" width="100%" src="{{asset($news->news_image)}}" alt="">
                    </div>
                    <div class="col-12">
                        <h1>Description</h1>
                        <span>{!!$news->news_description!!}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

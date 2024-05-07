@extends('frontend.layout.main')
@section('content')
<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>News Details </h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Pages</li>
                <li>Notice</li>
            </ul>
        </div>
    </div>
</div>


<div class="news-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="news-details">
                    <div class="news-simple-card">
                        <img src="{{ asset( $notices->notice_image ) }}" alt="Image">
                        <div class="list">
                            <ul>

                                <li class="fw-bold"><i class="flaticon-briefcase "></i>{{ \Carbon\Carbon::parse($notices->date)->format('M-d-Y') }}</li>
                            </ul>
                        </div>
                        <h2>{{ $notices->subject }}</h2>
                        <p> {{ $notices->notice_description }} </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="related-post-area">
                    <h3>Recent Post</h3>
                    <div class="related-post-box">
                        @foreach ($recent_notices as $recent_notice)

                        <div class="related-post-content">
                            <a href="{{ route('notice.details.front',$recent_notice->id) }}"><img src=" {{ asset( $recent_notice->notice_image ) }}" alt="Image"></a>
                            <h4><a href="{{ route('notice.details.front',$recent_notice->id) }}"> {{ $recent_notice->subject }}</a>
                            </h4>
                            <p><i class="flaticon-briefcase"></i> {{ \Carbon\Carbon::parse($recent_notice->date)->format('M-d-Y') }}</p>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

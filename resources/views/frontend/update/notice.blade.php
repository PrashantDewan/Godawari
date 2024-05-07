@extends('frontend.layout.main')
@section('content')


    <div class="page-banner-area bg-2">
        <div class="container">
            <div class="page-banner-content">
                <h1>Notice</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Pages</li>
                    <li>Latest Notice</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="latest-news-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="latest-news-left-content pr-20
                            ">
                        <div class="latest-news-card-area">
                            <h3>Notice</h3>
                            <div class="row">
                                @foreach ($notices as $notice)
                                <div class="col-lg-6 col-md-6">

                                        <div class="single-news-card">
                                            <div class="news-img">
                                                <a href="{{ route('notice.details.front',$notice->id) }}"><img src="{{ asset($notice->notice_image) }}"
                                                        alt="Image"></a>
                                            </div>
                                            <div class="news-content">
                                                <a href="{{ route('notice.details.front',$notice->id) }}">
                                                    <h3>{{ $notice->subject }}</h3>
                                                </a>
                                                <a href="{{ route('notice.details.front',$notice->id) }}" class="read-more-btn">Read More<i
                                                        class="flaticon-next"></i></a>
                                            </div>
                                        </div>

                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="related-post-area">
                        <h3>Recent Notice</h3>
                        <div class="related-post-box">
                            @foreach ($recent_notices as $recent_notice)
                                <div class="related-post-content">
                                    <a href="{{ route('notice.details.front',$recent_notice->id) }}"><img src="{{ asset($recent_notice->notice_image) }}"></a>
                                    <h4><a href="{{ route('notice.details.front',$recent_notice->id) }}">{{ $recent_notice->subject }}</a>
                                    </h4>
                                </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

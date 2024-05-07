@extends('frontend.layout.main')
@section('content')
    <div class="page-banner-area bg-2">
        <div class="container">
            <div class="page-banner-content">
                <h1>News Details </h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Pages</li>
                    <li>News Details</li>
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
                            <img src="{{ asset( $news->news_image ) }}" alt="Image">
                            <div class="list">
                                <ul>

                                    <li class="fw-bold"><i class="flaticon-briefcase "></i>{{ \Carbon\Carbon::parse($news->date)->format('M-d-Y') }}</li>
                                </ul>
                            </div>
                            <h2>{{ $news->subject }}</h2>
                            <p> {{ $news->news_description }} </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="category-list">
                        <h3>Category List</h3>
                        <ul>
                            @foreach ($news_categories as $category )
                            <li>
                                <a href="academics.html"> {{ $category->news_category }} <i class="ri-arrow-drop-right-fill"></i></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="related-post-area">
                        <h3>Recent Post</h3>
                        <div class="related-post-box">
                            @foreach ($recent_newss as $recent_news)


                            <div class="related-post-content">
                                <a href="{{ route('news.single',$recent_news->id) }}"><img src=" {{ asset( $recent_news->news_image ) }}" alt="Image"></a>
                                <h4><a href="{{ route('news.single',$recent_news->id) }}"> {{ $recent_news->subject }}</a>
                                </h4>
                                <p><i class="flaticon-briefcase"></i> {{ \Carbon\Carbon::parse($news->date)->format('M-d-Y') }}</p>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

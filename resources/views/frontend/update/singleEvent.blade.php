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
                            <img src="{{ asset( $events->event_image ) }}" alt="Image">
                            <div class="list">
                                <ul>
                                    <li class="fw-bolder">{{ \Carbon\Carbon::parse($events->date)->format('M-d-Y') }}</li>
                                </ul>
                            </div>
                            <h2>{{ $events->event_name }}</h2>
                            <p>{{ $events->event_description }}</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="related-post-area">
                        <h3>Recent Post</h3>
                        <div class="related-post-box">
                            @foreach ($recent_events as $recent_event)


                            <div class="related-post-content">
                                <a href="{{ route('event.details.front', $recent_event->id )}}"><img src="{{ asset($recent_event->event_image) }}" alt="Image"></a>
                                <h4><a href="{{ route('event.details.front', $recent_event->id )}}">{{ $recent_event->event_name}}</a>
                                </h4>
                                <p><i class="flaticon-briefcase"></i> {{ \Carbon\Carbon::parse( $recent_event->date )->format('M-d-Y') }} </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

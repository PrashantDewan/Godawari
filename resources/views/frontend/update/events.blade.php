@extends('frontend.layout.main')
@section('content')
    <div class="page-banner-area bg-2">
        <div class="container">
            <div class="page-banner-content">
                <h1>Campus Life</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Campus Life</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="campus-life-area pt-100 pb-70">
        <div class="container">
            @if ( count($events) >0 )

            <div class="row justify-content-center">
                @foreach ( $events as $event)

                <div class="col-lg-4 col-md-6">
                    <div class="single-campus-card">
                        <div class="img">
                            <a href="{{ route('event.details.front', $event->id )}}"><img src="{{ asset( $event->event_image )}}"
                                    alt="Image"></a>
                        </div>
                        <div class="campus-content">
                            <span>{{ \Carbon\Carbon::parse($event->date)->format('M-d-Y') }}</span>
                            <a href="{{ route('event.details.front', $event->id )}}">
                                <h3>{{ $event->event_name}}</h3>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <h3>Recently no any updates on Event !!!</h3>
            @endif
        </div>
    </div>
@endsection

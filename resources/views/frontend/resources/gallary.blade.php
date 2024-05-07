@extends('frontend.layout.main')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img5">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Gallery
                </h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Project Section Start -->
    <div class="style6 pt-100 pb-100 md-pt-30 md-pb-20">
        <div class="container">
            <div class="row">
                @if (count($galleries) > 0  )
                @foreach ( $galleries as $gallery )
                <div class="col-lg-4 col-md-6 mb-30">



                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset( $gallery->gallery_image ) }}"
                                alt="images" width="100%">
                        </div>
                        <div class="project-content text-center ">
                            <div class="project-inner ">
                                <h3 class="title">{{ $gallery->gallery_name }}</h3>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
                @else
                <h2>Recently there no any Gallery Avaliable !!</h2>
                @endif
            </div>
        </div>
    </div>
    <!-- Project Section End -->

    <!-- Contact Section End -->


    </div>
    <!-- Main content End -->
@endsection

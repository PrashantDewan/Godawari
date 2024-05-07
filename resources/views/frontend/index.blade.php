@extends('frontend.layout.main')
@section('content')
<div class="banner-area banner-area-five">
    <video loop muted autoplay poster="#" class="background-video">
        <source src="{{ asset('frontend/assets/images/the-hague-27994.mp4') }}" type="video/mp4">
    </video>
    <div class>
        <div class="slider-item">
            <div class="container-fluid">
                <div class="slider-content">
                    <h1>Explore Your Potential & Talents In Sanu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                        mattis pulvinar dapibus dolor sit amet consec</p>
                    <a href="{{ route('fee.structure') }}" class="default-btn btn">Start a Journey <i class="flaticon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="campus-information-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1300" data-aos-once="true">
                <div class="campus-content">
                    <div class="campus-title">
                        <h2>Godawari Vidya Mandir</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut
                            labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation ulla mco
                            laboris nisi ut </p>
                    </div>
                    <div class="list">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <h5>Montessori</h5>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <h5>Playground</h5>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <h5>Library</h5>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <h5>Computer Lab</h5>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <h5>Science Lab</h5>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <h5>Transportation</h5>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <h5>First Aid Section</h5>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <h5>Hostel</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="counter">
                        <div class="row">
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer"><?php
                                                                $startYear = 1994; // Starting year
                                                                $currentYear = date('Y'); // Current year

                                                                $yearsDifference = $currentYear - $startYear;

                                                                echo $yearsDifference;
                                                                ?></span>
                                        <span class="target">+</span>
                                    </h1>
                                    <p>Years Of Experience</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer" data-count="30">00</span>
                                        <span class="target heading-color">k</span><span class="target">+</span>
                                    </h1>
                                    <p>Passed Students</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer" data-count="52">00</span>
                                        <span class="target heading-color">k</span>
                                    </h1>
                                    <p>Current Student</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('about.executive') }}" class="default-btn btn">Learn More<i class="flaticon-next"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="estemate-form">
                    <h3>New Notices</h3>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="">
                                <div class="form-group">
                                    <h5>Holiday on Vadra 7</h5>
                                    <p>This is to notice that the school will remain close for vadra 7 for gobardhan puja</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-12">
                            <a href="">
                                <div class="form-group">
                                    <h5>Holiday on Vadra 7</h5>
                                    <p>This is to notice that the school will remain close for vadra 7 for gobardhan puja</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-12">
                            <a href="">
                                <div class="form-group">
                                    <h5>Holiday on Vadra 7</h5>
                                    <p>This is to notice that the school will remain close for vadra 7 for gobardhan puja</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-12">
                            <a href="">
                                <div class="form-group">
                                    <h5>Holiday on Vadra 7</h5>
                                    <p>This is to notice that the school will remain close for vadra 7 for gobardhan puja</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-12">
                            <a href="">
                                <div class="form-group">
                                    <h5>Holiday on Vadra 7</h5>
                                    <p>This is to notice that the school will remain close for vadra 7 for gobardhan puja</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="default-btn btn">View All Notices</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="academic-area pt-100 pb-70 bg-f4f6f9">
    <div class="container-fluid">
        <div class="section-title">
            <h2>Faculties</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">
                <div class="single-academics-card2 bg-1">
                    <div class="serial">
                        <p>01.</p>
                    </div>
                    <div class="academic-content">
                        <div class="academic-top-content">
                            <i class="flaticon-graduation"></i>
                            <a href="{{ route('scholarship') }}">
                                <h3>Montessori</h3>
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur ad
                            piscing elit ut elit tellus luctus nec dolor sit amet consec teturul</p>
                        <a href="{{ route('scholarship') }}" class="read-more-btn white-color">More Details<i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400" data-aos-once="true">
                <div class="single-academics-card2 bg-2">
                    <div class="serial">
                        <p>02.</p>
                    </div>
                    <div class="academic-content">
                        <div class="academic-top-content">
                            <i class="flaticon-graduation"></i>
                            <a href="{{ route('fee.structure') }}">
                                <h3>Pre Primary</h3>
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur ad
                            piscing elit ut elit tellus luctus nec dolor sit amet consec teturul</p>
                        <a href="{{ route('fee.structure') }}" class="read-more-btn white-color">More Deatils<i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600" data-aos-once="true">
                <div class="single-academics-card2 bg-3">
                    <div class="serial">
                        <p>03.</p>
                    </div>
                    <div class="academic-content">
                        <div class="academic-top-content">
                            <i class="flaticon-graduation"></i>
                            <a href="academics-details.html">
                                <h3>Primary</h3>
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur ad
                            piscing elit ut elit tellus luctus nec dolor sit amet consec teturul</p>
                        <a href="academics-details.html" class="read-more-btn white-color">Undergraduate<i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600" data-aos-once="true">
                <div class="single-academics-card2 bg-3">
                    <div class="serial">
                        <p>03.</p>
                    </div>
                    <div class="academic-content">
                        <div class="academic-top-content">
                            <i class="flaticon-graduation"></i>
                            <a href="academics-details.html">
                                <h3>Secondary</h3>
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur ad
                            piscing elit ut elit tellus luctus nec dolor sit amet consec teturul</p>
                        <a href="academics-details.html" class="read-more-btn white-color">Undergraduate Education<i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="events-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Events</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis </p>
        </div>
        <div class="events-slider mb-20 owl-carousel owl-theme">
            @foreach ($events as $event)

            <div class="single-events-card style2">
                <div class="events-image">
                    <a href="events-details.html"><img src="{{ asset( $event->event_image ) }} " alt="Image"></a>
                </div>
                <div class="events-content">
                    <a href="events-details.html">
                        <h3>{{ $event->event_name }}</h3>
                    </a>
                    <div class="admin-and-date">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <p><a href="events-details.html"><i class="flaticon-student-with-graduation-cap"></i>{{ Illuminate\Support\Str::limit($event->event_description, $limit = 20, $end = '...') }}</a></p>
                            </li>
                            <li>
                                <p><a href="events-details.html"><i class="flaticon-clock"></i>{{ $event->date }}</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="single-events-card style2">
                    <div class="events-image">
                        <a href="events-details.html"><img src="assets/images/events/events-2.jpg" alt="Image"></a>
                    </div>
                    <div class="events-content">
                        <a href="events-details.html">
                            <h3>Regular WordPress Meetup In New Jersey, USA</h3>
                        </a>
                        <div class="admin-and-date">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <p><a href="events-details.html"><i
                                                class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                                </li>
                                <li>
                                    <p><a href="events-details.html"><i class="flaticon-clock"></i>April 10,2022</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-events-card style2">
                    <div class="events-image">
                        <a href="events-details.html"><img src="assets/images/events/events-3.jpg" alt="Image"></a>
                    </div>
                    <div class="events-content">
                        <a href="events-details.html">
                            <h3>Monday Night Concert In Lake View,Mountain City</h3>
                        </a>
                        <div class="admin-and-date">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <p><a href="events-details.html"><i
                                                class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                                </li>
                                <li>
                                    <p><a href="events-details.html"><i class="flaticon-clock"></i>April 10,2022</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-events-card style2">
                    <div class="events-image">
                        <a href="events-details.html"><img src="assets/images/events/events-1.jpg" alt="Image"></a>
                    </div>
                    <div class="events-content">
                        <a href="events-details.html">
                            <h3>Planning And Facilitating Effective Meetings</h3>
                        </a>
                        <div class="admin-and-date">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <p><a href="events-details.html"><i
                                                class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                                </li>
                                <li>
                                    <p><a href="events-details.html"><i class="flaticon-clock"></i>April 10,2022</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-events-card style2">
                    <div class="events-image">
                        <a href="events-details.html"><img src="assets/images/events/events-2.jpg" alt="Image"></a>
                    </div>
                    <div class="events-content">
                        <a href="events-details.html">
                            <h3>Planning And Facilitating Effective Meetings</h3>
                        </a>
                        <div class="admin-and-date">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <p><a href="events-details.html"><i
                                                class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                                </li>
                                <li>
                                    <p><a href="events-details.html"><i class="flaticon-clock"></i>April 10,2022</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-events-card style2">
                    <div class="events-image">
                        <a href="events-details.html"><img src="assets/images/events/events-3.jpg" alt="Image"></a>
                    </div>
                    <div class="events-content">
                        <a href="events-details.html">
                            <h3>Planning And Facilitating Effective Meetings</h3>
                        </a>
                        <div class="admin-and-date">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <p><a href="events-details.html"><i
                                                class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                                </li>
                                <li>
                                    <p><a href="events-details.html"><i class="flaticon-clock"></i>April 10,2022</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-events-card style2">
                    <div class="events-image">
                        <a href="events-details.html"><img src="assets/images/events/events-1.jpg" alt="Image"></a>
                    </div>
                    <div class="events-content">
                        <a href="events-details.html">
                            <h3>Planning And Facilitating Effective Meetings</h3>
                        </a>
                        <div class="admin-and-date">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <p><a href="events-details.html"><i
                                                class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                                </li>
                                <li>
                                    <p><a href="events-details.html"><i class="flaticon-clock"></i>April 10,2022</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
        </div>
    </div>
</div>



<div class="admisssion-area ptb-100">
    <div class="container">
        <div class="admission-content">
            <div class="section-title">
                <h2>Godawari Vidhya Mandir Admission</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
                </p>
            </div>
            <div class="admission-image">
                <img src="assets/images/admission/admission-2.jpg" alt="Image">
                <div class="icon">
                    <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i class="ri-play-fill"></i></a>
                </div>
            </div>
            <div class="query text-center">
                <a href="{{ route('resourcesGallery') }}" class="default-btn btn">Display More<i class="flaticon-next"></i></a>
            </div>
        </div>
    </div>
</div>







<div class="lates-news-area ptb-100 bg-f4f6f9">
    <div class="container">
        <div class="section-title">
            <h2>Latest News</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis</p>
        </div>
        <div class="news-slider owl-carousel owl-theme">
            @foreach ($newss as $news)

            @endforeach
            <div class="single-news-card style2">
                <div class="news-img">
                    <a href="news-details.html"><img src="{{ asset( $news->news_image) }}" alt="Image"></a>
                </div>
                <div class="news-content">
                    <div class="list">
                        <ul>
                            <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a></li>
                            <li><i class="flaticon-tag"></i>Social Sciences</li>
                        </ul>
                    </div>
                    <a href="news-details.html">
                        <h3>{{ $news->subject }}</h3>
                    </a>
                    <a href="news-details.html" class="read-more-btn">read More<i class="flaticon-next"></i></a>
                </div>
            </div>
            {{-- <div class="single-news-card style2">
                    <div class="news-img">
                        <a href="news-details.html"><img src="assets/images/news/news-2.jpg" alt="Image"></a>
                    </div>
                    <div class="news-content">
                        <div class="list">
                            <ul>
                                <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a></li>
                                <li><i class="flaticon-tag"></i>Social Sciences</li>
                            </ul>
                        </div>
                        <a href="news-details.html">
                            <h3>How To Use Technology To Adapt Your Talent To The World</h3>
                        </a>
                        <a href="news-details.html" class="read-more-btn">read More<i class="flaticon-next"></i></a>
                    </div>
                </div>
                <div class="single-news-card style2">
                    <div class="news-img">
                        <a href="news-details.html"><img src="assets/images/news/news-3.jpg" alt="Image"></a>
                    </div>
                    <div class="news-content">
                        <div class="list">
                            <ul>
                                <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a></li>
                                <li><i class="flaticon-tag"></i>Social Sciences</li>
                            </ul>
                        </div>
                        <a href="news-details.html">
                            <h3>Here Are The Things To Look For When Selecting Course</h3>
                        </a>
                        <a href="news-details.html" class="read-more-btn">read More<i class="flaticon-next"></i></a>
                    </div>
                </div>
                <div class="single-news-card style2">
                    <div class="news-img">
                        <a href="news-details.html"><img src="assets/images/news/news-1.jpg" alt="Image"></a>
                    </div>
                    <div class="news-content">
                        <div class="list">
                            <ul>
                                <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a></li>
                                <li><i class="flaticon-tag"></i>Social Sciences</li>
                            </ul>
                        </div>
                        <a href="news-details.html">
                            <h3>Professor Tom Comments On The volunteer B. Snack Brand</h3>
                        </a>
                        <a href="news-details.html" class="read-more-btn">read More<i class="flaticon-next"></i></a>
                    </div>
                </div>
                <div class="single-news-card style2">
                    <div class="news-img">
                        <a href="news-details.html"><img src="assets/images/news/news-2.jpg" alt="Image"></a>
                    </div>
                    <div class="news-content">
                        <div class="list">
                            <ul>
                                <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a></li>
                                <li><i class="flaticon-tag"></i>Social Sciences</li>
                            </ul>
                        </div>
                        <a href="news-details.html">
                            <h3>Professor Tom Comments On The volunteer B. Snack Brand</h3>
                        </a>
                        <a href="news-details.html" class="read-more-btn">read More<i class="flaticon-next"></i></a>
                    </div>
                </div>
                <div class="single-news-card style2">
                    <div class="news-img">
                        <a href="news-details.html"><img src="assets/images/news/news-3.jpg" alt="Image"></a>
                    </div>
                    <div class="news-content">
                        <div class="list">
                            <ul>
                                <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a></li>
                                <li><i class="flaticon-tag"></i>Social Sciences</li>
                            </ul>
                        </div>
                        <a href="news-details.html">
                            <h3>Professor Tom Comments On The volunteer B. Snack Brand</h3>
                        </a>
                        <a href="news-details.html" class="read-more-btn">read More<i class="flaticon-next"></i></a>
                    </div>
                </div>
                <div class="single-news-card style2">
                    <div class="news-img">
                        <a href="news-details.html"><img src="assets/images/news/news-2.jpg" alt="Image"></a>
                    </div>
                    <div class="news-content">
                        <div class="list">
                            <ul>
                                <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a></li>
                                <li><i class="flaticon-tag"></i>Social Sciences</li>
                            </ul>
                        </div>
                        <a href="news-details.html">
                            <h3>Professor Tom Comments On The volunteer B. Snack Brand</h3>
                        </a>
                        <a href="news-details.html" class="read-more-btn">read More<i class="flaticon-next"></i></a>
                    </div>
                </div> --}}
        </div>
    </div>
</div>
@endsection
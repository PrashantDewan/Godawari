@extends('admin.layouts.master')
@section('title', 'Dashboard')
@section('content')


<!-- Main content -->
<section class="content">
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\News::all()->count() }}</h3>
                            <p>News</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <a href="{{route('admin.news.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ \App\Models\Notice::all()->count() }}</h3>
                            <p>Notice</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('admin.notice.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ \App\Models\Teacher::all()->count() }}</h3>
                            <p>Teachers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('admin.teacher.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\Event::all()->count() }}</h3>
                            <p>Events</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <a href="{{route('admin.event.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ \App\Models\Download::all()->count() }}</h3>
                            <p>Download File</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-download"></i>
                        </div>
                        <a href="{{route('admin.download.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\Faculty::all()->count() }}</h3>
                            <p>Message From Executives</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comment"></i>
                        </div>
                        <a href="{{route('admin.faculty.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ \App\Models\ChiefTestimonial::all()->count() }}</h3>
                            <p>What Our Leader's Say</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="{{route('admin.testimonial.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ \App\Models\ManagementTeam::all()->count() }}</h3>
                            <p>Administrator</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <a href="{{route('admin.team.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ \App\Models\Gallery::all()->count() }}</h3>
                            <p>Gallery</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-film"></i></i>
                        </div>
                        <a href="{{route('admin.gallery.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ \App\Models\Career::all()->count() }}</h3>
                            <p>Career</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-person-booth"></i></i>
                        </div>
                        <a href="{{route('admin.career.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\CareerApplication::all()->count() }}</h3>
                            <p>Career Application</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file"></i>
                        </div>
                        <a href="{{route('admin.career.application')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{-- <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ \App\Models\Alumni::all()->count() }}</h3>
                            <p>Alumni</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="{{route('admin.alumni.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div> --}}
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ \App\Models\Contact::all()->count() }}</h3>
                            <p>Contact</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <a href="{{route('admin.contact.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ \App\Models\Fee::all()->count() }}</h3>
                            <p>Fee</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-rupee-sign"></i>
                        </div>
                        <a href="{{route('admin.fee.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\Classes::all()->count() }}</h3>
                            <p>Classes</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <a href="{{route('admin.classes.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- /.content -->
@endsection

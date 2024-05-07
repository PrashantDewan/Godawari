@extends('frontend.layout.main')
@section('content')
   <!-- Breadcrumbs Start -->
   <div class="rs-breadcrumbs img8">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                +2 Science
                <span class="watermark">Science</span>
            </h1>
            <span class="sub-text">Our +2 science program offers the study of the natural world's behavior and
                structure through experimentation and observation.</span>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Services Single Start -->
<div class="rs-services-single pt-100 pb-100 md-pt-30 md-pb-2">
    <div class="container custom">
        <div class="row">
            <div class="col-lg-8 pr-45 md-pr-15 md-mb-20">
                <h3 class="mt-20 text-danger text-uppercase">Plus Two +2 Level Affiliated to NEB</h3>
                <p>
                    Plus Two science course prepares students to specialize in any
                    area of interest within the discipline of science as a
                    whole. Since its inception, Vishwa Adarsha science
                    department has achieved remarkable HSEB results.
                </p>
                <p><strong>Course Duration</strong> : 2 Years</p>
                <p><strong>Eligibility Criteria</strong> : Students will be considered eligible for registration based
                    on
                    their SEE’s GPA where they must score C+ in English, Math, and Science. </p>

                <h3 class="mt-20 text-danger text-uppercase">XI Curriculum</h3>

                <ul class="listing-style">
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>English</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Physics</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Chemistry</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Biology</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Computer Science</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Mathematics</span>
                    </li>
                </ul>
                <h3 class="mt-20 text-danger text-uppercase">XII Curriculum</h3>

                <ul class="listing-style">
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>English</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Physics</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Chemistry</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Biology</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Nepali</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Mathematics</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Computer Science</span>
                    </li>
                </ul>

            </div>
            <div class="col-lg-4">
                <ul class="services-list">
                    <li><a class="active" href="{{ route('course.science') }}">+2 Science</a></li>
                    <li><a href="{{ route('course.management') }}">+2 Management</a></li>
                </ul>
                <div class="services-add mb-20 mt-10">
                    <div class="rs-videos address-item mb-35">
                        <div class="address-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <h3 class="title">Have any Questions? <br> Call us Today!</h3>
                    <div class="sec-title text-center">
                        <h3 class="title title2">
                            <a href="tel:025582163">(+977) 025-582163</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Single End -->


    </div>
    <!-- Main content End -->
@endsection

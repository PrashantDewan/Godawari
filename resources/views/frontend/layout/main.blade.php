<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/sanu/default/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2023 03:07:44 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/remixicon.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('froantend/assets/css/dark.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/favicon.png') }}">

    <link rel="stylesheet" type="text/css" href="{{asset("assets/custom.css")}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset("assets/style.css")}}"> --}}

    {{-- Font awsome icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Godwari Secondary School</title>
</head>

<body>

    <div class="preloader-area">
        <div class="spinner">
            <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
            </div>
        </div>
    </div>


    <div class="top-header-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="header-left-content">
                        <p>Get the latest updates and news of Godwari Vidhya Mandir</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header-right-content">
                        <div class="list">
                            <ul>
                                <li><i class="fa-solid fa-phone" style="color: #ffffff;"></i></li>
                                <li>+977 025-580748</li>
                                <li><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></li>
                                <li>Godawari@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area nav-bg-2">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('frontend/assets/images/logo.png') }}" width="200px" class="main-logo" lt="logo">
                            <img src="{{ asset('frontend/assets/images/white-logo.png') }}" width="200px" class="white-logo" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="desktop-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" width="165px" class="main-logo" alt="logo">
                        <img src="{{ asset('frontend/assets/images/white-logo.png') }}" width="200px" class="white-logo" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    About us
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('about')}}" class="nav-link">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('teacher')}}" class="nav-link">Teacher</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('administrator')}}" class="nav-link">Adminstration</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('management.team') }}" class="nav-link">Support Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about.alumni') }}" class="nav-link">Alumni</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about.executive') }}" class="nav-link">Message From Executive</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Resources
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('resourcesGallery') }}" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('download.file') }}" class="nav-link">Downloads</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Update
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('events.front') }}" class="nav-link">Event</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href=" {{ route('news.front')}} " class="nav-link">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('notice.front')}}" class="nav-link">Notice</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Academic
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('scholarship') }}" class="nav-link">Scholarship</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('fee.structure') }}" class="nav-link">Fee Structure</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <div class="others-options">
                            <div class="icon">
                                <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="icon">
                            <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
                <div class="modal-body">
                    <a href="index.html">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" width="200px" class="main-logo" alt="logo">
                        <img src="{{ asset('frontend/assets/images/white-logo.png') }}" width="200px" class="white-logo" alt="logo">
                    </a>
                    <div class="sidebar-content">
                        <h3>About Us</h3>
                        <p>Godawari Vidya Mandir, a leading educational institution providing quality education from
                            Nursery to Grade 12. With a rich legacy of proven educational excellence since 2049 B.S, we
                            are committed to nurturing young minds and shaping them into confident, responsible
                            individuals.</p>
                        <div class="sidebar-btn">
                            <a href="{{ route('contact') }}" class="default-btn">Let’s Talk</a>
                        </div>
                    </div>
                    <div class="sidebar-contact-info">
                        <h3>Contact Information</h3>
                        <ul class="info-list">
                            <li><i class="ri-phone-fill"></i> <a href="tel:025-580748">025-580748</a></li>
                            <li><i class="ri-mail-line"></i><a href=""><span class="__cf_email__">godawari@gmail.com</span></a>
                            </li>
                            <li><i class="ri-map-pin-line"></i> Itahari 8, Sunsari Nepal</li>
                        </ul>
                    </div>
                    <ul class="sidebar-social-list">
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100064039508775" target="_blank"><i class="flaticon-facebook"></i></a>
                        </li>
                    </ul>
                    <div class="contact-form">
                        <h3>Ready to Get Started?</h3>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message<span></span></button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-logo-area">
                        <a href="index.html"><img src="{{ asset('frontend/assets/images/logo.png') }}" width="250px" alt="Image"></a>
                        <p>Sanu University was established by J.H Merthon in 1810 for the public benefit. Afterwards, it
                            is recognized globally</p>
                        <div class="contact-list">
                            <ul>
                                <li><a href="tel:+977025-580748">+977 025-580748
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widjet">
                        <h3>Campus Life</h3>
                        <div class="list">
                            <ul>
                                <li><a href="campus-life.html">About</a></li>
                                <li><a href="campus-life.html">Contact Us</a></li>
                                <li><a href="campus-life.html">Notices</a></li>
                                <li><a href="campus-life.html">Courses</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widjet">
                        <h3>Social</h3>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100064039508775&tabs=timeline&width=340&height=331&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=2700072530117382" width="340" height="301" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
            <div class="shape">
                <img src="{{ asset('frontend/assets/images/shape-1.png') }}" alt="Image">
            </div>
        </div>
    </div>


    <div class="copyright-area">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-lg-6 col-md-4">
                        <div class="social-content">
                            <ul>
                                <li><span>Follow Us On</span></li>
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100064039508775" target="_blank"><i class="ri-facebook-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="copy">
                            <p>© Godwari IT Services Are Proudly Supported by <a href="https://hunchhadigital.com/" target="_blank">Hunchha Digital</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
        <i class="ri-arrow-up-s-line"></i>
    </div>


    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/jquery.meanmenu.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/carousel-thumbs.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/appear.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

    @yield('script')
</body>

</html>

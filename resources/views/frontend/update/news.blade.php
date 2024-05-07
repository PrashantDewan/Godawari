@extends('frontend.layout.main')
@section('content')
    <div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
                <div class="modal-body">
                    <a href="index.html">
                        <img src="assets/images/logo.png" class="main-logo" alt="logo">
                        <img src="assets/images/white-logo.png" class="white-logo" alt="logo">
                    </a>
                    <div class="sidebar-content">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua.</p>
                        <div class="sidebar-btn">
                            <a href="contact.html" class="default-btn">Let’s Talk</a>
                        </div>
                    </div>
                    <div class="sidebar-contact-info">
                        <h3>Contact Information</h3>
                        <ul class="info-list">
                            <li><i class="ri-phone-fill"></i> <a href="tel:9901234567">+990-123-4567</a></li>
                            <li><i class="ri-mail-line"></i><a
                                    href="/cdn-cgi/l/email-protection#a2cac7cececde2d1c3ccd78cc1cdcf"><span
                                        class="__cf_email__"
                                        data-cfemail="82eae7eeeeedc2f1e3ecf7ace1edef">[email&#160;protected]</span></a></li>
                            <li><i class="ri-map-pin-line"></i> 413 North Las Vegas, NV 89032</li>
                        </ul>
                    </div>
                    <ul class="sidebar-social-list">
                        <li>
                            <a href="https://www.facebook.com" target="_blank"><i class="flaticon-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com" target="_blank"><i class="flaticon-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/?lang=en" target="_blank"><i class="flaticon-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="https://instagram.com/?lang=en" target="_blank"><i class="flaticon-instagram"></i></a>
                        </li>
                    </ul>
                    <div class="contact-form">
                        <h3>Ready to Get Started?</h3>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" required
                                            data-error="Please enter your name" placeholder="Your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="Your email address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control" required
                                            data-error="Please enter your phone number" placeholder="Your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" cols="30" rows="6" required
                                            data-error="Please enter your message" placeholder="Write your message..."></textarea>
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


    <div class="page-banner-area bg-2">
        <div class="container">
            <div class="page-banner-content">
                <h1>Latest News</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Pages</li>
                    <li>Latest News</li>
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
                            <h3>Latest News</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    @foreach ($newss as $news)
                                        <div class="single-news-card">
                                            <div class="news-img">
                                                <a href="{{ route('news.single',$news->id) }}"><img src="{{ asset($news->news_image) }}"
                                                        alt="Image"></a>
                                            </div>
                                            <div class="news-content">
                                                <a href="{{ route('news.single',$news->id) }}">
                                                    <h3>{{ $news->subject }}</h3>
                                                </a>
                                                <a href="{{ route('news.single',$news->id) }}" class="read-more-btn">Read More<i
                                                        class="flaticon-next"></i></a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="category-list">
                        <h3>Category List</h3>
                        <ul>
                            @foreach ($news_categories as $category)
                                <li>
                                    <a href="academics.html">{{ $category->news_category }}<i
                                            class="ri-arrow-drop-right-fill"></i></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="related-post-area">
                        <h3>Related Post</h3>
                        <div class="related-post-box">
                            @foreach ($recent_newss as $recent_news)
                                <div class="related-post-content">
                                    <a href="{{ route('news.single',$recent_news->id) }}"><img src="{{ asset($recent_news->news_image) }}"></a>
                                    <h4><a href="{{ route('news.single',$recent_news->id) }}">{{ $recent_news->subject }}</a>
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

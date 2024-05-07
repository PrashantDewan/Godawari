@extends('frontend.layout.main')
@section('content')
<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>About us</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </div>
</div>


<div class="health-care-details pt-100 pb-70 ">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-8 " style="width: 100%">
                <div class="health-details">
                    <div class="top-content row align-items-center">
                        <div class="col-lg-6">
                            <div class="medical-care">
                                <h1>Introducing Godawari Vidya Mandir</h1>
                                <p>Established In 2055 B.S. by a group of qualified and dedicated
                                    professionals, is one of The leading institutions In the eastern part of Nepal. It has been
                                    running It's plus two programs right from Its Inception. It Is an umbrella institution for
                                    plus two (Science & Management).

                                    The college has its own beautiful buildings with a remarkable compound of Ten Katthas. It
                                    has basketball, volleyball, and table tennis courts inside its own premises. It has a
                                    beautiful garden within a walled enclosure that provides a green and quiet environment. </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation ulla mco
                                    lab</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation ulla mco
                                    laboris nisi ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem
                                    incid idunt ut labore </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="medical-card">
                                <img src="{{asset('image1.jpg')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="madical-care-content">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="medical-card">
                                    <img src="{{asset('image.jpg')}}" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="medical-care">
                                    <h2>Why choose us</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid
                                        idunt ut labore et dolore magna aliq</p>
                                    <div class="list">
                                        <ul>
                                            <li>Planned Care and Population Health</li>
                                            <li>Patient and Caregiver Engagement</li>
                                            <li>Comprehensiveness and Coordination</li>
                                            <li>Evaluation and management services</li>
                                            <li>Evidence-based preventive services</li>
                                            <li>Population-based management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
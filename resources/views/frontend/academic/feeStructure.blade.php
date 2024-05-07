@extends('frontend.layout.main')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img9">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Fee Structure
                </h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="rs-team style1 team-style1 pt-100 pb-100 md-pt-20 md-pb-20" style="overflow: scroll;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Course Name</th>
                                <th scope="col" style="white-space: nowrap">Admission Fee</th>
                                <th scope="col" style="white-space: nowrap">Monthly Fee</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <h2>comming soon</h2>
                            {{-- @foreach ($fees as $fee )


                            <tr>
                                <th scope="row">{{ $fee->id }}</th>
                                <td>{{ $fee-> }}</td>
                                <td>{{ $fee->id }}/-</td>
                                <td>4,000/-</td>
                                <td>68,000/-</td>
                            </tr>

                            @endforeach --}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->


    </div>
    <!-- Main content End -->
@endsection

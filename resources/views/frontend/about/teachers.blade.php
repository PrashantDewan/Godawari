@extends('frontend.layout.main')
@section('content')
<div class="page-banner-area bg-1">
    <div class="container">
        <div class="page-banner-content">
            <h1>Our Teachers</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </div>
</div>


<!-- Contact Section Start -->
<div class="rs-team style1 team-style1 pt-100 pb-100 md-pt-20 md-pb-20">
    <div class="container p-3">
        <div class="row">
            <div class="col-lg-12">
                @if( count($teachers) > 0)
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Teacher's Name</th>
                            <th scope="col">Subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                        <tr>
                            <th scope="row">{{ $teacher->id }}</th>
                            <td>{{ $teacher->teacher_name }}</td>
                            <td>{{ $teacher->subject }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <h2>Recently there is on any teacher !!</h2>
                @endif

            </div>
        </div>
    </div>

</div>
<!-- Contact Section End -->


</div>
<!-- Main content End -->
@endsection
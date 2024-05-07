@extends('frontend.layout.main')
@section('content')
<div class="page-banner-area bg-3">
    <div class="container">
        <div class="page-banner-content">
            <h1>Message from our faculty chief</h1>
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
                @if (count($mgmgtteam) > 0)
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Team</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $mgmgtteam as $team )


                        <tr>
                            <th scope="row">{{ $team->id }}</th>
                            <td>{{ $team->team_name }}</td>
                            <td>{{ $team->team_role }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                @else
                <h2>Recently there is on any support team !!</h2>
                @endif
            </div>
        </div>
    </div>

</div>
<!-- Contact Section End -->


</div>
<!-- Main content End -->
@endsection
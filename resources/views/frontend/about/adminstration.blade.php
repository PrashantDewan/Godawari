@extends('frontend.layout.main')
@section('content')
<div class="page-banner-area bg-1">
    <div class="container">
        <div class="page-banner-content">
            <h1>Our Administrator</h1>
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
            <div class="col-lg-12 col-sm-6" style="overflow:auto;">
                @if(count($admins) > 0)
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col" style="white-space: nowrap">Administrator name</th>
                            <th scope="col">Phone</th>
                            <th scope="col" style="white-space: nowrap">Administrator Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin )
                        <tr>
                            <th scope="row">{{ $admin->id }}</th>
                            <td>{{ $admin->admin_name }}</td>
                            <td>{{ $admin->phone }}</td>
                            <td>{{ $admin->admin_role }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <h2>Recently there is on any adminstrator !!</h2>
                @endif
            </div>
        </div>
    </div>

</div>
<!-- Contact Section End -->


    </div>
@endsection


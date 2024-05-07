@extends('frontend.layout.main')
@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img9">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Scholarship
            </h1>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Contact Section Start -->
<div class="rs-team style1 team-style1 pt-100 pb-100 md-pt-20 md-pb-20">
    <div class="container">



        <div class="row">
            <div class="col-lg-12">
                @if (count($scholarships) > 0)
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Position</th>
                            <th scope="col" style="width:40%;">Scholaship</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($scholarships as $scholarship)
                        <tr>
                            <th scope="row"> {{ $scholarship->id }} </th>
                            <td>{{ $scholarship->scholarship }}</td>
                            <td> {{ $scholarship->details }} </td>
                        </tr>
                        @endforeach




                    </tbody>

                </table>
                @else
                <h3>Sorry no any Scholarship Avaliable  !! </h3>
                @endif
                <h3><span>"Honorary Scholarship" </span><span style="color:red;">Grade A+ Students</span> </h3>

                <p>
                <ul>
                    <li>
                        The College provides full scholarship to the student from Nishahaya Bal Sewa Kendara, Itahari-4
                    </li>
                    <li>
                        The College provides full scholarship to the student from Nishahaya Bal Sewa Kendara, Itahari-4
                    </li>
                </ul>
                </p>
            </div>
        </div>

    </div>

</div>
<!-- Contact Section End -->


    </div>
    <!-- Main content End -->
@endsection

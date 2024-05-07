@extends('frontend.layout.main')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img9">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Download Files
                </h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="rs-contact contact-style2 bg9 pt-100 pb-100 md-pt-20 md-pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pr-40 md-pr-15 md-mb-50">
                    @if (count($files) > 0)


                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>File Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ( $files as $file )
                        <tbody>
                            <tr>
                                <td>{{ $file->id }}</td>
                                <td>{{ $file->file_name }}</td>
                                <td><a href="{{ $file->file }}"
                                        class="text-info">download</a>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    @else
                    <h2>Recently there is on any Files !!</h2>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    </div>
    <!-- Main content End -->
@endsection

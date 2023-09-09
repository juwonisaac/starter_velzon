@extends('layouts.auth.master-error')


@section('content')
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="text-center">
                        <img src="assets/images/error400-cover.png" alt="error img" class="img-fluid">
                        <div class="mt-3">
                            <h3 class="text-uppercase">Sorry, Page not Found ð­</h3>
                            <p class="text-muted mb-4">The page you are looking for not available!</p>
                            <a href="index.html" class="btn btn-success"><i class="mdi mdi-home me-1"></i>Back to home</a>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth-page content -->
@endsection

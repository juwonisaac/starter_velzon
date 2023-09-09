@extends('layouts.auth.master')

@push('page-script')
    <!-- particles js -->
    <script src="{{ asset('') }}assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="{{ asset('') }}assets/js/pages/particles.app.js"></script>
@endpush

@section('content')
    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="index.html" class="d-inline-block auth-logo">
                                <img src="assets/images/logo-light.png" alt="" height="20">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">
                        <div class="card-body p-4 text-center">
                            <lord-icon src="https://cdn.lordicon.com/hzomhqxz.json" trigger="loop"
                                colors="primary:#405189,secondary:#08a88a" style="width:180px;height:180px"></lord-icon>

                            <div class="mt-4 pt-2">
                                <h5>You are Logged Out</h5>
                                <p class="text-muted">Thank you for using <span class="fw-semibold">velzon</span> admin
                                    template</p>
                                <div class="mt-4">
                                    <a href="auth-signin-basic.html" class="btn btn-success w-100">Sign In</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->
@endsection

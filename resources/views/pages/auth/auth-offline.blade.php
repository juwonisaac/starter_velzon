@extends('layouts.auth.master-cover')

@section('content')
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <img src="https://img.themesbrand.com/velzon/images/auth-offline.gif" alt=""
                                    height="210">
                                <h3 class="mt-4 fw-semibold">We're currently offline</h3>
                                <p class="text-muted mb-4 fs-14">We can't show you this images because you aren't connected
                                    to the internet. When youâre back online refresh the page or hit the button below</p>
                                <button class="btn btn-success btn-border"
                                    onClick="window.location.href=window.location.href"><i
                                        class="ri-refresh-line align-bottom"></i> Refresh</button>
                            </div>
                        </div>
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

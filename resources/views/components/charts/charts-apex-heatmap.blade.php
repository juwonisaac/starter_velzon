@extends('layouts.master')

@push('vendor-script')
    <!-- apexcharts -->
    <script src="{{ asset('') }}assets/libs/apexcharts/apexcharts.min.js"></script>
@endpush

@push('page-script')
    <!-- heatmapscharts init -->
    <script src="{{ asset('') }}assets/js/pages/apexcharts-heatmap.init.js"></script>
@endpush

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Heatmap Charts</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apexcharts</a></li>
                        <li class="breadcrumb-item active">Heatmap Charts</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Heatmap Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="live-preview">
                        <div id="basic_heatmap" data-colors='["--vz-success", "--vz-secondary-bg"]' class="apex-charts"
                            dir="ltr"></div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Heatmap - Multiple Series</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="multiple_heatmap"
                        data-colors='["--vz-primary", "--vz-secondary", "--vz-success", "--vz-info", "--vz-warning", "--vz-danger", "--vz-dark", "--vz-primary", "--vz-secondary-bg"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Heatmap Color Range</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="color_heatmap" data-colors='["--vz-info", "--vz-success", "--vz-primary", "--vz-warning"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Heatmap - Range Without Shades</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="shades_heatmap" data-colors='["--vz-info", "--vz-primary"]' class="apex-charts" dir="ltr">
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection

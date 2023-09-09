@extends('layouts.master')

@push('page-script')
    <!-- materialdesign icon js-->
    <script src="{{ asset('') }}assets/js/pages/remix-icons-listing.js"></script>
@endpush

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Remix</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Icons</a></li>
                        <li class="breadcrumb-item active">Remix</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">

    </div><!-- end row -->

    <div class="row">
        <div class="col-12" id="icons"></div> <!-- end col-->
    </div><!-- end row -->
@endsection

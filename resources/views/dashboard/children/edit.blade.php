@extends('layouts.dashboard.app')
@section('title')
    {!! $title !!}
@endsection

@push('style')
    <style>
        .step {
            /* border: 1px solid #ccc; */
            padding: 20px;
            margin-bottom: 20px;
        }

        .progress-bar {
            width: 100%;
            background-color: #f3f3f3;
            height: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .progress-bar-fill {
            height: 100%;
            background-color: #4CAF50;
            width: 0%;
            /* Initial width */
            border-radius: 5px;
        }

        label.error {
            color: #FF4961;
            padding-top: 5px;
            font-size: 0.9rem;

        }

        .text-danger {
            color: #FF4961;
            font-size: 0.9rem;
            padding-top: 5px;
        }

        input.error,
        input.invalid {
            border-color: #FF4961;
        }
    </style>
@endpush

@section('content')
    <div class="app-content content">

        <div class="content-wrapper">
            <!-- begin: content header -->
            <div class="content-header row">
                <!-- begin: content header left-->
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{!! __('children.children') !!}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{!! route('dashboard.index') !!}">
                                        {!! __('dashboard.home') !!}
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{!! route('dashboard.children.index') !!}">
                                        {!! __('children.children') !!}
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <a href="{!! route('dashboard.children.create') !!}">
                                        {!! __('children.update_child') !!}
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end: content header left-->

            </div> <!-- end :content header -->

            <!-- begin: content body -->
            <div class="content-body">

                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <!-- begin: card header -->
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-colored-form-control">
                                        {!! __('children.update_child') !!}
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload-form"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end: card header -->

                                <!-- begin: card content -->
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        @include('dashboard.children.edit.form')
                                    </div>
                                    <!-- end: card content -->
                                </div>
                            </div> <!-- end: card  -->
                        </div><!-- end: row  -->
                    </div>
                </section><!-- end: sections  -->
            </div><!-- end: content body  -->
        </div> <!-- end: content wrapper  -->

    </div><!-- end: content app  -->
@endsection

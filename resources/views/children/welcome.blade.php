@extends('layouts.children.app')

@section('title')
    {!! $title !!}
@endsection
@section('content')
    <section>
        <div class="page-header min-vh-100">
            <div class="container">

                <div class="row">

                </div>

                <div class="row">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="card z-index-0  mt-2 col-xl-5 col-lg-6 ">

                            <div class="card-header pb-0 text-left bg-transparent">

                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{!! asset('assets/children/assets/img/logo.png') !!}" style="width: 220px">
                                </div>

                                {{-- <h3 class="font-weight-bolder text-dark text-gradient mt-2 mb-4">{!! __('auth.welcome_back') !!}
                                </h3> --}}
                            </div>
                            <div class="card-body">

                                <!-- begin: row -->
                                <div class="row">




                                    <div class="col-md-6">
                                        <a href="{!! route('child.get.register') !!}"
                                            class="btn bg-gradient-info mb-1 font-weight-bolder">{!! __('children.new_register') !!}
                                        </a>
                                    </div>

                                    <div class="col-md-6">
                                        <a href="{!! route('child.get.login') !!}"
                                            class="btn bg-gradient-info  mb-1 font-weight-bolder">{!! __('children.previous_register') !!}
                                        </a>
                                    </div>

                                </div>
                                <!-- end: row -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

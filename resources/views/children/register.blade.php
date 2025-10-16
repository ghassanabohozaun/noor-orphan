@extends('layouts.children.app')

@section('title')
    {!! $title !!}
@endsection
@section('content')
    <section>
        <div class="page-header min-vh-90">
            <div class="container">
                <div class="row">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="card  z-index-0 mt-2 col-xl-12 col-lg-12 col-sm-12 mt-6">
                            <div class="card-body">
                                @include('dashboard.children.create.form')
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

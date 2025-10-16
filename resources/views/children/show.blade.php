@extends('layouts.children.app')

@section('title')
    {!! $title !!}
@endsection
@section('content')
    <div class="main-content position-relative bg-gray-100 max-height-vh-90 h-100">

        <div class="container">
            <div class="card card-body blur shadow-blur mx-4 mt-7 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{!! asset('uploads/children/' . $child->childFile->picture_of_the_orphan_child) !!}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {!! $child->childFullName() !!}
                            </h5>
                        </div>
                    </div>


                    @include('dashboard.children.show.form')

                </div>
            </div>
        </div>

    </div>
@endsection

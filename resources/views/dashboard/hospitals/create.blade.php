@extends('dashboard.layout.app')

@php
    $title = "Create Hospital";
    $pageDes = "Here you can create hospital";
    $navTitle = $title;

@endphp

@section('title')
    {{ $title }}
@endsection
@section('nav-title')
    {{ $title }}
@endsection
@section('content')

{{-- <div class="row" style="margin-left: 320px">--}}
        <div class="col s12 l6">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title activator">Form To {{ $title }}</h5>
                    <form action="{{ route('hospitals.store') }}" method="post" enctype="multipart/form-data">
                      @include('dashboard.hospitals.form')
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Add Hospital
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>

{{-- </div>--}}


@endsection


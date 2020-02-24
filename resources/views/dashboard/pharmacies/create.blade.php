@extends('dashboard.layout.app')

@php
    $title = "Create Pharmacy";
    $pageDes = "Here you can create pharmacy";
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
                    <form action="{{ route('pharmacies.store') }}" method="post" enctype="multipart/form-data">
                      @include('dashboard.pharmacies.form')
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Add Medicine
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>

{{-- </div>--}}


@endsection



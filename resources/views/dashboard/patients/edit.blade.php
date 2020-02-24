@extends('dashboard.layout.app')

@php
    $title = "Edit Patient";
    $pageDes = "Here you can edit patient";
    $navTitle = $title;

@endphp

@section('title')
    {{ $title }}
@endsection
@section('nav-title')
    {{ $title }}
@endsection
@section('content')
   <div class="row">
    <div class="col s12 l6">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title activator">Form To {{ $title }}</h5>
                <form action="{{ route('patients.update' , ['id' => $patient->id]) }}" method="post" enctype="multipart/form-data">
                    {{ method_field('put') }}
                    @include('dashboard.patients.form')
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Update Patient
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
       <div class="row">
           <div class="card-image">
           <img src="{{ url('uploads/' .$patient->image) }}" width="50%" style="margin-top: 10px">
           </div>
       </div>
   </div>


@endsection



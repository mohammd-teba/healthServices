@extends('dashboard.layout.app')

@php
    $title = "Edit User";
    $pageDes = "Here you can edit user";
    $navTitle = $title;

@endphp

@section('title')
    {{ $title }}
@endsection
@section('nav-title')
    {{ $title }}
@endsection
@section('content')

    <div class="col s12 l6">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title activator">Form To {{ $title }}</h5>
                <form action="{{ route('users.update' , ['id' => $user->id]) }}" method="post">
                    {{ method_field('put') }}
                    @include('dashboard.users.form')
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Update User
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection



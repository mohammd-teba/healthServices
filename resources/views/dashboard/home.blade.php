@extends('dashboard.layout.app')
@php
    $title = "Dashboard";
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
        <div class="col l3 m6 s12">
            <div class="card danger-gradient card-hover">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h2 class="white-text m-b-5">{{ \App\Models\Hospital::count() }}</h2>
                            <h6 class="white-text op-5 light-blue-text">Hospitals</h6>
                        </div>
                        <div class="ml-auto">
                            <span class="white-text display-5"><i class="material-icons">local_hospital</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l3 m6 s12">
            <div class="card info-gradient card-hover">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h2 class="white-text m-b-5">{{ \App\Models\User::count() }}</h2>
                            <h6 class="white-text op-5">Doctors</h6>
                        </div>
                        <div class="ml-auto">
                            <span class="white-text display-5"><i class="material-icons">directions_walk</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col l3 m6 s12">
            <div class="card success-gradient card-hover">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h2 class="white-text m-b-5">{{ \App\Models\User::count() }} </h2>
                            <h6 class="white-text op-5 text-darken-2">Patients</h6>
                        </div>
                        <div class="ml-auto">
                            <span class="white-text display-5"><i class="material-icons">hotel</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col l3 m6 s12">
            <div class="card warning-gradient card-hover">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h2 class="white-text m-b-5">{{ \App\Models\Pharmacy::count() }}</h2>
                            <h6 class="white-text op-5">Pharmacies</h6>
                        </div>
                        <div class="ml-auto">
                            <span class="white-text display-5"><i class="material-icons">local_pharmacy</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 l4">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">New Users</h5>
                    <div class="message-box">
                        <div class="message-widget message-scroll">
                            <!-- Message -->
                            @foreach($users as $user)
                            <a href="javascript:void(0)">
                                <div class="user-img"> <img src="/assets/images/users/d1.jpg" alt="user" class="circle"> <span class="profile-status online pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>{{$user->name}}</h5>
                                    <span class="email">{{$user->email}}</span>
                                    <span class="phone">{{$user->phone}}</span>
                                    <h5>{{$user->group}}</h5>
                                    <span>{{$user->created_at}}</span>
{{--                                    <span class="time">9:30 AM</span>--}}
                                </div>
                            </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 l8">
            <div class="card news-slide" style="background:url(/assets/images/carousel/hospital4.jpg)  center center /cover ;">
                <div class="carousel carousel-slider" >
                    <a class="carousel-item" href="#one!">
                        <div class="carousel-caption">
                            <span class="label label-danger label-rounded">News</span>
                            <h3 class="m-t-5 font-light white-text">Hospital Name</h3>
                            <p class="white-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt illo quod numquam aperiam aliquam tempora </p>
                            <div class="row">
                                <div class="col m4 m-t-10">
                                    <h4 class="m-b-0 green-text" style="margin-left: 18px">10</h4><span class="white-text op-5">Categores</span>
                                </div>
                                <div class="col m4 m-t-10">
                                    <h4 class="m-b-0 orange-text text-darken-2">130</h4><span class="white-text op-5">Doctors</span>
                                </div>
                                <div class="col m4 m-t-10">
                                    <h4 class="m-b-0 green-text">250</h4><span class="white-text op-5">Patients</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="carousel-item" href="#one!" style="background:url(/assets/images/carousel/hospita4.jpg) center center / cover;">
                        <div class="carousel-caption">
                            <div class="carousel-caption" style="margin-top: 168px;">
                                <span class="label label-danger label-rounded">News</span>
                                <h3 class="m-t-5 font-light white-text">Hospital Name</h3>
                                <p class="white-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt illo quod numquam aperiam aliquam tempora </p>
                                <div class="row">
                                    <div class="col m4 m-t-10">
                                        <h4 class="m-b-0 green-text" style="margin-left: 18px">10</h4><span class="white-text op-5">Categores</span>
                                    </div>
                                    <div class="col m4 m-t-10">
                                        <h4 class="m-b-0 orange-text text-darken-2">130</h4><span class="white-text op-5">Doctors</span>
                                    </div>
                                    <div class="col m4 m-t-10">
                                        <h4 class="m-b-0 green-text">250</h4><span class="white-text op-5">Patients</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="carousel-item" href="#one!" style="background:url(/assets/images/carousel/hospital.jpg) center center / cover;">
                        <div class="carousel-caption">
                            <div class="carousel-caption" style="margin-top: 148px;">
                                <span class="label label-danger label-rounded">News</span>
                                <h3 class="m-t-5 font-light white-text">Hospital Name</h3>
                                <p class="white-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt illo quod numquam aperiam aliquam tempora </p>
                                <div class="row">
                                    <div class="col m4 m-t-10">
                                        <h4 class="m-b-0 green-text" style="margin-left: 18px">10</h4><span class="white-text op-5">Categores</span>
                                    </div>
                                    <div class="col m4 m-t-10">
                                        <h4 class="m-b-0 orange-text text-darken-2">130</h4><span class="white-text op-5">Doctors</span>
                                    </div>
                                    <div class="col m4 m-t-10">
                                        <h4 class="m-b-0 green-text">250</h4><span class="white-text op-5">Patients</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection



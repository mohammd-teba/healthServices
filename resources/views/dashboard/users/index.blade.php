@extends('dashboard.layout.app')

@php
    $title = "Users";
    $pageDes = "Here you can add / edit / delete users";
    $navTitle = $title;

@endphp

@section('route')
    {{ route('users.index') }}
@endsection
@section('title')
    {{ $title }}
@endsection
@section('nav-title')
    {{ $title }}
@endsection
@section('content')

        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <h3 class="card-title">{{$title}} Table</h3>
                        <p>{{$pageDes}}</p><hr>
                        <a class="btn-floating btn-large waves-effect waves-light teal right" href="{{ route('users.create') }}" style="margin-top: -88px;"><i class="material-icons">add</i></a>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Group</th>
{{--                                    <th>Phone</th>--}}
{{--                                    <th>Category Number</th>--}}
{{--                                    <th>Address</th>--}}
{{--                                    <th>Group</th>--}}
                                    <th>Controller</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td><a class="font-medium link">{{$user->id}}</a></td>
                                    <td><a class="link">{{$user->name}}</a></td>
                                    <td><a class="link">{{$user->phone}}</a></td>
                                    <td><a class="font-medium link">{{$user->email}}</a></td>
                                    <td><a class="font-medium link">{{$user->group}}</a></td>
{{--                                    <td><a class="link" style="margin-left: 40px">10</a></td>--}}
{{--                                    <td>Eric Pratt</td>--}}
{{--                                    <td><a class="link" style="margin-left: 40px">10</a></td>--}}

                                    <td>
                                        <a href="{{ route('users.edit' , ['id' => $user->id]) }}" rel="tooltip" class="btn btn-info btn-link btn-sm" data-title="Edit User" style="background-color: #333D52">
                                            <i class="material-icons dp48">edit</i>
                                        </a>

                                        <form action="{{ route('users.destroy' , ['id' => $user->id]) }}" method="post">
                                            {{ @csrf_field() }}
                                            {{ method_field('delete') }}
                                        <button type="submit" rel="tooltip" class="btn btn-info btn-link btn-sm" data-title="Delete User" style="background-color: #333D52">
                                            <i class="material-icons dp48">close</i>
                                        </button>
                                    </form>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <ul class="pagination right-align m-t-15">
                                <li class="page-item"style="color: white">
                                    <a class="page-link" tabindex="-1" style="color: white">Previous</a>
                                </li>
                                <li class="page-item" style="color: white">
                                    {!! $users->links() !!}
                                </li>
                                <li class="page-item"style="color: white">
                                    <a class="page-link" style="color: white">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection



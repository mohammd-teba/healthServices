@extends('dashboard.layout.app')

@php
    $title = "Doctors";
    $pageDes = "Here you can add / edit / delete doctor";
    $navTitle = $title;

@endphp

@section('route')
    {{ route('doctors.index') }}
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
                        <a class="btn-floating btn-large waves-effect waves-light teal right" href="{{ route('doctors.create') }}" style="margin-top: -88px;"><i class="material-icons">add</i></a>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Specialization</th>
                                    <th>Workplace</th>
                                    <th>Years Experience</th>
                                    <th>User</th>
                                    <th>Image</th>
                                    <th>Controller</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($doctors as $doctor)
                                <tr>
                                    <td><a class="font-medium link">{{$doctor->id}}</a></td>
                                    <td><a class="link">{{$doctor->name}}</a></td>
                                    <td><a class="link">{{$doctor->address}}</a></td>
                                    <td><a class="link">{{$doctor->specialization}}</a></td>
                                    <td><a class="link">{{$doctor->workplace}}</a></td>
                                    <td><a class="link">{{$doctor->experience}}</a></td>
                                    <td><a class="font-medium link">{{$doctor->user->id}}</a></td>
{{--                                    <td><a class="font-medium link">{{$doctor->cat->name}}</a></td>--}}
                                    <td><img src="{{ url('uploads/' .$doctor->image) }}" width="90" height="90"></td>

{{--                                    <td><a class="link" style="margin-left: 40px">10</a></td>--}}
{{--                                    <td>Eric Pratt</td>--}}
{{--                                    <td><a class="link" style="margin-left: 40px">10</a></td>--}}

                                    <td>
                                        <a href="{{ route('doctors.edit' , ['id' => $doctor->id]) }}" rel="tooltip" class="btn btn-info btn-link btn-sm" data-title="Edit Doctor" style="background-color: #333D52">
                                            <i class="material-icons dp48">edit</i>
                                        </a>

                                        <form action="{{ route('doctors.destroy' , ['id' => $doctor->id]) }}" method="post">
                                            {{ @csrf_field() }}
                                            {{ method_field('delete') }}
                                        <button type="submit" rel="tooltip" class="btn btn-info btn-link btn-sm" data-title="Delete Doctor" style="background-color: #333D52">
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
                                    {!! $doctors->links() !!}
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



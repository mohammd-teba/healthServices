@extends('dashboard.layout.app')

@php
    $title = "Patients";
    $pageDes = "Here you can add / edit / delete patient";
    $navTitle = $title;

@endphp

@section('route')
    {{ route('patients.index') }}
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
                        <a class="btn-floating btn-large waves-effect waves-light teal right" href="{{ route('patients.create') }}" style="margin-top: -88px;"><i class="material-icons">add</i></a>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Description</th>
                                    <th>User</th>
                                    <th>Image</th>
                                    <th>Controller</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($patients as $patient)
                                <tr>
                                    <td><a class="font-medium link">{{$patient->id}}</a></td>
                                    <td><a class="link">{{$patient->name}}</a></td>
                                    <td><a class="link">{{$patient->address}}</a></td>
                                    <td><a class="link">{{$patient->description}}</a></td>
                                    <td><a class="font-medium link">{{$patient->user->id}}</a></td>
{{--                                    <td><a class="font-medium link">{{$patient->cat->name}}</a></td>--}}
                                    <td><img src="{{ url('uploads/' .$patient->image) }}" width="90" height="90"></td>

{{--                                    <td><a class="link" style="margin-left: 40px">10</a></td>--}}
{{--                                    <td>Eric Pratt</td>--}}
{{--                                    <td><a class="link" style="margin-left: 40px">10</a></td>--}}

                                    <td>
                                        <a href="{{ route('patients.edit' , ['id' => $patient->id]) }}" rel="tooltip" class="btn btn-info btn-link btn-sm" data-title="Edit Patient" style="background-color: #333D52">
                                            <i class="material-icons dp48">edit</i>
                                        </a>

                                        <form action="{{ route('patients.destroy' , ['id' => $patient->id]) }}" method="post">
                                            {{ @csrf_field() }}
                                            {{ method_field('delete') }}
                                        <button type="submit" rel="tooltip" class="btn btn-info btn-link btn-sm" data-title="Delete Patient" style="background-color: #333D52">
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
                                    {!! $patients->links() !!}
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



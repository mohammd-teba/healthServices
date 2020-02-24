@extends('dashboard.layout.app')

@php
    $title = "Pharmacies";
    $pageDes = "Here you can add / edit / delete pharmacies";
    $navTitle = $title;

@endphp

@section('route')
    {{ route('pharmacies.index') }}
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
                        <a class="btn-floating btn-large waves-effect waves-light teal right" href="{{ route('pharmacies.create') }}" style="margin-top: -88px;"><i class="material-icons">add</i></a>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Fax</th>
                                    <th>Address</th>
                                    <th>Meta_keywords</th>
                                    <th>Meta_des</th>
                                    <th>Image</th>
                                    <th>Controller</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pharmacies as $pharmacy)
                                <tr>
                                    <td><a class="font-medium link">{{$pharmacy->id}}</a></td>
                                    <td><a class="link">{{$pharmacy->name}}</a></td>
                                    <td><a class="link">{{$pharmacy->email}}</a></td>
                                    <td><a class="font-medium link">{{$pharmacy->phone}}</a></td>
                                    <td><a class="font-medium link">{{$pharmacy->fax}}</a></td>
                                    <td><a class="link">{{$pharmacy->address}}</a></td>
                                    <td><a class="link">{{$pharmacy->meta_keywords}}</a></td>
                                    <td><a class="link">{{$pharmacy->meta_des}}</a></td>
                                    <td><img src="{{ url('uploads/' .$pharmacy->image) }}" width="90" height="90"></td>

{{--                                    <td><a class="link" style="margin-left: 40px">10</a></td>--}}
{{--                                    <td>Eric Pratt</td>--}}
{{--                                    <td><a class="link" style="margin-left: 40px">10</a></td>--}}

                                    <td>
                                        <a href="{{ route('pharmacies.edit' , ['id' => $pharmacy->id]) }}" rel="tooltip" class="btn btn-info btn-link btn-sm" data-title="Edit Pharmacy" style="background-color: #333D52">
                                            <i class="material-icons dp48">edit</i>
                                        </a>

                                        <form action="{{ route('pharmacies.destroy' , ['id' => $pharmacy->id]) }}" method="post">
                                            {{ @csrf_field() }}
                                            {{ method_field('delete') }}
                                        <button type="submit" rel="tooltip" class="btn btn-info btn-link btn-sm" data-title="Delete Pharmacy" style="background-color: #333D52">
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
                                    {!! $pharmacies->links() !!}
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



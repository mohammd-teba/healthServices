@extends('dashboard.layout.app')

@php
    $title = "Medicines";
    $pageDes = "Here you can add / edit / delete medicine";
    $navTitle = $title;

@endphp


@section('route')
    {{ route('medicines.index') }}
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
                        <a class="btn-floating btn-large waves-effect waves-light teal right" href="{{ route('medicines.create') }}" style="margin-top: -88px;"><i class="material-icons">add</i></a>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>cost</th>
                                    <th>Controller</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($medicines as $medicine)
                                <tr>
                                    <td><a class="font-medium link">{{$medicine->id}}</a></td>
                                    <td><a class="link">{{$medicine->name}}</a></td>
                                    <td><a class="link">{{$medicine->cost}}</a></td>


{{--                                    <td><a class="link" style="margin-left: 40px">10</a></td>--}}
{{--                                    <td>Eric Pratt</td>--}}
{{--                                    <td><a class="link" style="margin-left: 40px">10</a></td>--}}

                                    <td>
                                        <a href="{{ route('medicines.edit' , ['id' => $medicine->id]) }}" rel="tooltip" class="btn btn-info btn-link btn-sm" data-title="Edit Medicine" style="background-color: #333D52">
                                            <i class="material-icons dp48">edit</i>
                                        </a>

                                        <form action="{{ route('medicines.destroy' , ['id' => $medicine->id]) }}" method="post">
                                            {{ @csrf_field() }}
                                            {{ method_field('delete') }}
                                        <button type="submit" rel="tooltip" class="btn btn-info btn-link btn-sm" data-title="Delete Medicine" style="background-color: #333D52">
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
                                        {!! $medicines->links() !!}
                                  </li>
                                <li class="page-item"style="color: white">
                                    <a class="page-link" style="color: white">Next</a>
                                </li>
                            </ul>
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12 col-md-5">--}}
{{--                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">--}}
{{--                                        Showing--}}
{{--                                        <span style="color: #FF0000">--}}
{{--                                                {!! $categories->total() !!}--}}
{{--                                            </span>--}}
{{--                                        entries--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-12 col-md-7">--}}
{{--                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">--}}
{{--                                        {!! $categories->links() !!}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection



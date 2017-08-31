@extends('layouts.app')

@section('content')
    {{--@include('message')--}}
    <div class="container">
        <div class="page-header">
            <h1>Time Table</h1>
            {{--<p style="float: right">{{$data -> date}}</p>--}}
        </div>
        <div class="table">
            <table id="table" class=" table-responsive table-bordered" style="width: 100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Status</th>
                        <th>Total Hours</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $datas -> id }}</td>
                        <td>{{ $datas -> name }}</td>
                        <td>{{ $datas -> timein }}</td>
                        <td>{{ $datas -> timeout }}</td>
                        <td>{{ $datas -> status }}</td>
                        <td>{{ $datas -> totalhours }}</td>
                        <td>{{ $datas -> date }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

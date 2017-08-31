
@extends('master')
@section('title','panha')
    @section('aside')
        @parent
        <h4>hello world </h4>
        @endsection
@section('contain')
<div class="table">
    <div class="">

        {{--conver string don't have tag in html--}}
          {{--{!! $name !!}--}}


        {{--not convert string from controller--}}
        {{--{{ $name  }}--}}

        @if(isset($name))
            {{$name}}
            @else
            no name
            @endif

        @if(count($number))
            @foreach($namer as $value)
                {{$value}}<br>
            @endforeach()
        @endif


        <h5>hello</h5>

    </div>
    <p>Bootstrap is downloadable in two forms, within which you'll find the following
        directories and files, logically grouping common resources
     </p>
    <div class="form-group">


    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</div>
    @endsection





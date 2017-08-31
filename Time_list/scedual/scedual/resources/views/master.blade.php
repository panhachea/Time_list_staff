<!doctype>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">

    <style>
        .table{
            height: 793px;
            width: 1123px;
            margin: 0 auto 0 auto;
            padding: 0;
            background: gainsboro;
        }
        p{
            font-size: 20px;
            font-family: Raavi;

        }
    </style>

</head>
<body>

<div class="table">
    <div class="contain">
        <div class="col-md-4">

            {{--aside master page--}}
            @section('aside')
                <h3>hello world hlll</h3>
            @show



        </div>


        <div class="col-md-8">
            @yield('contain')

        </div>


        <h5>hello</h5>

    </div>




    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</div>

@foreach($data as $datas)

    {{$datas->id}}
    {{$datas->name}}
    {{$datas->timein}}
    {{$datas->timeout}}
    {{$datas->totalhours}}
    {{$datas->date}}

    @endforeach

</body>
</html>
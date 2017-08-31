

{{--<!doctpe>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<title>--}}

    {{--</title>--}}
{{--</head>--}}
{{--<body>--}}

    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>--}}

    {{--<div class="container">--}}

        {{--<h1>Laravel 5 Autocomplete using Bootstrap Typeahead JS</h1>--}}
        {{--<input class="typeahead form-control" style="margin:0px auto;width:300px;" type="text">--}}
        {{--<p id="k">h</p>--}}
        {{--<script>--}}
          {{--https://www.youtube.com/watch?v=B6ArKUjrYlo--}}
                {{--https://www.youtube.com/watch?v=VBVOXTgXX2U--}}

                {{--https://www.youtube.com/watch?v=8g1cHW5OmPo game--}}


        {{--</script>--}}
        {{----}}


        <!doctype html>
        <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Demo time table for staff</title>
            <!-- Styles -->
            <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/jquery-3.2.1.js')}}"></script>
            <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
            <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
            <!--<link type="text/css" rel="stylesheet" href="task1.css">-->
            <style>
                .page-header h1 {
                    text-align: center;
                }
                /*.form-group input{*/
                /*width: 500px;*/
                /*}*/
                .inputName input {
                    border: none;
                    /*width: 200px;*/
                    border-radius: 5px
                }

                input {
                    margin: 5px;
                }

                tr td {
                    text-align: center;
                }

                .inputTime input {
                    width: 150px;
                    height: 30px;
                    /*margin-bottom: 10px;*/
                    border: none;
                    border-radius: 5px
                }

                select {
                    border: none;
                    border-radius: 5px
                }

                table {
                    width: 100%;
                }

                thead tr th {
                    padding: 15px;
                }

                .btn-success {
                    float: right;
                    margin-top: 50px;
                }
                .search,.txt{
                    float:right;

                }
                .search{
                    margin-right: 140px;
                }

            </style>

        </head>

        <body>


        <div class="page-header">
            <h1>Time Table</h1>
        </div>

        <form  method="get" action="#">


            <input type="submit" name="submit" value="submit" class="search"/>
            <input type="text" name="txt" class="txt" />
        </form>
        <div class="container">
            <div class="timeTable">
                <form action="/store" method="post" class="form-group">
                    {{ csrf_field() }}

                    <table id="table" class=" table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Status</th>
                            <th hidden>Total Hours</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($_GET['submit']))
                        @for($i=1;$i<=$_GET['txt'];$i++)
                            <tr>
                                <td>

                                </td>
                                <td class="inputName">
                                    <input type="text" name="name[]" id="name" style="width: 95%">
                                </td>
                                <td class="inputTime">
                                    <input type="time" name="timein[]">
                                </td>
                                <td class="inputTime">
                                    <input type="time" name="timeout[]">
                                </td>
                                <td>
                                    <select name="status[]">
                                        <option> Part time</option>
                                        <option> Full time</option>
                                    </select>
                                </td>
                                <td id="total" hidden>
                                    <input type="number" name="totalhours[]">
                                </td>
                                <td class="inputTime">
                                    <input type="date" name="date[]">
                                </td>
                            </tr>
                        @endfor

                        </tbody>
                        @endif
                    </table>
                    <input class="form-control btn-success" type="submit" value="Submit" id="add" style="width: 150px">

                </form>
            </div>
        </div>


        </body>
</html>


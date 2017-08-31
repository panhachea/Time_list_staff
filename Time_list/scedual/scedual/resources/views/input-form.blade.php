
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
        .full_container{
            height: 793px;
            width: 1123px;


        }
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
    </style>

</head>

<body>

<div class="full_container">

    <div class="page-header">
        <h1>Time Table</h1>
    </div>
    <div class="container">
        <div class="timeTable">
            <form action="/store" method="post" class="form-group">
                {{ csrf_field() }}
                {{--<input type="date" style="margin-top: 0; margin-bottom: 15px" name="date">--}}
                <table id="table" class=" table-responsive table-bordered">
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
                    @for($i=1;$i<=2;$i++)
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
                                <option value="PT"> Part time</option>
                                <option value="FT"> Full time</option>
                            </select>
                        </td>
                        <td id="total" >
                            <input type="number" name="totalhours[]">
                        </td>
                        <td class="inputTime">
                            <input type="date" name="date[]">
                        </td>
                    </tr>
                   @endfor
                    </tbody>
                </table>
                <input class="form-control btn-success" type="submit" value="Submit" id="add" style="width: 150px">

            </form>
        </div>
    </div>
</div>



</body>

</html>



<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Demo time table for staff</title>
    <!-- Styles -->
    <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/jquery-3.2.1.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

        .btn-success,.btn-danger{
            float: right;
            margin-top: 50px;
        }

        .search,.txt{
            float: right;
            margin-bottom: 10px;
            margin-top: 20px;

        }
        .search{
            margin-right: 100px;

        }
        .txt{
            width:200px;
            height: 30px;
        }

        .num{
            width: 30px;
        }
        .delete-row{
            margin-left: 120px;
            padding: 3px;
            width: 120px;
            height: 35px;
            margin-bottom: 20px;
            font-size:17px;
            border-radius: 14px;

        }
        .rule{
           float: left;
            margin-left: 130px;

        }


    </style>

</head>

<body>


<div class="page-header">
    <h1>Time Table</h1>


    <form  method="get" action="#">

        <input type="submit" name="Submit" value="Submit" class="search"/>
        <input type="text" name="txt" class="txt" /><br><br><br><br>
       <div class="well" style="width: 352px;float: right;margin-right:20px;"> <p>
                Input number of column that you want to write<img src="img/num.png" width="20px;">
            </p></div>

        <button type="button" class="delete-row">Delete </button>
        <br><br>

        <p class="rule">Please <i><span class="glyphicon glyphicon-saved">
                </span></i>on the button that you want to delete
            column number !</p><br>

    </form>
</div>
<div class="container">
    <div class="timeTable">
        <form action="/store" method="get" class="form-group" onsubmit="return validation()">
            {{ csrf_field() }}
            {{--<input type="date" style="margin-top: 0; margin-bottom: 15px" name="date">--}}
            <table id="table" class=" table-responsive table-bordered">
                <thead>
                <tr>
                    <th style="background: whitesmoke;width: 40px;"><label>Select</label></th>
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

                @if(isset($_GET['Submit']))
                    @for($i=1;$i<=$_GET['txt'];$i++)
                        <tr>

                            <td style="background: white;">
                                <input type="checkbox" name="record" class="record" style="width:40px;height: 20px;margin-left:10px;
                                "></td>

                            <td>
                                {{$i}}
                            </td>
                            <td class="inputName">
                                <input type="text" name="name[]" id="name" style="width: 95%" required>
                            </td>
                            <td class="inputTime" >
                                <input type="time" name="timein[]" id="timein" required>
                            </td>
                            <td class="inputTime">
                                <input type="time" name="timeout[]" id="timeout" required>
                            </td>
                            <td>
                                <select class="status" name="status[]" id="status" required data-row="row_{{$i}}">
                                    <option value="choose" disabled="disabled">Choose</option>
                                    <option id="pt" value="Part time"> Part time</option>
                                    <option id="ft" value="Full time"> Full time</option>
                                    <option id="perm" value="Permission">Permission</option>
                                </select>
                            </td>
                            <td id="total" hidden >
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
            <input type="reset" name="reset" id="resetbtn" class="form-control btn-danger" value="Reset" style="float:right;width: 120px;margin-right:30px;">
            <input class="form-control btn-success" type="submit" value="Submit" id="add" style="width: 120px;">

        </form>
    </div>
</div>
<script>
    $(".delete-row").click(function(){
        $("table ").find('input[name="record"]').each(function(){
            if($(this).is(":checked")){
                $(this).parents("tr").remove();
            }
        });
    });
</script>


<script>
    $(function(){

        $('.status').on('change', function(){
            //           console.log($(this).val());
            var status = $(this).val();

            var _selectRow = $(this).data('row');
            //           console.log('select row : ', _selectRow);
            if(status == 'Permission'){
                //                console.log($('tr.'+_selectRow + ' value=["Time"]'));
                $('tr.'+_selectRow + ' td input[type="time"]').removeAttr('required');
            }
            else{
                $('tr.'+_selectRow + ' td input[type="time"]').attr('required',true);
            }

        })
    })
</script>


</body>

</html>


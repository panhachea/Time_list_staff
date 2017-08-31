<!DOCTYPE html>
<html>
<head>
    <style>

        .page{
            width:1122px;
            height:793px;
            margin: 0 auto 0 auto;
            background:lavender;
        }
        h2{
            text-align: center;
            padding-top: 10px;
            font-size: 40px;
            font-family: "High Tower Text";

        }
        table,th, td {
            border: 1px solid black;
            margin-left: 90px;

        }
        .number{
            width: 40px;
            padding: 5px;


        }
        .name{
            width: 210px;
            padding: 5px;

        }
        .timein,.timeout{
            width: 180px;
            padding: 2px;

        }
        .status{
            width: 120px;
            padding: 4px;
        }
        .total{
            width: 130px;
            padding: 4px;
        }
        label{
            padding: 15px;
            font-size: 20px;
            font-family: "Times New Roman";
        }
        .submit,.cancel{
            width: 120px;
            height: 34px;
            float: right;

        }
        .cancel{
            margin-right: 100px;

        }
        .submit{
            margin-right:10px;

        }
        .add,.delete{
            width: 100px;
            height: 25px;
            font-size: 15px;
            margin-left: 20px;
        }
    </style>
</head>
<body>
<div class="page">

<h2>Time Table</h2>


<button class="add" onclick="myFunction()">Add More</button>
<button  class="delete" onclick="myDeleteFunction()">Delete row</button>
    <br><br>
<table id="myTable" cellspacing="0" cellpadding="0" >
    <tr>

        <th><label>N<sup>o</sup></label></th>
        <th><label>Name:</label></th>
        <th><label>Time In:</label></th>
        <th><label>Time Out:</label></th>
        <th><label>Status:</label></th>
        <th><label>Total Hours:</label></th>
    </tr>

</table>
<br>


<script>
    function myFunction() {
        var table = document.getElementById("myTable");
        var row = table.insertRow(1);

        var cell2 = row.insertCell(0);
        var cell3 = row.insertCell(0);
        var cell4 = row.insertCell(0);
        var cell5 = row.insertCell(0);
        var cell6 = row.insertCell(0);
        var cell7 = row.insertCell(0);



        cell2.innerHTML = '<input type="text" name="total[]" class="total">';
        cell3.innerHTML = '<select name="status" class="status">' + '<option value="part_time" class="part_time" >Part time</option> <option value="full_time" class="full_time"> Full time</option>'
            +'<option value="full_time" class="full_time"> Permission</option>'+
            ' </select>';
        cell4.innerHTML = '<input type="time" class="timeout" name="timeout[]">';
        cell5.innerHTML = '<input type="time" class="timein" name="timein[]">' ;
        cell6.innerHTML = '<input type="text" class="name" name="name[]"/>';
        cell7.innerHTML = '<input type="number" class="number" name="number[]">';

    }


    function myDeleteFunction() {
        document.getElementById("myTable").deleteRow(1);
    }
</script>
    <input type="reset" value="Cancel" class="cancel">
    <input type="submit" value="Save" class="submit">

</div>


</body>
</html>

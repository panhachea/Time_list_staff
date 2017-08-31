<!--https://www.youtube.com/watch?v=kBAPbCDGCuY -->
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>


        $(document).ready(function() {
            var max_fields      = 100; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div>' +' <label class="n"> </label><input type="number" class="number" name="number[]"></td>'+
                        '<td><input type="text" class="name" name="name[]"/></td>'+'<td><input type="time" class="timein" name="timein[]"></td>'+
                        ' <td><input type="time" class="timeout" name="timeout[]"></td>'+'<td><select name="status" class="status"><option value="part_time" class="part_time" > Part time</option> <option value="full_time" class="full_time"> Full time</option> </select></td>'+
                        ' <td><input type="text" name="total" class="total" name="total[]"></td>'+
                        '<td><a href="#" class="remove_field">Remove</a></td></tr></table></div>'); //add input box
                }
            });

            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });



    </script>

    <style>

        .page{
            width:1122px;
            height:793px;
            margin: 0 auto 0 auto;
            background: gainsboro;
        }
        label{
            font-size: 15px;
            font-family: Rockwell;

        }
        .n{
            margin-left: 13px;
        }
        table tr th{
            text-align: left;
            width:1%;

        }

        h2{
           padding-top: 20px;
            font-family: "Times New Roman";
            font-size:40px;
            text-align: center;
        }
        .number{
            width: 30px;
            padding-right: 12px;

        }
        .name{

            font-size: 16px;

        }
        .timein{
          padding:1px;
            width: 120px;
        }
        .timeout{
            margin:0px;
            width: 110px;
        }
        .part_time{
            margin-left: 30px;


        }
        .total{
            margin-left: 5px;
            width: 120px;
        }
        .remove_field{
            margin-left: 10px;
        }
    </style>
</head>
<body>
<div class="page">

    <h2>Time Table</h2>
<form action="" method="post">
    <br><br>

    <div class="input_fields_wrap">
        <button class="add_field_button">Add More Fields</button>
            <table style="width: 98%; " cellpadding="0" cellspacing="0" border="1">
                <tr>

                    <th><label>N<sup>o</sup></label></th>
                    <th><label>Name:</label></th>
                    <th><label>Time In:</label></th>
                    <th><label>Time Out:</label></th>
                    <th><label>Status:</label></th>
                    <th><label>Total Hours:</label></th>
                    <th><a href="#" class="remove_field">Remove</a></th>
                </tr>

                <tr>
                     <td><input type="number" class="number" name="number[]"></td>
                     <td><input type="text" class="name" name="name[]"/></td>
                     <td><input type="time" class="timein" name="timein[]"></td>
                     <td><input type="time" class="timeout" name="timeout[]"></td>
                     <td><select name="status" class="status">
                            <option value="part_time" class='part_time' > Part time</option>
                            <option value="full_time" class='full_time'> Full time</option>
                        </select></td>
                      <td><input type="text" name="total[]" class="total"></td>
                      <td><a href="#" class="remove_field">Remove</a></td>
                </tr>
            </table>

    </div>

    <br><br>

    <input type="submit" name="submit" value="submit">
    <input type="reset" name="reset" value="reset">

</form>


</div>
</div>
</body>
</html>




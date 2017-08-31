
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
        xmlns="http://www.w3.org/1999/xhtml"
        lang="en"
        xml:lang="en"
><head>

    <meta
            http-equiv="Content-Type"
            content="text/html; charset=utf-8"
    />

    <meta
            http-equiv="Content-Language"
            content="en"
    />

    <title>
        &lt;SELECT&gt; Time Difference Demo
    </title>

</head><body>

<h1>
    <code>&lt;SELECT&gt;</code> Time Difference Demo
</h1>

<div><!-- since SELECT cannot be a direct child of BODY! -->
    http://www.webdeveloper.com/forum/showthread.php?298393-Difference-between-two-time-Fields

    <select name="timestart" id="timeStart">
        <option value="00:00:00">12:00 am</option>
        <option value="01:00:00">1:00 am</option>
        <option value="02:00:00">2:00 am</option>
        <option value="03:00:00">3:00 am</option>
        <option value="04:00:00">4:00 am</option>
        <option value="05:00:00">5:00 am</option>
        <option value="06:00:00">6:00 am</option>
        <option value="07:00:00">7:00 am</option>
        <option value="08:00:00">8:00 am</option>
        <option value="09:00:00">9:00 am</option>
        <option value="10:30:00">10:30 am</option>
        <option value="11:00:00">11:00 am</option>
        <option value="12:00:00">12:00 pm</option>
        <option value="13:00:00">1:00 pm</option>
        <option value="14:00:00">2:00 pm</option>
        <option value="15:00:00">3:00 pm</option>
        <option value="16:00:00">4:00 pm</option>
        <option value="17:00:00">5:00 pm</option>
        <option value="18:00:00">6:00 pm</option>
        <option value="19:00:00">7:00 pm</option>
        <option value="20:00:00">8:00 pm</option>
        <option value="21:00:00">9:00 pm</option>
        <option value="22:00:00">10:00 pm</option>
        <option value="23:00:00">11:00 pm</option>
    </select>

    <select name="timestop" id="timeStop">
        <option value="00:00:00">12:00 am</option>
        <option value="00:30:00">12:30 am</option>
        <option value="01:00:00">1:00 am</option>
        <option value="02:00:00">2:00 am</option>
        <option value="03:00:00">3:00 am</option>
        <option value="04:00:00">4:00 am</option>
        <option value="05:00:00">5:00 am</option>
        <option value="06:00:00">6:00 am</option>
        <option value="07:00:00">7:00 am</option>
        <option value="08:00:00">8:00 am</option>
        <option value="09:00:00">9:00 am</option>
        <option value="10:00:00">10:00 am</option>
        <option value="11:00:00">11:00 am</option>
        <option value="12:00:00">12:00 pm</option>
        <option value="13:00:00">1:00 pm</option>
        <option value="14:00:00">2:00 pm</option>
        <option value="15:00:00">3:00 pm</option>
        <option value="16:00:00">4:00 pm</option>
        <option value="17:00:00">5:00 pm</option>
        <option value="18:00:00">6:00 pm</option>
        <option value="19:10:00">7:10 pm</option>
        <option value="20:00:00">8:00 pm</option>
        <option value="21:00:00">9:00 pm</option>
        <option value="22:00:00">10:00 pm</option>
        <option value="23:00:00">11:00 pm</option>
    </select>
</div>

<p>
    Difference: <span id="timeDiff">0</span>
</p>

<script type="text/javascript"><!--

    (function(d) {

        var
            start = d.getElementById('timeStart'),
            stop = d.getElementById('timeStop'),
            diff = d.getElementById('timeDiff');

        function textReplace(e, txt) {
            if (e.textContent) e.textContent = txt;
            else e.innerText = txt;
        }

        function addEvent(e, event, handler) {
            if (e.addEventListener) e.addEventListener(event, handler, false);
            else e.attachEvent('on' + event, handler);
        }

        function selectHours(e) {
            return new Date(
                '01/01/1971 ' + e.options[e.selectedIndex].value
            ).getTime();
        }

        function calcTime(e) {
            d = new Date(selectHours(stop) - selectHours(start));
            textReplace(diff, d.getUTCHours() + ':' + d.getUTCMinutes());
        }

        addEvent(start, 'change', calcTime);
        addEvent(stop, 'change', calcTime);

    })(document);

    --></script>




</body>
</html>

{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}

{{--</head>--}}
{{--<body style="margin: auto">--}}
{{--<div class="page" style="width: 794px;height: 1122px;margin: auto;background-color: wheat">--}}
    {{--<h1 style="text-align: center">Time Schedule</h1>--}}
    {{--<!--<div class="TablePage" style="width: 80%">-->--}}
    {{--<table border="1px solid ">--}}
        {{--<tr>--}}
            {{--<th>N<sup>o</sup></th>--}}
            {{--<th>Name</th>--}}
            {{--<th>Status</th>--}}
            {{--<th>Time in</th>--}}
            {{--<th>Time out</th>--}}
            {{--<th >Total</th>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>1</td>--}}
            {{--<td><input class="text"></td>--}}
            {{--<td>--}}
                {{--<select name="status[]">--}}
                    {{--<option value="" disabled> Selected Time</option>--}}
                    {{--<option> Part time</option>--}}
                    {{--<option> Full time</option>--}}
                    {{--<option> Permission</option>--}}
                {{--</select>--}}
            {{--</td>--}}
            {{--<td><input class="sumTime" type="time"></td>--}}
            {{--<td><input class="sumTime" type="time"></td><td>--}}
                {{--<input id="expenses_sum"></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>2</td>--}}
            {{--<td><input class="text"></td>--}}
            {{--<td>--}}
                {{--<select name="status[]">--}}
                    {{--<option value="" disabled> Selected Time</option>--}}
                    {{--<option> Part time</option>--}}
                    {{--<option> Full time</option>--}}
                    {{--<option> Permission</option>--}}
                {{--</select>--}}
            {{--</td>--}}
            {{--<td><input class="sumTime" type="time"></td>--}}
            {{--<td><input class="sumTime" type="time"></td><td>--}}
                {{--<input id="expenses_sum"></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>3</td>--}}
            {{--<td><input class="text"></td>--}}
            {{--<td>--}}
                {{--<select name="status[]">--}}
                    {{--<option value="" disabled> Selected Time</option>--}}
                    {{--<option> Part time</option>--}}
                    {{--<option> Full time</option>--}}
                    {{--<option> Permission</option>--}}
                {{--</select>--}}
            {{--</td>--}}
            {{--<td><input class="sumTime" type="time"></td>--}}
            {{--<td><input class="sumTime" type="time"></td><td>--}}
                {{--<input id="expenses_sum"></td>--}}
        {{--</tr>--}}

        {{--<tr>--}}
            {{--<td>4</td>--}}
            {{--<td><input class="text"></td>--}}
            {{--<td>--}}
                {{--<select name="status[]">--}}
                    {{--<option value="" disabled> Selected Time</option>--}}
                    {{--<option> Part time</option>--}}
                    {{--<option> Full time</option>--}}
                    {{--<option> Permission</option>--}}
                {{--</select>--}}
            {{--</td>--}}
            {{--<td><input class="sumTime" type="time"></td>--}}
            {{--<td><input class="sumTime" type="time"></td><td>--}}
                {{--<input id="expenses_sum"></td>--}}
        {{--</tr>--}}

    {{--</table>--}}

    {{--<!--</div>-->--}}

{{--</div>--}}


{{--<script>--}}
    {{--$(document).on('keyup','input.sumTime',function(){--}}

        {{--$sumTime = $(this).parents('tr').find('.sumTime');--}}
        {{--$expenseTotal = $(this).parents('tr').find('#expenses_sum');--}}
        {{--$expenseTotal.val('0');--}}
        {{--$.each($sumTime,function(index,object){--}}
            {{--if($(object).val()!='')--}}
            {{--{--}}
                {{--$expenseTotal.val(parseInt($expenseTotal.val())+parseInt($(object).val()));--}}
            {{--}--}}
        {{--})--}}
    {{--});--}}

{{--</script>--}}

{{--</body>--}}
{{--</html>--}}

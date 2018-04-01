<!DOCTYPE html>
<html>
<head>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);

    var time =  h + ":" + m;
    document.getElementById('txt').innerHTML =time  + ":" + s;
    var t = setTimeout(startTime, 500);
    return time;
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

    function showTime(){
        var time = startTime();
        return time;
    }

    
</script>
</head>

<body  onload="startTime()">

<div id="txt">    </div>
    <button type="button" onclick="alert('Class Start at :'+showTime())">Start</button><br>
    <button  type="button" onclick="alert('Break Time at :'+showTime())">Break Time</button><br>
    <button type="button" onclick="alert('Class Finish at:'+showTime())">Finish</button>
    <br>


</body>
</html>

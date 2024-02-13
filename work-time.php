<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$h = date("H");
$start_time=8;
$end_time=16;
if ($h>=$start_time && $h<=$end_time){?>

    <p><strong>
    Welcom!
    we are online now
    </strong></p>




<?php }else {?>
<p> Sorry! we are offline now.<br>
    <span style="color:red">PLEASE CALL LATER.
    </span>
</p>
    <?PHP
}

?>
   
</body>
</html>
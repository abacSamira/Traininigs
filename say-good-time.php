<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$h = date('H');
echo "hour is: ", $h ,"<br/>";

if ($h>4 && $h>=10)
echo 'Good morning my friend!';

if ($h >10 && $h>=14)
echo 'Have a nice day!';

if ($h >14 && $h>=17)
echo 'Good afternoon!';

if ($h >17 && $h>=19)
echo 'Good evening!';

if ($h >19 && $h<3)
echo 'Good night!';
    ?>
</body>
</html>
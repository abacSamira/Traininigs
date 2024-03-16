<?php
$str = " the quoted string \"ABC\" and going to next line \t ABC! ";
echo $str . '</br>';
$a= 10;
$str2 = "My number is $a.";
echo $str2;

//heredoc for writing a long sentences

$str3 = <<< MYSTR
    my heredoc string goes here
    Having single quotation '
    as well as double quotation "
    also expanding variable 
    for example \$a = $a

MYSTR;
echo '<pre>';
echo $str3;
echo '</pre>';




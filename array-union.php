<?php
$a = array(1,3,5,7,9) ;
$b = array(0,2,4,6,8,10,12) ;

$c= $a+ $b ; //2 arrays union
$d= $b+ $a ;
$e = array_merge($a,$b) ;
echo '<pre>';
echo'a= ';
print_r($a);
echo'b= ';
print_r($b);
echo'c= a+b';
print_r($c);
echo'd=b+a ';
print_r($d);
echo'e= 2 arrays together ';
print_r($e);
echo '</pre>';
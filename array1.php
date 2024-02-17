<?php
$a = array(
    4=> 0,
    5=>'php',
    6=> 12,
    7=> 10,
    'url'=> 'http://google.com',
    10=> array (1, 10, 100, 1000),
);
$a ['a']= 65; //we can add to the array again
$a[]=1234;    // [11]
$a[]= array(1,2,3,4); //[12]

echo '<pre>';
print_r($a);
echo '</pre>';
echo $a['url'];
echo'</br>';
echo $a['10'][2];
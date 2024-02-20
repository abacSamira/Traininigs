<?php
$a=array(
'URL'=> 'http://php.com/',
'Name' => 'php',
'Emaile' => 'info@php.com',
);

$b = array(
    'Username'=>'samira',
    'URL' => 'http://www.php.com'
);
 $c = array_merge($a, $b); //show url = <http//:www.php.com>
 echo '<pre>';
 echo '$c = ';
 print_r($c);
 echo '</pre>';

<?php
$func = 'increment';
if (function_exists( $func)){
    echo '<p>the function '.  $func.' exist.</p>';
}
else {  
    echo '<p>the function ' . $func. ' does not exist.</p>';
}
$k=3;
$a = 10;
$b = increment($a);
$c = duplicate($a);
$d = multiply($a);
$vars = array ('a','b','c','d');

foreach($vars as $var) {
print_var($var);
}

function print_var($var_name){
    global $$var_name;
    echo '<p>$'. $var_name. '='. $$var_name . '</p>';
}

function increment($n) {
   return $n + 1;
}
function duplicate ($n) {
   return 2 * $n;
}
function multiply ($n) {
    global $k; // $k=$GLOBALS($k) (array of global variable)
    return $k * $n;
}

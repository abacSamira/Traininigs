<?php

$a = array (9, 2, 3 ,56, 78, 30 ,23);
while (current($a) !== false) {
echo current($a);
echo '</br>';
next($a);

}
echo '</br>';



end($a);
while (current($a) !== false) {
    echo key ($a). ' => ' . current($a);  //each ($a)
    echo '</br>';
    prev($a);
    
    }

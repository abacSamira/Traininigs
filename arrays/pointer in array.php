
<?php
$a= array (1,3,4,6,0,9,88,13,45);
foreach ($a as $Value) {
echo $Value;
echo '<br/>'; 

}
echo '<br/>';

foreach ($a as $key => $Value) {
    echo $key. '=>'.$Value;
    echo '<br/>'; 
    
    }



<?php
$b =2;
$pmin=0 ;
$pmax=10;
$p=$pmin;
echo '<tabla>';
echo '<tr><th style="width:50px"> p </th><th style ="width:100px"> b^p </th></tr>';
while ($p < $pmax) {
echo'<tr>';
echo'<td style ="text-align:center">'.$p.'</td>';
echo'<td style ="text-align:center">'.$b**$p.'</td>';
echo'</tr>';
$p++;
}
echo'</table>';

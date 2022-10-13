<?php
$number = 4;
$sum = 0;
$temp_arr = array();
for($i=0;$i<$number;$i++){
    $temp_arr[$i] = pow(2, $i);
}
for($i=0;$i<$number;$i++){
    echo $temp_arr[$i];
    $sum = $sum + $temp_arr[$i];
    if($i<$number-1){
        echo ' + ';
    }
}
echo ' = '. $sum;
?>
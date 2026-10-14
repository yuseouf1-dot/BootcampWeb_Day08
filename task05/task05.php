<?php
function calc_average(array $user_array){
    $sum = 0;
    foreach($user_array as $num){
        $sum += $num;
    }

    $average = $sum / count($user_array);

    return round($average,1);
}
?>
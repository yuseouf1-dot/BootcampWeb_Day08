<?php
function get_shortest(array $user_array){
    $shortest = $user_array[0];
    
    foreach($user_array as $word){
        if(strlen($word) < strlen($shortest)){
            $shortest = $word;
        }
    }
    return $shortest;
}
?>
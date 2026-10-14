<?php
function dog_bark(int $woof_nb){
    for ($i = 1; $i <= $woof_nb; $i++){
        if ($i < $woof_nb)
            echo "woof ";
        else
            echo "woof";
    }
    echo "\n";
}

?>

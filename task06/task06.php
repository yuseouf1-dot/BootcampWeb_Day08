<?php
function sequence(int $n): void{
    $line = "1";
    for ($i = 0; $i <= $n; $i++){
        echo $line . PHP_EOL;
        $line = next_line($line);
    }
}

function next_line(string $s){
    $result = "";
    $count = 1;

    for ($i = 0; $i < strlen($s); $i++){
        if($i + 1 < strlen($s) && $s[$i] == $s[$i + 1]){
            $count++;
        } else{
            $result .= $count . $s[$i];
            $count = 1;
        }
    }
    return $result;
}
?>

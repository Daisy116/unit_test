<?php
class Math {
    function sum($min, $max){
        $total = 0;
        for($i = $min; $i <= $max; $i++){
            $total += $i;       
        }
        return $total;
    }
}

?>
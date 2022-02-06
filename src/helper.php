<?php 
    function number_to_currency($number, $symbol = 'Rp'){
        if (!is_numeric($number)) return $symbol.' -';
        return $symbol.' '.number_format($number,0,",",".");
    }
    function paket_price($number, $symbol = 'Rp'){
        $arr = explode(".",number_format($number,0,",","."));
        $first = array_shift($arr);
        return $symbol.' '.' <sub>'.$first.'</sub><i>.'.implode(".",$arr).'</i>';
    }
?>
<?php
function rangeFunc(int $start, int $end) {
    return range($start. $end); /* code returns
    the array from the start up to (including) 
    end.*/
}
//Try rangeFunc()
$array = rangeFunc(1, 10);
print_r $array;

function arraySum($arr) {
    $arr = array(" ",);
    return array_sum($arr); /* code returns the
    the sum of the elements in the array $arr*/
}
// Try arraySum()
$arr = array(12, 13, 14, 15);
echo arraySum($arr);

?>

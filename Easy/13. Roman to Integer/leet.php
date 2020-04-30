<?php 
class Solution {

/**
 * @param String $s
 * @return Integer
 */
function romanToInt($s) {
    $symbol = Array(
        "I"=>1,
        "V"=>5,
        "X"=>10,
        "L"=>50,
        "C"=>100,
        "D"=>500,
        "M"=>1000
    );
    $s = str_split($s);
    $tmp = 0;
    $answer = 0;
    for($i=(count($s)-1);$i>=0;--$i) {
        if($symbol[$s[$i]] < $tmp)
            $answer -= $symbol[$s[$i]];
        else
            $answer += $symbol[$s[$i]];
        $tmp = $symbol[$s[$i]];
    }
    return $answer;
}
}
<?php 
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $minus = false;
        if($x < 0) {
            $minus = true;
            $x = $x*-1;
        }
        $tmp = str_split($x);
        $answer = '';
        for($i=count($tmp);$i>=0;$i--) {
            $answer .= $tmp[$i];
        }
        $answer = ($minus) ? (int)$answer*-1 : (int)$answer;
        
        echo $answer;
    }
}
<?php 
class Solution {

/**
 * @param Integer $x
 * @return Boolean
 */
function isPalindrome($x) {
    $tmp = str_split($x);
    $tmp2 = array();
    for($i = (count($tmp)-1) ; $i >= 0 ; --$i)
        $tmp2[] = $tmp[$i];
    return $tmp === $tmp2;
}
}
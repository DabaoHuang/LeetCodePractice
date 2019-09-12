<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach($nums as $an => $a){
            foreach($nums as $bn => $b) {
                if( ($an != $bn) && ($target-($a+$b)) == 0 ) {
                    $answer = array($an, $bn);
                    return $answer;
                }
            }
        }
    }
}
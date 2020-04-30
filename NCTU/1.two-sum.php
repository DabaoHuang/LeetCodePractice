
/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
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
// @lc code=end


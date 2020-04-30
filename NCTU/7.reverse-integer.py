#
# @lc app=leetcode id=7 lang=python
#
# [7] Reverse Integer
#

# @lc code=start
import math
class Solution(object):
    def reverse(self, x):
        """
        :type x: int
        :rtype: int
        """

        if x == 0:
            return 0

        ret = int(('-' if x < 0 else '') + str(abs(x))[::-1].lstrip("0"))

        if abs(ret) > (2 ** 31 - 1):
            return 0
        
        return ret
        
# @lc code=end


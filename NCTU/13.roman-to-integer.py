#
# @lc app=leetcode id=13 lang=python
#
# [13] Roman to Integer
#

# @lc code=start
class Solution(object):
    def romanToInt(self, s):
        """
        :type s: str
        :rtype: int
        """

        symbol = {'I':1, 'V':5 , 'X':10 , 'L':50 , 'C':100 , 'D':500 , 'M': 1000}
        tmp = 0
        i=len(s)-1
        answer = 0

        while i >= 0:
            if symbol[s[i]] < tmp:
                answer -= symbol[s[i]]
            else :
                answer += symbol[s[i]]
            tmp=symbol[s[i]]
            i-=1
        
        return answer

        
# @lc code=end


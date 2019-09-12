class Solution:
    def isPalindrome(self, x: int) -> bool:
        if(x < 0):
            return False
        x = str(x)
        i = len(x) - 1
        tmp = str()
        while i >= 0:
            tmp += x[i]
            i -= 1
        
        return tmp == x
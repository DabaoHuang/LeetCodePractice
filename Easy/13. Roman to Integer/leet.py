class Solution:
    def romanToInt(self, s: str) -> int:
        i = len(s) - 1
        
        symbol = {'I':1,'V':5,'X':10,'L':50,'C':100,'D':500,'M':1000}
        answer = 0
        tmp = 0
        
        while i >= 0 :
            if symbol[s[i]] < tmp :
                answer -= symbol[s[i]]
            else :
                answer += symbol[s[i]]
            tmp = symbol[s[i]]
            i -= 1
            
        return answer
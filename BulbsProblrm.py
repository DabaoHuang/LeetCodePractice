bulbs=[5,4,1,2,3]
# bulbs=[2, 3, 4, 1, 5]
moment=0
on=0

for pos, bulb in enumerate(bulbs):
    on=max(on,bulb)
    if(on == pos+1):
        moment=moment+1

print(moment)
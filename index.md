```{python}

import random

def randomize():
    
    teams = ["Greece","Mexico","Italy","'Murica","Spain","Croatia","Serbia","Australia"]
    used = []
    m1 = []
    m2 = []
    m3 = []
    m4 = []

    def matchmake(mat,number):
        ri = random.randint(0,(7 - (2 * (number - 1))))
        mat.append(teams[ri])
        teams.remove(teams[ri])
        ri = random.randint(0,(6 - (2 * (number - 1))))
        mat.append(teams[ri])
        teams.remove(teams[ri])
        print(mat)
    
    matchmake(m1,1)
    matchmake(m2,2)
    matchmake(m3,3)
    matchmake(m4,4)

randomize()

```
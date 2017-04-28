# calculateAverage.py
# A program to calculate the average from several numbers. We will use 82, 90 and 95 for example.

# ============================================================ #
# Functional                                                   #
# Treat your code as math equation.                            #
# ============================================================ #

import functools # Import functools because we will use reduce()
sumNumber = functools.reduce(lambda x, y: x+y, [82 ,90 ,95])
print(sumNumber/3)

# Reduce function is used to apply function of two arguments.
# On this example we use lambda and list to sum the numbers in the list.
# There are so many easier method to sum numbers but on functional way--
# you utilize higher-order functions and lambda to do your job.

# ============================================================ #
# Imperative                                                   #
# Give command to computer to change the program's state.      #
# ============================================================ #

numberList = [82, 90, 95]
numberAmount = 3
count = 0
for number in numberList:
    count += number
print(count/numberAmount)

# Create the list, then sum the numbers in list into 'sum' variable.
# Then divide the sum by amount of number in the list.

# ============================================================ #
# Object-Oriented                                              #
# Treat your code as object.                                   #
# ============================================================ #
class calculateNumbers: # You always start object oriented programming with creating class.
    def __init__(self, numberList): # __init__ is run as soon as the class is called.
        self.numberList = numberList # 'self' Has property called numberList that contains numberList.
    def calculateAverage(self):
        self.sum = sum(self.numberList)
        self.average = self.sum/3
createList = calculateNumbers([82, 90, 95])
createList.calculateAverage()
print(createList.average)

# As you can see here, Object Oriented approach always use 'self'.
# 'self' is used so you can refer the code as 'self' and adding stuff--
# to 'self'. For example is 'self.numberList', this makes 'self'--
# has property called numberlist.

# robot-assignment

To run a script - 
1. Go to src folder on the command line.
2. Run the command => "php robot.php clean --floor=carpet --area=80" (User can give different values to floor and area arguments. The floor value can be carpet or hard)

To run the test cases from the root folder -
1. "./vendor/bin/phpunit tests"



Sample Output based on below assumptions: (Please check the sample output in raw mode)

- The robot has a battery big enough to clean for 60 seconds in one charge.
- The battery charge from 0 to 100% takes 30 seconds.

1. For hard floor having area 65:- (The robot can clean 1 m2 of hard floor in 1 second.)

PS C:\Projects\finalrobot\robot-assignment\src> php robot.php clean --floor=hard --area=65

The robot is cleaning the apartment, which has 65 m square hard floor.
The battery is fully charged now.

The area covered till now is: 1 m square. The Battery level is: 98%	
The area covered till now is: 2 m square. The Battery level is: 96%	
The area covered till now is: 3 m square. The Battery level is: 95%	
The area covered till now is: 4 m square. The Battery level is: 93%	
The area covered till now is: 5 m square. The Battery level is: 92%	
The area covered till now is: 6 m square. The Battery level is: 90%	
The area covered till now is: 7 m square. The Battery level is: 88%	
The area covered till now is: 8 m square. The Battery level is: 87%	
The area covered till now is: 9 m square. The Battery level is: 85%	
The area covered till now is: 10 m square. The Battery level is: 84%	
The area covered till now is: 11 m square. The Battery level is: 82%	
The area covered till now is: 12 m square. The Battery level is: 80%	
The area covered till now is: 13 m square. The Battery level is: 79%	
The area covered till now is: 14 m square. The Battery level is: 77%	
The area covered till now is: 15 m square. The Battery level is: 76%	
The area covered till now is: 16 m square. The Battery level is: 74%	
The area covered till now is: 17 m square. The Battery level is: 72%	
The area covered till now is: 18 m square. The Battery level is: 71%	
The area covered till now is: 19 m square. The Battery level is: 69%	
The area covered till now is: 20 m square. The Battery level is: 68%	
The area covered till now is: 21 m square. The Battery level is: 66%	
The area covered till now is: 22 m square. The Battery level is: 64%	
The area covered till now is: 23 m square. The Battery level is: 63%	
The area covered till now is: 24 m square. The Battery level is: 61%	
The area covered till now is: 25 m square. The Battery level is: 60%	
The area covered till now is: 26 m square. The Battery level is: 58%	
The area covered till now is: 27 m square. The Battery level is: 56%	
The area covered till now is: 28 m square. The Battery level is: 55%	
The area covered till now is: 29 m square. The Battery level is: 53%	
The area covered till now is: 30 m square. The Battery level is: 52%	
The area covered till now is: 31 m square. The Battery level is: 50%	
The area covered till now is: 32 m square. The Battery level is: 48%	
The area covered till now is: 33 m square. The Battery level is: 47%	
The area covered till now is: 34 m square. The Battery level is: 45%	
The area covered till now is: 35 m square. The Battery level is: 44%	
The area covered till now is: 36 m square. The Battery level is: 42%	
The area covered till now is: 37 m square. The Battery level is: 40%	
The area covered till now is: 38 m square. The Battery level is: 39%	
The area covered till now is: 39 m square. The Battery level is: 37%	
The area covered till now is: 40 m square. The Battery level is: 36%	
The area covered till now is: 41 m square. The Battery level is: 34%	
The area covered till now is: 42 m square. The Battery level is: 32%	
The area covered till now is: 43 m square. The Battery level is: 31%	
The area covered till now is: 44 m square. The Battery level is: 29%	
The area covered till now is: 45 m square. The Battery level is: 28%	
The area covered till now is: 46 m square. The Battery level is: 26%	
The area covered till now is: 47 m square. The Battery level is: 24%	
The area covered till now is: 48 m square. The Battery level is: 23%	
The area covered till now is: 49 m square. The Battery level is: 21%	
The area covered till now is: 50 m square. The Battery level is: 20%	
The area covered till now is: 51 m square. The Battery level is: 18%	
The area covered till now is: 52 m square. The Battery level is: 16%	
The area covered till now is: 53 m square. The Battery level is: 15%	
The area covered till now is: 54 m square. The Battery level is: 13%	
The area covered till now is: 55 m square. The Battery level is: 12%	
The area covered till now is: 56 m square. The Battery level is: 10%	
The area covered till now is: 58 m square. The Battery level is: 7%	
The area covered till now is: 59 m square. The Battery level is: 5%	
The area covered till now is: 60 m square. The Battery level is: 4%	
The area covered till now is: 61 m square. The Battery level is: 2%	
The area covered till now is: 62 m square. The Battery level is: 0%	

The battery has been used for 60 seconds.
The time to charge the battery... It will take 30 seconds!

The area covered till now is: 63 m square. The Battery level is: 98%	
The area covered till now is: 64 m square. The Battery level is: 96%	
The area covered till now is: 65 m square. The Battery level is: 95%	
The clean up has been done! Ending the process!
PS C:\Projects\finalrobot\robot-assignment\src>

PS C:\Projects\finalrobot\robot-assignment\src> php robot.php clean --floor=hard --area=65

The robot is cleaning the apartment, which has 65 m square hard floor.
The battery is fully charged now.

The area covered till now is: 1 m square. The Battery level is: 98%

The area covered till now is: 2 m square. The Battery level is: 96%

The area covered till now is: 3 m square. The Battery level is: 95%

The area covered till now is: 4 m square. The Battery level is: 93%

The area covered till now is: 5 m square. The Battery level is: 92%

The area covered till now is: 6 m square. The Battery level is: 90%

The area covered till now is: 7 m square. The Battery level is: 88%

The area covered till now is: 8 m square. The Battery level is: 87%

The area covered till now is: 9 m square. The Battery level is: 85%

The area covered till now is: 10 m square. The Battery level is: 84%

The area covered till now is: 11 m square. The Battery level is: 82%

The area covered till now is: 12 m square. The Battery level is: 80%

The area covered till now is: 13 m square. The Battery level is: 79%

The area covered till now is: 14 m square. The Battery level is: 77%

The area covered till now is: 15 m square. The Battery level is: 76%

The area covered till now is: 16 m square. The Battery level is: 74%

The area covered till now is: 17 m square. The Battery level is: 72%

The area covered till now is: 18 m square. The Battery level is: 71%

The area covered till now is: 19 m square. The Battery level is: 69%

The area covered till now is: 20 m square. The Battery level is: 68%

The area covered till now is: 21 m square. The Battery level is: 66%

The area covered till now is: 22 m square. The Battery level is: 64%

The area covered till now is: 23 m square. The Battery level is: 63%

The area covered till now is: 24 m square. The Battery level is: 61%

The area covered till now is: 25 m square. The Battery level is: 60%

The area covered till now is: 26 m square. The Battery level is: 58%

The area covered till now is: 27 m square. The Battery level is: 56%

The area covered till now is: 28 m square. The Battery level is: 55%

The area covered till now is: 29 m square. The Battery level is: 53%

The area covered till now is: 30 m square. The Battery level is: 52%

The area covered till now is: 31 m square. The Battery level is: 50%

The area covered till now is: 32 m square. The Battery level is: 48%

The area covered till now is: 33 m square. The Battery level is: 47%

The area covered till now is: 34 m square. The Battery level is: 45%

The area covered till now is: 35 m square. The Battery level is: 44%

The area covered till now is: 36 m square. The Battery level is: 42%

The area covered till now is: 37 m square. The Battery level is: 40%

The area covered till now is: 38 m square. The Battery level is: 39%

The area covered till now is: 39 m square. The Battery level is: 37%

The area covered till now is: 40 m square. The Battery level is: 36%

The area covered till now is: 41 m square. The Battery level is: 34%

The area covered till now is: 42 m square. The Battery level is: 32%

The area covered till now is: 43 m square. The Battery level is: 31%

The area covered till now is: 44 m square. The Battery level is: 29%

The area covered till now is: 45 m square. The Battery level is: 28%

The area covered till now is: 46 m square. The Battery level is: 26%

The area covered till now is: 47 m square. The Battery level is: 24%

The area covered till now is: 48 m square. The Battery level is: 23%

The area covered till now is: 49 m square. The Battery level is: 21%

The area covered till now is: 50 m square. The Battery level is: 20%

The area covered till now is: 51 m square. The Battery level is: 18%

The area covered till now is: 52 m square. The Battery level is: 16%

The area covered till now is: 53 m square. The Battery level is: 15%

The area covered till now is: 54 m square. The Battery level is: 13%

The area covered till now is: 55 m square. The Battery level is: 12%

The area covered till now is: 56 m square. The Battery level is: 10%

The area covered till now is: 58 m square. The Battery level is: 7%

The area covered till now is: 59 m square. The Battery level is: 5%

The area covered till now is: 60 m square. The Battery level is: 4%

The area covered till now is: 61 m square. The Battery level is: 2%

The area covered till now is: 62 m square. The Battery level is: 0%


The battery has been used for 60 seconds.
The time to charge the battery... It will take 30 seconds!

The area covered till now is: 63 m square. The Battery level is: 98%

The area covered till now is: 64 m square. The Battery level is: 96%

The area covered till now is: 65 m square. The Battery level is: 95%

The clean up has been done! Ending the process!
PS C:\Projects\finalrobot\robot-assignment\src>

PS C:\Projects\finalrobot\robot-assignment\src> php robot.php clean --floor=hard --area=65

The robot is cleaning the apartment, which has 65 m square hard floor.
The battery is fully charged now.

The area covered till now is: 1 m square. The Battery level is: 98%
The area covered till now is: 2 m square. The Battery level is: 96%
The area covered till now is: 3 m square. The Battery level is: 95%
The area covered till now is: 4 m square. The Battery level is: 93%
The area covered till now is: 5 m square. The Battery level is: 92%
The area covered till now is: 6 m square. The Battery level is: 90%
The area covered till now is: 7 m square. The Battery level is: 88%
The area covered till now is: 8 m square. The Battery level is: 87%
The area covered till now is: 9 m square. The Battery level is: 85%
The area covered till now is: 10 m square. The Battery level is: 84%
The area covered till now is: 11 m square. The Battery level is: 82%
The area covered till now is: 12 m square. The Battery level is: 80%
The area covered till now is: 13 m square. The Battery level is: 79%
The area covered till now is: 14 m square. The Battery level is: 77%
The area covered till now is: 15 m square. The Battery level is: 76%
The area covered till now is: 16 m square. The Battery level is: 74%
The area covered till now is: 17 m square. The Battery level is: 72%
The area covered till now is: 18 m square. The Battery level is: 71%
The area covered till now is: 19 m square. The Battery level is: 69%
The area covered till now is: 20 m square. The Battery level is: 68%
The area covered till now is: 21 m square. The Battery level is: 66%
The area covered till now is: 22 m square. The Battery level is: 64%
The area covered till now is: 23 m square. The Battery level is: 63%
The area covered till now is: 24 m square. The Battery level is: 61%
The area covered till now is: 25 m square. The Battery level is: 60%
The area covered till now is: 26 m square. The Battery level is: 58%
The area covered till now is: 27 m square. The Battery level is: 56%
The area covered till now is: 28 m square. The Battery level is: 55%
The area covered till now is: 29 m square. The Battery level is: 53%
The area covered till now is: 30 m square. The Battery level is: 52%
The area covered till now is: 31 m square. The Battery level is: 50%
The area covered till now is: 32 m square. The Battery level is: 48%
The area covered till now is: 33 m square. The Battery level is: 47%
The area covered till now is: 34 m square. The Battery level is: 45%
The area covered till now is: 35 m square. The Battery level is: 44%
The area covered till now is: 36 m square. The Battery level is: 42%
The area covered till now is: 37 m square. The Battery level is: 40%
The area covered till now is: 38 m square. The Battery level is: 39%
The area covered till now is: 39 m square. The Battery level is: 37%
The area covered till now is: 40 m square. The Battery level is: 36%
The area covered till now is: 41 m square. The Battery level is: 34%
The area covered till now is: 42 m square. The Battery level is: 32%
The area covered till now is: 43 m square. The Battery level is: 31%
The area covered till now is: 44 m square. The Battery level is: 29%
The area covered till now is: 45 m square. The Battery level is: 28%
The area covered till now is: 46 m square. The Battery level is: 26%
The area covered till now is: 47 m square. The Battery level is: 24%
The area covered till now is: 48 m square. The Battery level is: 23%
The area covered till now is: 49 m square. The Battery level is: 21%
The area covered till now is: 50 m square. The Battery level is: 20%
The area covered till now is: 51 m square. The Battery level is: 18%
The area covered till now is: 52 m square. The Battery level is: 16%
The area covered till now is: 53 m square. The Battery level is: 15%
The area covered till now is: 54 m square. The Battery level is: 13%
The area covered till now is: 55 m square. The Battery level is: 12%
The area covered till now is: 56 m square. The Battery level is: 10%
The area covered till now is: 58 m square. The Battery level is: 7%
The area covered till now is: 59 m square. The Battery level is: 5%
The area covered till now is: 60 m square. The Battery level is: 4%
The area covered till now is: 61 m square. The Battery level is: 2%
The area covered till now is: 62 m square. The Battery level is: 0%

The battery has been used for 60 seconds.
The time to charge the battery... It will take 30 seconds!

The area covered till now is: 63 m square. The Battery level is: 98%
The area covered till now is: 64 m square. The Battery level is: 96%
The area covered till now is: 65 m square. The Battery level is: 95%
The clean up has been done! Ending the process!
PS C:\Projects\finalrobot\robot-assignment\src>

PS C:\Projects\finalrobot\robot-assignment\src> php robot.php clean --floor=hard --area=65  

The robot is cleaning the apartment, which has 65 m square hard floor.
The battery is fully charged now.

The area covered till now is: 1 m square. The Battery level is: 98%   
The area covered till now is: 2 m square. The Battery level is: 96%
The area covered till now is: 3 m square. The Battery level is: 95%
The area covered till now is: 4 m square. The Battery level is: 93%
The area covered till now is: 5 m square. The Battery level is: 92%
The area covered till now is: 6 m square. The Battery level is: 90%
The area covered till now is: 7 m square. The Battery level is: 88%
The area covered till now is: 8 m square. The Battery level is: 87%
The area covered till now is: 9 m square. The Battery level is: 85%
The area covered till now is: 10 m square. The Battery level is: 84%
The area covered till now is: 11 m square. The Battery level is: 82%
The area covered till now is: 12 m square. The Battery level is: 80%
The area covered till now is: 13 m square. The Battery level is: 79%
The area covered till now is: 14 m square. The Battery level is: 77%
The area covered till now is: 15 m square. The Battery level is: 76%
The area covered till now is: 16 m square. The Battery level is: 74%
The area covered till now is: 17 m square. The Battery level is: 72%
The area covered till now is: 18 m square. The Battery level is: 71%
The area covered till now is: 19 m square. The Battery level is: 69%
The area covered till now is: 20 m square. The Battery level is: 68%
The area covered till now is: 21 m square. The Battery level is: 66%
The area covered till now is: 22 m square. The Battery level is: 64%
The area covered till now is: 23 m square. The Battery level is: 63%
The area covered till now is: 24 m square. The Battery level is: 61%
The area covered till now is: 25 m square. The Battery level is: 60%
The area covered till now is: 26 m square. The Battery level is: 58%
The area covered till now is: 27 m square. The Battery level is: 56%
The area covered till now is: 28 m square. The Battery level is: 55%
The area covered till now is: 29 m square. The Battery level is: 53%
The area covered till now is: 30 m square. The Battery level is: 52%
The area covered till now is: 31 m square. The Battery level is: 50%
The area covered till now is: 32 m square. The Battery level is: 48%
The area covered till now is: 33 m square. The Battery level is: 47%
The area covered till now is: 34 m square. The Battery level is: 45%
The area covered till now is: 35 m square. The Battery level is: 44%
The area covered till now is: 36 m square. The Battery level is: 42%
The area covered till now is: 37 m square. The Battery level is: 40%
The area covered till now is: 38 m square. The Battery level is: 39%
The area covered till now is: 39 m square. The Battery level is: 37%
The area covered till now is: 40 m square. The Battery level is: 36%
The area covered till now is: 41 m square. The Battery level is: 34%
The area covered till now is: 42 m square. The Battery level is: 32%
The area covered till now is: 43 m square. The Battery level is: 31%
The area covered till now is: 44 m square. The Battery level is: 29%
The area covered till now is: 45 m square. The Battery level is: 28%
The area covered till now is: 46 m square. The Battery level is: 26%
The area covered till now is: 47 m square. The Battery level is: 24%
The area covered till now is: 48 m square. The Battery level is: 23%
The area covered till now is: 49 m square. The Battery level is: 21%
The area covered till now is: 50 m square. The Battery level is: 20%
The area covered till now is: 51 m square. The Battery level is: 18%
The area covered till now is: 52 m square. The Battery level is: 16%
The area covered till now is: 53 m square. The Battery level is: 15%
The area covered till now is: 54 m square. The Battery level is: 13%
The area covered till now is: 55 m square. The Battery level is: 12%
The area covered till now is: 56 m square. The Battery level is: 10%
The area covered till now is: 57 m square. The Battery level is: 8%
The area covered till now is: 58 m square. The Battery level is: 7%
The area covered till now is: 59 m square. The Battery level is: 5%
The area covered till now is: 60 m square. The Battery level is: 4%
The area covered till now is: 61 m square. The Battery level is: 2%
The area covered till now is: 62 m square. The Battery level is: 0%

The battery has been used for 60 seconds.
The time to charge the battery... It will take 30 seconds!
The battery is fully charged now...

The area covered till now is: 63 m square. The Battery level is: 98%
The area covered till now is: 64 m square. The Battery level is: 96%
The area covered till now is: 65 m square. The Battery level is: 95%
The clean up has been done! Ending the process!
PS C:\Projects\finalrobot\robot-assignment\src> 

2. For carpet floor having area 70 - (The robot can clean 1 m2 of carpet in 2 seconds.)

PS C:\Projects\finalrobot\robot-assignment\src> php robot.php clean --floor=carpet --area=70

The robot is cleaning the apartment, which has 70 m square carpet floor.
The battery is fully charged now.

The area covered till now is: 1 m square. The Battery level is: 98%
The area covered till now is: 1 m square. The Battery level is: 96%
The area covered till now is: 2 m square. The Battery level is: 95%
The area covered till now is: 2 m square. The Battery level is: 93%
The area covered till now is: 3 m square. The Battery level is: 92%
The area covered till now is: 3 m square. The Battery level is: 90%
The area covered till now is: 4 m square. The Battery level is: 88%
The area covered till now is: 4 m square. The Battery level is: 87%
The area covered till now is: 5 m square. The Battery level is: 85%
The area covered till now is: 5 m square. The Battery level is: 84%
The area covered till now is: 6 m square. The Battery level is: 82%
The area covered till now is: 6 m square. The Battery level is: 80%
The area covered till now is: 7 m square. The Battery level is: 79%
The area covered till now is: 7 m square. The Battery level is: 77%
The area covered till now is: 8 m square. The Battery level is: 76%
The area covered till now is: 8 m square. The Battery level is: 74%
The area covered till now is: 9 m square. The Battery level is: 72%
The area covered till now is: 9 m square. The Battery level is: 71%
The area covered till now is: 10 m square. The Battery level is: 69%
The area covered till now is: 10 m square. The Battery level is: 68%
The area covered till now is: 11 m square. The Battery level is: 66%
The area covered till now is: 11 m square. The Battery level is: 64%
The area covered till now is: 12 m square. The Battery level is: 63%
The area covered till now is: 12 m square. The Battery level is: 61%
The area covered till now is: 13 m square. The Battery level is: 60%
The area covered till now is: 13 m square. The Battery level is: 58%
The area covered till now is: 14 m square. The Battery level is: 56%
The area covered till now is: 14 m square. The Battery level is: 55%
The area covered till now is: 15 m square. The Battery level is: 53%
The area covered till now is: 15 m square. The Battery level is: 52%
The area covered till now is: 16 m square. The Battery level is: 50%
The area covered till now is: 16 m square. The Battery level is: 48%
The area covered till now is: 17 m square. The Battery level is: 47%
The area covered till now is: 17 m square. The Battery level is: 45%
The area covered till now is: 18 m square. The Battery level is: 44%
The area covered till now is: 18 m square. The Battery level is: 42%
The area covered till now is: 19 m square. The Battery level is: 40%
The area covered till now is: 19 m square. The Battery level is: 39%
The area covered till now is: 20 m square. The Battery level is: 37%
The area covered till now is: 20 m square. The Battery level is: 36%
The area covered till now is: 21 m square. The Battery level is: 34%
The area covered till now is: 21 m square. The Battery level is: 32%
The area covered till now is: 22 m square. The Battery level is: 31%
The area covered till now is: 22 m square. The Battery level is: 29%
The area covered till now is: 23 m square. The Battery level is: 28%
The area covered till now is: 23 m square. The Battery level is: 26%
The area covered till now is: 24 m square. The Battery level is: 24%
The area covered till now is: 24 m square. The Battery level is: 23%
The area covered till now is: 25 m square. The Battery level is: 21%
The area covered till now is: 25 m square. The Battery level is: 20%
The area covered till now is: 26 m square. The Battery level is: 18%
The area covered till now is: 26 m square. The Battery level is: 16%
The area covered till now is: 27 m square. The Battery level is: 15%
The area covered till now is: 27 m square. The Battery level is: 13%
The area covered till now is: 28 m square. The Battery level is: 12%
The area covered till now is: 28 m square. The Battery level is: 10%
The area covered till now is: 29 m square. The Battery level is: 8%
The area covered till now is: 29 m square. The Battery level is: 7%
The area covered till now is: 30 m square. The Battery level is: 5%
The area covered till now is: 30 m square. The Battery level is: 4%
The area covered till now is: 31 m square. The Battery level is: 2%
The area covered till now is: 31 m square. The Battery level is: 0%

The battery has been used for 60 seconds.
The time to charge the battery... It will take 30 seconds!
The battery is fully charged now...

The area covered till now is: 32 m square. The Battery level is: 98%
The area covered till now is: 32 m square. The Battery level is: 96%
The area covered till now is: 33 m square. The Battery level is: 95%
The area covered till now is: 33 m square. The Battery level is: 93%
The area covered till now is: 34 m square. The Battery level is: 92%
The area covered till now is: 34 m square. The Battery level is: 90%
The area covered till now is: 35 m square. The Battery level is: 88%
The area covered till now is: 35 m square. The Battery level is: 87%
The area covered till now is: 36 m square. The Battery level is: 85%
The area covered till now is: 36 m square. The Battery level is: 84%
The area covered till now is: 37 m square. The Battery level is: 82%
The area covered till now is: 37 m square. The Battery level is: 80%
The area covered till now is: 38 m square. The Battery level is: 79%
The area covered till now is: 38 m square. The Battery level is: 77%
The area covered till now is: 39 m square. The Battery level is: 76%
The area covered till now is: 39 m square. The Battery level is: 74%
The area covered till now is: 40 m square. The Battery level is: 72%
The area covered till now is: 40 m square. The Battery level is: 71%
The area covered till now is: 41 m square. The Battery level is: 69%
The area covered till now is: 41 m square. The Battery level is: 68%
The area covered till now is: 42 m square. The Battery level is: 66%
The area covered till now is: 42 m square. The Battery level is: 64%
The area covered till now is: 43 m square. The Battery level is: 63%
The area covered till now is: 43 m square. The Battery level is: 61%
The area covered till now is: 44 m square. The Battery level is: 60%
The area covered till now is: 44 m square. The Battery level is: 58%
The area covered till now is: 45 m square. The Battery level is: 56%
The area covered till now is: 45 m square. The Battery level is: 55%
The area covered till now is: 46 m square. The Battery level is: 53%
The area covered till now is: 46 m square. The Battery level is: 52%
The area covered till now is: 47 m square. The Battery level is: 50%
The area covered till now is: 47 m square. The Battery level is: 48%
The area covered till now is: 48 m square. The Battery level is: 47%
The area covered till now is: 48 m square. The Battery level is: 45%
The area covered till now is: 49 m square. The Battery level is: 44%
The area covered till now is: 49 m square. The Battery level is: 42%
The area covered till now is: 50 m square. The Battery level is: 40%
The area covered till now is: 50 m square. The Battery level is: 39%
The area covered till now is: 51 m square. The Battery level is: 37%
The area covered till now is: 51 m square. The Battery level is: 36%
The area covered till now is: 52 m square. The Battery level is: 34%
The area covered till now is: 52 m square. The Battery level is: 32%
The area covered till now is: 53 m square. The Battery level is: 31%
The area covered till now is: 53 m square. The Battery level is: 29%
The area covered till now is: 54 m square. The Battery level is: 28%
The area covered till now is: 54 m square. The Battery level is: 26%
The area covered till now is: 55 m square. The Battery level is: 24%
The area covered till now is: 55 m square. The Battery level is: 23%
The area covered till now is: 56 m square. The Battery level is: 21%
The area covered till now is: 56 m square. The Battery level is: 20%
The area covered till now is: 57 m square. The Battery level is: 18%
The area covered till now is: 57 m square. The Battery level is: 16%
The area covered till now is: 58 m square. The Battery level is: 15%
The area covered till now is: 58 m square. The Battery level is: 13%
The area covered till now is: 59 m square. The Battery level is: 12%
The area covered till now is: 59 m square. The Battery level is: 10%
The area covered till now is: 60 m square. The Battery level is: 8%
The area covered till now is: 60 m square. The Battery level is: 7%
The area covered till now is: 61 m square. The Battery level is: 5%
The area covered till now is: 61 m square. The Battery level is: 4%
The area covered till now is: 62 m square. The Battery level is: 2%
The area covered till now is: 62 m square. The Battery level is: 0%

The battery has been used for 60 seconds.
The time to charge the battery... It will take 30 seconds!
The battery is fully charged now...

The area covered till now is: 63 m square. The Battery level is: 98%
The area covered till now is: 63 m square. The Battery level is: 96%
The area covered till now is: 64 m square. The Battery level is: 95%
The area covered till now is: 64 m square. The Battery level is: 93%
The area covered till now is: 65 m square. The Battery level is: 92%
The area covered till now is: 65 m square. The Battery level is: 90%
The area covered till now is: 66 m square. The Battery level is: 88%
The area covered till now is: 66 m square. The Battery level is: 87%
The area covered till now is: 67 m square. The Battery level is: 85%
The area covered till now is: 67 m square. The Battery level is: 84%
The area covered till now is: 68 m square. The Battery level is: 82%
The area covered till now is: 68 m square. The Battery level is: 80%
The area covered till now is: 69 m square. The Battery level is: 79%
The area covered till now is: 69 m square. The Battery level is: 77%
The area covered till now is: 70 m square. The Battery level is: 76%
The clean up has been done! Ending the process!

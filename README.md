# robot-assignment

To run a script - 
1. Go to src folder on the command line.
2. Run the command => "php robot.php clean --floor=carpet --area=80" (User can give different values to floor and area arguments. The floor value can be carpet or hard)

To run the test cases from the root folder -
1. "./vendor/bin/phpunit tests"



Sample Output based on below assumptions: (Please check the sample output in raw mode)

- The robot has a battery big enough to clean for 60 seconds in one charge.
- The battery charge from 0 to 100% takes 30 seconds.

1. For hard floor having area 80:- (The robot can clean 1 m2 of hard floor in 1 second.)

PS C:\Users\Documents\robot\src> php robot.php clean --floor=hard --area=80
The robot is cleaning the apartment...
The battery is fully charged now.

The area covered till now is: 1 m square. The elapsed time: 1 second/s.
The area covered till now is: 2 m square. The elapsed time: 2 second/s.
The area covered till now is: 3 m square. The elapsed time: 3 second/s.
The area covered till now is: 4 m square. The elapsed time: 4 second/s.
The area covered till now is: 5 m square. The elapsed time: 5 second/s.
The area covered till now is: 6 m square. The elapsed time: 6 second/s.
The area covered till now is: 7 m square. The elapsed time: 7 second/s.
The area covered till now is: 8 m square. The elapsed time: 8 second/s.
The area covered till now is: 9 m square. The elapsed time: 9 second/s.
The area covered till now is: 10 m square. The elapsed time: 10 second/s.
The area covered till now is: 11 m square. The elapsed time: 11 second/s.
The area covered till now is: 12 m square. The elapsed time: 12 second/s.
The area covered till now is: 13 m square. The elapsed time: 13 second/s.
The area covered till now is: 14 m square. The elapsed time: 14 second/s.
The area covered till now is: 15 m square. The elapsed time: 15 second/s.
The area covered till now is: 16 m square. The elapsed time: 16 second/s.
The area covered till now is: 17 m square. The elapsed time: 17 second/s.
The area covered till now is: 18 m square. The elapsed time: 18 second/s.
The area covered till now is: 19 m square. The elapsed time: 19 second/s.
The area covered till now is: 20 m square. The elapsed time: 20 second/s.
The area covered till now is: 21 m square. The elapsed time: 21 second/s.
The area covered till now is: 22 m square. The elapsed time: 22 second/s.
The area covered till now is: 23 m square. The elapsed time: 23 second/s.
The area covered till now is: 24 m square. The elapsed time: 24 second/s.
The area covered till now is: 25 m square. The elapsed time: 25 second/s.
The area covered till now is: 26 m square. The elapsed time: 26 second/s.
The area covered till now is: 27 m square. The elapsed time: 27 second/s.
The area covered till now is: 28 m square. The elapsed time: 28 second/s.
The area covered till now is: 29 m square. The elapsed time: 29 second/s.
The area covered till now is: 30 m square. The elapsed time: 30 second/s.
The area covered till now is: 31 m square. The elapsed time: 31 second/s.
The area covered till now is: 32 m square. The elapsed time: 32 second/s.
The area covered till now is: 33 m square. The elapsed time: 33 second/s.
The area covered till now is: 34 m square. The elapsed time: 34 second/s.
The area covered till now is: 35 m square. The elapsed time: 35 second/s.
The area covered till now is: 36 m square. The elapsed time: 36 second/s.
The area covered till now is: 37 m square. The elapsed time: 37 second/s.
The area covered till now is: 38 m square. The elapsed time: 38 second/s.
The area covered till now is: 39 m square. The elapsed time: 39 second/s.
The area covered till now is: 40 m square. The elapsed time: 40 second/s.
The area covered till now is: 41 m square. The elapsed time: 41 second/s.
The area covered till now is: 42 m square. The elapsed time: 42 second/s.
The area covered till now is: 43 m square. The elapsed time: 43 second/s.
The area covered till now is: 44 m square. The elapsed time: 44 second/s.
The area covered till now is: 45 m square. The elapsed time: 45 second/s.
The area covered till now is: 46 m square. The elapsed time: 46 second/s.
The area covered till now is: 47 m square. The elapsed time: 47 second/s.
The area covered till now is: 48 m square. The elapsed time: 48 second/s.
The area covered till now is: 49 m square. The elapsed time: 49 second/s.
The area covered till now is: 50 m square. The elapsed time: 50 second/s.
The area covered till now is: 51 m square. The elapsed time: 51 second/s.
The area covered till now is: 52 m square. The elapsed time: 52 second/s.
The area covered till now is: 53 m square. The elapsed time: 53 second/s.
The area covered till now is: 54 m square. The elapsed time: 54 second/s.
The area covered till now is: 55 m square. The elapsed time: 55 second/s.
The area covered till now is: 56 m square. The elapsed time: 56 second/s.
The area covered till now is: 57 m square. The elapsed time: 57 second/s.
The area covered till now is: 58 m square. The elapsed time: 58 second/s.
The area covered till now is: 59 m square. The elapsed time: 59 second/s.
The area covered till now is: 60 m square. The elapsed time: 60 second/s.
The battery has been used for 60 seconds.
The time to charge the battery... It will take 30 seconds!
The battery is fully charged now...
The area covered till now is: 61 m square. The elapsed time: 1 second/s.
The area covered till now is: 62 m square. The elapsed time: 2 second/s.
The area covered till now is: 63 m square. The elapsed time: 3 second/s.
The area covered till now is: 64 m square. The elapsed time: 4 second/s.
The area covered till now is: 65 m square. The elapsed time: 5 second/s.
The area covered till now is: 66 m square. The elapsed time: 6 second/s.
The area covered till now is: 67 m square. The elapsed time: 7 second/s.
The area covered till now is: 68 m square. The elapsed time: 8 second/s.
The area covered till now is: 69 m square. The elapsed time: 9 second/s.
The area covered till now is: 70 m square. The elapsed time: 10 second/s.
The area covered till now is: 71 m square. The elapsed time: 11 second/s.
The area covered till now is: 72 m square. The elapsed time: 12 second/s.
The area covered till now is: 73 m square. The elapsed time: 13 second/s.
The area covered till now is: 74 m square. The elapsed time: 14 second/s.
The area covered till now is: 75 m square. The elapsed time: 15 second/s.
The area covered till now is: 76 m square. The elapsed time: 16 second/s.
The area covered till now is: 77 m square. The elapsed time: 17 second/s.
The area covered till now is: 78 m square. The elapsed time: 18 second/s.
The area covered till now is: 79 m square. The elapsed time: 19 second/s.
The area covered till now is: 80 m square. The elapsed time: 20 second/s.
The clean up has been done! Ending the process!

2. For carpet floor having area 60 - (The robot can clean 1 m2 of carpet in 2 seconds.)

PS C:\Users\Documents\robot\src> php robot.php clean --floor=carpet --area=60
The robot is cleaning the apartment...
The battery is fully charged now.

The area covered till now is: 1 m square. The elapsed time: 1 second/s.
The area covered till now is: 1 m square. The elapsed time: 2 second/s.
The area covered till now is: 2 m square. The elapsed time: 3 second/s.
The area covered till now is: 2 m square. The elapsed time: 4 second/s.
The area covered till now is: 3 m square. The elapsed time: 5 second/s.
The area covered till now is: 3 m square. The elapsed time: 6 second/s.
The area covered till now is: 4 m square. The elapsed time: 7 second/s.
The area covered till now is: 4 m square. The elapsed time: 8 second/s.
The area covered till now is: 5 m square. The elapsed time: 9 second/s.
The area covered till now is: 5 m square. The elapsed time: 10 second/s.
The area covered till now is: 6 m square. The elapsed time: 11 second/s.
The area covered till now is: 6 m square. The elapsed time: 12 second/s.
The area covered till now is: 7 m square. The elapsed time: 13 second/s.
The area covered till now is: 7 m square. The elapsed time: 14 second/s.
The area covered till now is: 8 m square. The elapsed time: 15 second/s.
The area covered till now is: 8 m square. The elapsed time: 16 second/s.
The area covered till now is: 9 m square. The elapsed time: 17 second/s.
The area covered till now is: 9 m square. The elapsed time: 18 second/s.
The area covered till now is: 10 m square. The elapsed time: 19 second/s.
The area covered till now is: 10 m square. The elapsed time: 20 second/s.
The area covered till now is: 11 m square. The elapsed time: 21 second/s.
The area covered till now is: 11 m square. The elapsed time: 22 second/s.
The area covered till now is: 12 m square. The elapsed time: 23 second/s.
The area covered till now is: 12 m square. The elapsed time: 24 second/s.
The area covered till now is: 13 m square. The elapsed time: 25 second/s.
The area covered till now is: 13 m square. The elapsed time: 26 second/s.
The area covered till now is: 14 m square. The elapsed time: 27 second/s.
The area covered till now is: 14 m square. The elapsed time: 28 second/s.
The area covered till now is: 15 m square. The elapsed time: 29 second/s.
The area covered till now is: 15 m square. The elapsed time: 30 second/s.
The area covered till now is: 16 m square. The elapsed time: 31 second/s.
The area covered till now is: 16 m square. The elapsed time: 32 second/s.
The area covered till now is: 17 m square. The elapsed time: 33 second/s.
The area covered till now is: 17 m square. The elapsed time: 34 second/s.
The area covered till now is: 18 m square. The elapsed time: 35 second/s.
The area covered till now is: 18 m square. The elapsed time: 36 second/s.
The area covered till now is: 19 m square. The elapsed time: 37 second/s.
The area covered till now is: 19 m square. The elapsed time: 38 second/s.
The area covered till now is: 20 m square. The elapsed time: 39 second/s.
The area covered till now is: 20 m square. The elapsed time: 40 second/s.
The area covered till now is: 21 m square. The elapsed time: 41 second/s.
The area covered till now is: 21 m square. The elapsed time: 42 second/s.
The area covered till now is: 22 m square. The elapsed time: 43 second/s.
The area covered till now is: 22 m square. The elapsed time: 44 second/s.
The area covered till now is: 23 m square. The elapsed time: 45 second/s.
The area covered till now is: 23 m square. The elapsed time: 46 second/s.
The area covered till now is: 24 m square. The elapsed time: 47 second/s.
The area covered till now is: 24 m square. The elapsed time: 48 second/s.
The area covered till now is: 25 m square. The elapsed time: 49 second/s.
The area covered till now is: 25 m square. The elapsed time: 50 second/s.
The area covered till now is: 26 m square. The elapsed time: 51 second/s.
The area covered till now is: 26 m square. The elapsed time: 52 second/s.
The area covered till now is: 27 m square. The elapsed time: 53 second/s.
The area covered till now is: 27 m square. The elapsed time: 54 second/s.
The area covered till now is: 28 m square. The elapsed time: 55 second/s.
The area covered till now is: 28 m square. The elapsed time: 56 second/s.
The area covered till now is: 29 m square. The elapsed time: 57 second/s.
The area covered till now is: 29 m square. The elapsed time: 58 second/s.
The area covered till now is: 30 m square. The elapsed time: 59 second/s.
The area covered till now is: 30 m square. The elapsed time: 60 second/s.
The battery has been used for 60 seconds.
The time to charge the battery... It will take 30 seconds!
The battery is fully charged now...
The area covered till now is: 31 m square. The elapsed time: 1 second/s.
The area covered till now is: 31 m square. The elapsed time: 2 second/s.
The area covered till now is: 32 m square. The elapsed time: 3 second/s.
The area covered till now is: 32 m square. The elapsed time: 4 second/s.
The area covered till now is: 33 m square. The elapsed time: 5 second/s.
The area covered till now is: 33 m square. The elapsed time: 6 second/s.
The area covered till now is: 34 m square. The elapsed time: 7 second/s.
The area covered till now is: 34 m square. The elapsed time: 8 second/s.
The area covered till now is: 35 m square. The elapsed time: 9 second/s.
The area covered till now is: 35 m square. The elapsed time: 10 second/s.
The area covered till now is: 36 m square. The elapsed time: 11 second/s.
The area covered till now is: 36 m square. The elapsed time: 12 second/s.
The area covered till now is: 37 m square. The elapsed time: 13 second/s.
The area covered till now is: 37 m square. The elapsed time: 14 second/s.
The area covered till now is: 38 m square. The elapsed time: 15 second/s.
The area covered till now is: 38 m square. The elapsed time: 16 second/s.
The area covered till now is: 39 m square. The elapsed time: 17 second/s.
The area covered till now is: 39 m square. The elapsed time: 18 second/s.
The area covered till now is: 40 m square. The elapsed time: 19 second/s.
The area covered till now is: 40 m square. The elapsed time: 20 second/s.
The area covered till now is: 41 m square. The elapsed time: 21 second/s.
The area covered till now is: 41 m square. The elapsed time: 22 second/s.
The area covered till now is: 42 m square. The elapsed time: 23 second/s.
The area covered till now is: 42 m square. The elapsed time: 24 second/s.
The area covered till now is: 43 m square. The elapsed time: 25 second/s.
The area covered till now is: 43 m square. The elapsed time: 26 second/s.
The area covered till now is: 44 m square. The elapsed time: 27 second/s.
The area covered till now is: 44 m square. The elapsed time: 28 second/s.
The area covered till now is: 45 m square. The elapsed time: 29 second/s.
The area covered till now is: 45 m square. The elapsed time: 30 second/s.
The area covered till now is: 46 m square. The elapsed time: 31 second/s.
The area covered till now is: 46 m square. The elapsed time: 32 second/s.
The area covered till now is: 47 m square. The elapsed time: 33 second/s.
The area covered till now is: 47 m square. The elapsed time: 34 second/s.
The area covered till now is: 48 m square. The elapsed time: 35 second/s.
The area covered till now is: 48 m square. The elapsed time: 36 second/s.
The area covered till now is: 49 m square. The elapsed time: 37 second/s.
The area covered till now is: 49 m square. The elapsed time: 38 second/s.
The area covered till now is: 50 m square. The elapsed time: 39 second/s.
The area covered till now is: 50 m square. The elapsed time: 40 second/s.
The area covered till now is: 51 m square. The elapsed time: 41 second/s.
The area covered till now is: 51 m square. The elapsed time: 42 second/s.
The area covered till now is: 52 m square. The elapsed time: 43 second/s.
The area covered till now is: 52 m square. The elapsed time: 44 second/s.
The area covered till now is: 53 m square. The elapsed time: 45 second/s.
The area covered till now is: 53 m square. The elapsed time: 46 second/s.
The area covered till now is: 54 m square. The elapsed time: 47 second/s.
The area covered till now is: 54 m square. The elapsed time: 48 second/s.
The area covered till now is: 55 m square. The elapsed time: 49 second/s.
The area covered till now is: 55 m square. The elapsed time: 50 second/s.
The area covered till now is: 56 m square. The elapsed time: 51 second/s.
The area covered till now is: 56 m square. The elapsed time: 52 second/s.
The area covered till now is: 57 m square. The elapsed time: 53 second/s.
The area covered till now is: 57 m square. The elapsed time: 54 second/s.
The area covered till now is: 58 m square. The elapsed time: 55 second/s.
The area covered till now is: 58 m square. The elapsed time: 56 second/s.
The area covered till now is: 59 m square. The elapsed time: 57 second/s.
The area covered till now is: 59 m square. The elapsed time: 58 second/s.
The area covered till now is: 60 m square. The elapsed time: 59 second/s.
The clean up has been done! Ending the process!


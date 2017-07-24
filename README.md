# Roman Arithmetic
**This is a personal project

Assuming linux operating system or linux bash on windows

Steps to work: 
1) Clone the repository or download the zip
2) Change directory to the cloned folder (cd roman_arithmetic)
3) Run composer install
4) To run unit test enter: phpunit --filter RomanTest
    * If phpunit is not installed, please install the same first
    
5) For manual inputs: php artisan roman:arithmetic operand1(Roman number) arithmeticArgument(\+\-\/\*) operand2(Roman number)

The computation class is located in App directory with class name as: RomanArithmetic
The artisan command detail is location in app/console
The test class is located in Test\Feature directory

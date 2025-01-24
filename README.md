# PHP Type Juggling Bug
This repository demonstrates a common error in PHP caused by loose type handling when working with arrays and arithmetic operations.  The `bug.php` file shows a function that calculates the sum of numbers in an array.  However, the inclusion of a non-numeric string element ('4a') leads to unexpected results because of PHP's automatic type conversion (type juggling). The `bugSolution.php` file provides a corrected version with improved type handling.

## How to reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the incorrect sum due to type juggling.
4. Run `bugSolution.php` to see the corrected output.

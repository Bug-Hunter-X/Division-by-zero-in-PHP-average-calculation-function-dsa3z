# PHP Division by Zero Bug
This repository demonstrates a common error in PHP: division by zero.  The `calculate_average` function is designed to compute the average of an array of numbers. However, it fails to correctly handle the edge case of an empty input array. This leads to a division by zero error if an empty array is passed.

The `bug.php` file contains the buggy code. The `bugSolution.php` file provides a corrected version that addresses the division by zero issue.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the division by zero error.
4. Run `bugSolution.php` to see the corrected code in action.

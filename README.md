# PHP Reference Errors: Unexpected Array/Object Modification

This repository demonstrates a common yet subtle bug in PHP related to the use of references when passing arrays or objects to functions.  Incorrect handling of references can lead to unexpected modifications of the original data, causing difficult-to-debug issues.

## Bug Description

When an array or object is passed to a function by reference (using the `&` operator), modifications made within the function directly affect the original variable. If this behavior is not anticipated, it can result in unpredictable outcomes and program errors. 

## How to Reproduce

1. Clone this repository.
2. Navigate to the `bug.php` file.
3. Run the code using a PHP interpreter.  Observe the unexpected change in the `$myArray` array.

## Solution

The `bugSolution.php` file demonstrates how to avoid this problem.  By either passing by value or carefully managing expectations regarding modification, the issues can be resolved. 

## Conclusion

Understanding and correctly handling references is crucial for writing robust and predictable PHP code. Pay close attention to whether a function modifies its parameters and use copies where appropriate to avoid side effects.
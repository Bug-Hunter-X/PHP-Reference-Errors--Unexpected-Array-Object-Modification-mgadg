In PHP, a common yet often overlooked error involves incorrect handling of references. When passing arrays or objects to functions by reference using the `&` symbol, modifications within the function directly affect the original variable.  Forgetting this can lead to unexpected side effects and difficult-to-debug issues.  This is especially problematic when dealing with complex data structures or when multiple parts of the code operate on the same referenced variables.  For example:

```php
function modifyArray(array &$arr) {
  $arr[] = 4; // Adds 4 to the array
}

$myArray = [1, 2, 3];
modifyArray($myArray);
print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [3] => 3 [4] => 4 ) // Unexpected change!
```
Here, `modifyArray` alters the original `$myArray` unexpectedly if the coder is not aware that the function is modifying the original array due to passing it by reference.
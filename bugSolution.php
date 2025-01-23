To avoid the problem, there are several solutions:

1. **Pass by value:** Avoid using `&` when passing the array to the function. This creates a copy, so the original array remains unchanged.

```php
function modifyArray(array $arr) {
  $arr[] = 4; 
  return $arr; // Return the modified copy
}

$myArray = [1, 2, 3];
$myArray = modifyArray($myArray); // Assign the returned copy
print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [3] => 3 [4] => 4 ) // Expected change!
```

2. **Create a copy:** Create a copy of the array before passing it to the function to prevent modification of the original.

```php
function modifyArray(array $arr) {
  $arr[] = 4; 
}

$myArray = [1, 2, 3];
$myArrayCopy = $myArray; // Create a copy
modifyArray($myArrayCopy); 
print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [3] => 3 ) // Original unchanged
print_r($myArrayCopy); // Output: Array ( [0] => 1 [1] => 2 [3] => 3 [4] => 4 )
```

3. **Document carefully:**  If you *must* pass by reference for performance reasons, then extremely clear documentation within the function's definition is vital to warn developers of the side effect.
```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {  //Check if the element is numeric
      $sum += floatval($number); //Explicit type casting for safety
    } else {
      // Handle non-numeric elements appropriately (e.g., log an error, skip, throw an exception)
      trigger_error("Non-numeric element encountered: " . $number, E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum;
```
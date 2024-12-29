```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  if ($count === 0) { //Explicitly handle the division by zero
      return 0.0; //Return 0.0 for an empty array
  }
  return $sum / $count; 
}

$numbers = [];
$average = calculate_average($numbers);
echo "Average: " . $average;
```
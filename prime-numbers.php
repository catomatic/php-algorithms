<?php

# author: catomatic
# website: https://github.com/catomatic
# source: personal projects library

ini_set('display_errors', 1); 
error_reporting(E_ALL);

function find_primes($num) {
  $prime_array = array();

  for($i = 2; $i < ($num + 1); $i++) {
    array_push($prime_array, $i);
  }

  $p = 2;

  for($i = 2; $i <= $num; $i++) {
    if(($i != $p) && ($i % $p == 0)) {
      $prime_array = array_diff($prime_array, array($prime_array[$i]));
      $prime_array = array_values($prime_array);
    }

    if($i > $p) {
      $p = $i;
    }

    for($j = 0; $j <= count($prime_array) - 1; $j++) {
      if(($prime_array[$j] != $p) && (($prime_array[$j] % $p) == 0)) {
        $prime_array = array_diff($prime_array, array($prime_array[$j]));
        $prime_array = array_values($prime_array);
      }
    }
  }

  return $prime_array;
}

$primes = find_primes(100);

foreach($primes as $value) {
  echo ''.$value.' ';
}
unset($value);

?>
<?php

# author: catomatic
# website: https://github.com/catomatic
# source: personal projects library

ini_set('display_errors', 1); 
error_reporting(E_ALL);

function fibonacci($num) {
  $s0 = 0;
  $s1 = 1;
  $fib_array = array();
  if($num > 1) {
    for($i = 0; $i < $num + 1; $i++) {
      $s0 = $s0 + $s1;
      $s1 = $s0 - $s1;
      array_push($fib_array, $s1);
    }
  } else {
    echo 'Must be greater than 1.';
  }
  return $fib_array;
}

function negafibonacci($num) {
  $s0 = 0;
  $sn1 = -1;
  $fib_neg_array = array();
  if($num < 1) {
    for($i = 0; $i > $num; $i--) {
      $s0 = $sn1 - $s0;
      $sn1 = $s0 + $sn1;
      array_push($fib_neg_array, $s0);
    }
  } else {
    echo 'Must be less than 1.';
  }
  return $fib_neg_array;
}

$fib1 = fibonacci(13);

$fib2 = negafibonacci(-13);

foreach($fib1 as $value) {
  echo ''.$value.' ';
}
unset($value);

echo '<br />';

foreach($fib2 as $value) {
  echo ''.$value.' ';
}
unset($value);

?>
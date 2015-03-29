<?php

# author: catomatic
# website: https://github.com/catomatic
# source: personal projects library

ini_set('display_errors', 1); 
error_reporting(E_ALL);

function circle_sort($some_array) {
  $array_len = count($some_array);
  if($array_len <= 1) {
    return $some_array;
  }

  $mid_pt = floor($array_len / 2);
  $count = $mid_pt;

  while($count > 0) {
    for($i = 1; $i < $mid_pt; $i++) {
      if($some_array[$i] > $some_array[$i - 1]) {
        $x = $some_array[$i];
        $some_array[$i] = $some_array[$array_len - 1];
        $some_array[$array_len - 1] = $x;
      }
    }
    $count -= 1;
  }

  $left = array_slice($some_array, 0, $mid_pt);
  $right = array_slice($some_array, $mid_pt, $array_len);

  $left = circle_sort($left);
  $right = circle_sort($right);

  return merge($left, $right);
}

function merge($left, $right) {
  $result = array();

  while((count($left) > 0) && (count($right) > 0)) {
    if($left[0] <= $right[0]) {
      array_push($result, $left[0]);
      $left = array_slice($left, 1, count($left));
    } else {
      array_push($result, $right[0]);
      $right = array_slice($right, 1, count($right));
    }
  }

  while(count($left) > 0) {
    array_push($result, $left[0]);
    $left = array_slice($left, 1, count($left));
  }

  while(count($right) > 0) {
    array_push($result, $right[0]);
    $right = array_slice($right, 1, count($right));
  }

  return $result;
}

$num_array = array(4, 8, 9, 13, 2, 1, 5, 11, 7, 3, 6);
$num_array = circle_sort($num_array);

$word_array = array('apples', 'oranges', 'bob', 'grapes', 'flying squirrel', 'stuff');
$word_array = circle_sort($word_array);

foreach($num_array as $value) {
  echo ''.$value.' ';
}
unset($value);

echo '<br />';

foreach($word_array as $value) {
  echo ''.$value.' ';
}
unset($value);

?>
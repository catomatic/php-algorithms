<?php

# author: catomatic
# website: https://github.com/catomatic
# source: personal projects library

ini_set('display_errors', 1); 
error_reporting(E_ALL);

function merge_sort($some_array) {
  $array_len = count($some_array);
  if($array_len > 1) {
    $mid_pt = $array_len / 2;
    $left = array_slice($some_array, 0, $mid_pt);
    $right = array_slice($some_array, $mid_pt, $array_len);
    $left = merge_sort($left);
    $right = merge_sort($right);
    return merge($left, $right);
  } else {
    return $some_array;
  }
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

$num_array = array(4, 8, 9, 2, 1, 5, 7, 3, 6);
$num_array = merge_sort($num_array);

$word_array = array('apples', 'oranges', 'bob', 'grapes', 'flying squirrel', 'stuff');
$word_array = merge_sort($word_array);

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
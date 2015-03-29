<?php

# author: catomatic
# website: https://github.com/catomatic
# source: personal projects library

ini_set('display_errors', 1); 
error_reporting(E_ALL);

function quick_sort($some_array) {
  $array_len = count($some_array);
  if($array_len > 1) {
    $pivot = $some_array[floor($array_len / 2)];
    $less = array();
    $equal = array();
    $greater = array();

    for($i = 0; $i < $array_len; $i++) {
      if($some_array[$i] < $pivot) {
        array_push($less, $some_array[$i]);
      } elseif($some_array[$i] == $pivot) {
        array_push($equal, $some_array[$i]);
      } elseif($some_array[$i] > $pivot) {
        array_push($greater, $some_array[$i]);
      }
    }

    $less = quick_sort($less);
    $greater = quick_sort($greater);

    return array_merge($less, $equal, $greater);

  } else {
    return $some_array;
  }
}

$num_array = array(4, 8, 9, 2, 1, 5, 7, 3, 6);
$num_array = quick_sort($num_array);

$word_array = array('apples', 'oranges', 'bob', 'grapes', 'flying squirrel', 'stuff');
$word_array = quick_sort($word_array);

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
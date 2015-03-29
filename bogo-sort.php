<?php

# author: catomatic
# website: https://github.com/catomatic
# source: personal projects library

ini_set('display_errors', 1); 
error_reporting(E_ALL);

function knuth_shuffle(&$array) {
  $array_len = count($array);
  for($i = 0; $i < $array_len - 1; $i++) {
    $j = array_rand($array);
    $x = $array[$j];
    $array[$j] = $array[$i];
    $array[$i] = $x;
  }
}

function bogo_sort($array) {
  $count = 0;
  $array_len = count($array);
  while($count < 1000) {
    for($i = 0; $i < $array_len - 1; $i++) {
      while($array[$i] > $array[$i + 1]) {
        knuth_shuffle($array);
      }
    }
    $count += 1;
  }
  return $array;
}

# Probably won't sort
$long_num_list = [2, 6, 1, 9, 7, 5, 8, 3, 4];
$long_num_list = bogo_sort($long_num_list);

# Will almost always sort
$short_num_list = [2, 6, 1, 9];
$short_num_list = bogo_sort($short_num_list);

# Probably won't sort
$long_word_list = ['orange', 'flying squirrel', 'banana', 'grapes', 'bob', 'almonds', 'march', 'house', 'apple', 'blanket', 'cashew'];
$long_word_list = bogo_sort($long_word_list);

# Will almost always sort
$short_word_list = ['orange', 'flying squirrel', 'banana', 'grapes', 'bob'];
$short_word_list = bogo_sort($short_word_list);

foreach($long_num_list as $value) {
  echo ''.$value.' ';
}
unset($value);

echo '<br />';

foreach($short_num_list as $value) {
  echo ''.$value.' ';
}
unset($value);

echo '<br />';

foreach($long_word_list as $value) {
  echo ''.$value.' ';
}
unset($value);

echo '<br />';

foreach($short_word_list as $value) {
  echo ''.$value.' ';
}
unset($value);

?>
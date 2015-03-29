<?php

# author: catomatic
# website: https://github.com/catomatic
# source: personal projects library

ini_set('display_errors', 1); 
error_reporting(E_ALL);

function bubble_sort($some_array) {
  $count = count($some_array);
  while($count > 0) {
    for($i = 0; $i < $count - 1; $i++) {
      if($some_array[$i] > $some_array[$i + 1]) {
        $x = $some_array[$i];
        $some_array[$i] = $some_array[$i + 1];
        $some_array[$i + 1] = $x;
      }
    }
    $count -= 1;
  }
  return $some_array;
}

$num_array = array(4, 8, 9, 2, 1, 5, 7, 3, 6);
$num_array = bubble_sort($num_array);

$word_array = array('apples', 'oranges', 'bob', 'grapes', 'flying squirrel', 'stuff');
$word_array = bubble_sort($word_array);

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
--TEST--
Test for array structures within interfaces
--FILE--
<?php
interface iArrayA [
    'a' => string
]

interface iArrayB extends iArrayA [
    'b' => string,
    'c' => ?string
];

$array = (iArrayA & iArrayB) [
    'a' => 'hello',
    'b' => 'world',
    'c' => null
];

var_dump($array);
?>
--EXPECT--
array(3) {
  ["a"]=>
  string(5) "hello"
  ["b"]=>
  string(5) "world"
  ["c"]=>
  NULL
}

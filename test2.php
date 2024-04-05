<?php

$a = [
  '  001  ',
  ' 002 ',
  '3',
  '004C',
  '004A',
  '004B',
  '005',
  '006',
  '07',
  '8',
  '  9  ',
  '  0010A  ',
  '  B0010  ',
  '  B0011  ',
  'B0012',
  '  B0021  ',
  '  B0022  ',
  'B0030',
  'B0030A',
  'B0030B',
  'B00310',
  'B0031A',
  '00031',
  '32ABC',
  '0033',
  '40',
  '!!111',
];
sort($a);
var_dump($a);

/*
PHP 8.3.2 (cli)
array(27) {
  [0]=>
  string(7) "  001  "
  [1]=>
  string(9) "  0010A  "
  [2]=>
  string(5) "  9  "
  [3]=>
  string(9) "  B0010  "
  [4]=>
  string(9) "  B0011  "
  [5]=>
  string(9) "  B0021  "
  [6]=>
  string(9) "  B0022  "
  [7]=>
  string(5) " 002 "
  [8]=>
  string(5) "!!111"
  [9]=>
  string(4) "004A"
  [10]=>
  string(4) "004B"
  [11]=>
  string(4) "004C"
  [12]=>
  string(1) "3"
  [13]=>
  string(3) "005"
  [14]=>
  string(3) "006"
  [15]=>
  string(2) "07"
  [16]=>
  string(5) "32ABC"
  [17]=>
  string(1) "8"
  [18]=>
  string(5) "00031"
  [19]=>
  string(4) "0033"
  [20]=>
  string(2) "40"
  [21]=>
  string(5) "B0012"
  [22]=>
  string(5) "B0030"
  [23]=>
  string(6) "B0030A"
  [24]=>
  string(6) "B0030B"
  [25]=>
  string(6) "B00310"
  [26]=>
  string(6) "B0031A"
}
*/
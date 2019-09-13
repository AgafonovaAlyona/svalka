<?php
//1
$arr=['a', 'b', 'c'];
var_dump($arr[0],$arr[1],$arr[2]);

//2
echo $arr[0].$arr[1].$arr[2];

//3
//'a+b, c+d, a-d, a/d'
$arr=['a', 'b', 'c', 'd'];
echo $arr[0].'+'.$arr[1].','.
    $arr[2].'+'.$arr[3].','.
    $arr[0].'-'.$arr[3].','.
    $arr[0].'/'.$arr[3];
//4
$arr=[2, 5,3,9];
$result=$arr[0]*$arr[1]+$arr[3]*$arr[4];
echo $result;

//5
$arr[0]=1;
$arr[3]=2;
$arr[8]=3;
$arr[1]=4;
$arr[2]=5;
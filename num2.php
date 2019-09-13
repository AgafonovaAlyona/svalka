<?php
//1
$text='Привет, Мир!';
echo $text . 'Моя первая программа!';

//2
$text1='Привет, ';
$text2='Мир!';
echo $text1 . $text2;

// 3
$name='Алена';
$b='Привет, ' . $name;
echo $b;

//4
$age='19 лет';
$heigh='162 сантиметров';
echo 'Мой возраст: ' . $age . '|'. 'Мой рост: ' . $heigh;

//5
$text='abcde';
echo $text[0]; //Вывод а
echo $text[2];//Вывод c
echo $text[4];//Вывод e

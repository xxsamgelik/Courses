<?php
//$min = 40;
//print_r($argc);
//if ($min > 0 && $min <= 60) {
//    if ($min >= 0 && $min <= 14) {
//        print_r("Первая часть");
//    } else if ($min >= 15 && $min <= 30) {
//        print_r("Вторая часть");
//    } else if ($min >= 31 && $min <= 45) {
//        print_r("Третья часть");
//    } else {
//        print_r("Четвертая часть");
//    }
//} else {
//    print_r("Ошибка!");
//}
//$a = 2;
//$result = pow($a,9) + 1;
//if($result %3 ==0)
//{
//    $result/=3;
//    print_r("Число кратное 3 ".$result);
//
//}
//else
//{
//    print_r("Число не кратно трем");
//}

//Задание1
$day = rand(1,31);
if($day > 0 && $day <=31)
{
    if($day> 0 && $day <11)
    {
        print_r($day ."Число выпадает на первую декаду.\n");
    }
    else if($day>=11 && $day <21)
    {
        print_r($day."Число выпадает на вторую декаду\n");
    }
    else
    {
        print_r("Число выпадает на вторую декаду\n");
    }
}
else
{
    print_r("Ошибка, чильно маленькое / большое\n");
}

//Задание2
$a = 3;
$result = pow($a,6);
if($result % 5==0)
{
    print_r($result /=5);
}
else
{
    print_r("Число не кратно 5\n");
}

//Задание3
$year = rand(1453,2024);
if($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)
{
    print_r("Год високосный\n" .$year);
}
else
{
    print_r("Год не високосный\n" .$year);
}


<?php

//$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
//$seporater = '-';
//echo implode($seporater, $arr);
//
//$one = [1, 2, 3];
//$two = ['a', 'b', 'c'];
//var_dump(array_merge($one, $two));
//
//$three = ['a', 'b', 'c', 'd', 'e'];
//var_dump(array_map(function ($item){
//    return strtoupper($item);
//}, $three));
//
//$four = ['a', '-', 'b', '-', 'c', '-', 'd'];
//$del = array_splice($four, 1);
//var_dump($del);
//var_dump($four);
//
//$five = ['a', 'b', 'c', 'd', 'e'];
//$dela = array_splice($five, 1, 0, "!");
//$dela = array_splice($five, 3, 0, "!!");
//var_dump($dela);
//var_dump($five);

//$array = ['a', 'b', 'c', 'b', 'a'];
//$countValeus = array_unique($array);
//var_dump($countValeus);

$six = ['a', 'b', 'c', 'b', 'a'];
$array = array_count_values($six);
$six_seven = [];
for ($i = 0; $i <count($six); $i++){
    foreach ($array as $a => $b){
        if ($six[$i] == $a)
    }
}


//$seven = ['a'=>1, 'b'=>2, 'c'=>3];
//$rand = array_rand($seven, 2);
//var_dump($rand);
//
//$eignt = ['a', 'b', 'c', 'b', 'a'];
//$countValeus = array_count_values($eignt);
//var_dump($countValeus);
//
//
//$array = [];
//for ($i = 0; $i < 10; $i++) {
//    $array[$i] = 'x';
//}
//
//var_dump($array);

//$array = [];
//for ($i = 0; $i < 10; $i++) {
//    $array[$i] = rand(1,10);
//}
//
//var_dump($array);

//$array = [6, 14, 5, 23, 56];
//$sum = 0;
//foreach ($array as $num){
//    $sum += $num;
//}
//echo $sum;


//$arr = [
//    0 => ['name' => 'Коля', 'salary' => 300],
//    1 => ['name' => 'Вася', 'salary' => 400],
//    2 => ['name' => 'Петя', 'salary' => 500]
//    ];
////var_dump($arr);
//foreach ($arr as $user){
//    echo "{$user['name']} - {$user['salary']} <br>";
//}


//$arr = [1, 5, 13, 24, -67, 30, 15];
//echo array_sum($arr) /count($arr);

//$arr = ['Привет',  ', мир', '!'];
//foreach ($arr as $text){
//    echo $text;
//}

//$arr = ['Привет',  ', мир', '!'];
//
//$arr[0] = "Пока";
//
//echo $arr;
//

//$languages = [
//    'ru' =>['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота', 'Воскресенье'],
//    'en' =>['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
//];
//var_dump($languages['ru'][0]);
//var_dump($languages['en'][3]);


//for ($i = 1; $i <= 100; $i++){
//    if ($i % 2 == 0){
//        echo $i . "";
//    }
//}
//echo "<hr>";
//$i = 1;
//while ($i <= 100){
//    if ($i % 2 == 0){
//        echo $i . "";
//    }
//    $i++;
//}
//echo "<hr>";
//$i = 1;
//
//
//$a = 2;
//while ($a <= 100){
//    if ($a % 2 == 0){
//        echo "Число чётное!";
//    }
//    else{
//        echo "Число не чётное!";
//    }
//    $a++;break;
//}
//
//
//$sum = 0;
//for ($a = 1; $a <= 100; $a++){
//    $sum += $a;
//}
//echo $sum;
//
//$sum = 0;
//for ($a = 1; $a <= 100; $a++){
//    if ($a % 7 == 0){
//        $sum += $a;
//    }
//}
//echo $sum;
//
//
//$a = 9;
//for ($i = 1; $i <= $a; $i++) {
//    for ($j = 0; $j < $i; $j++) {
//        $str .= $i;
//    }
//}
//echo $str;
//
//
//for ($i=0; $i < 10000 ; $i++) {
//    if (strpos($i, "3", 0) !== false AND $i % 5 !==0 ) {
//        echo $i . "<br>";
//
//    }
//}
//$a = 1;
//$b = 10;
//
//if ($a % $b == 0){
//    echo "Число делится!";
//}
//else{
//    echo "У числа есть остаток!";
//}
//
//$year = 18;
//if ($year % 4 and $year % 400){
//    echo "Год високосный!";
//}
//else{
//    echo "Год не високосный!";
//}
//
//$month = 1;
//switch ($month){
//    case 12:
//    case 1:
//    case 2: echo 'Зима'; break;
//    case 3:
//    case 4:
//    case 5: echo 'Весна'; break;
//    case 6:
//    case 7:
//    case 8: echo 'Лето'; break;
//    case 9:
//    case 10:
//    case 11: echo 'Осень'; break;
//    default: echo 'Не верный диапозон!';
//}
//$operation = '2';
//switch ($operation){
//    case '1': echo 'Зима'; break;
//    case '2': echo 'Лето'; break;
//    case '3': echo 'Осень'; break;
//    case '4': echo 'Весна'; break;
//    default: echo 'Введите число от 1 до 4';
//}
//$x = 0;
//$y = 0;
//if ($x>0 and $y>0){
//    echo 'Первая четверть!';
//}
//elseif ($x>0 and $y<0)
//    echo 'Вторая четверть!';
//elseif ($x<0 and $y<0)
//    echo 'Третья четверть!';
//elseif ($x<0 and $y>0){
//    echo 'Четвертая четверть!';
//}
//else{
//    echo 'Мы в центре!';
//}
//$a = 7;
//$b = 3;
//$operation = '-';
//switch ($operation){
//    case '+': echo $a + $b; break;
//    case '-': echo $a - $b; break;
//    case '*': echo $a * $b; break;
//    case '/': echo $a / $b; break;
//    default: echo 'Все посчитано!';
//}
//
//$a = $_GET['a'];
//$b = $_GET['b'];
//$operation = $_GET['operation'];
//
//if ($operation == "+"){
//    $result = $a + $b;
//}
//elseif ($operation == "-"){
//    $result = $a - $b;
//}
//elseif ($operation == "*"){
//    $result = $a * $b;
//}
//elseif ($operation == "/"){
//    if ($b != 0)
//        $result = $a / $b;
//    }   else{
//        $result = "Ошибка деление на ноль!";
//    }
//


?>

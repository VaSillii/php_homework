<?php
//Задача 1
//Создать функцию с аргументом для вывода приветствия. Установить значение по умолчанию для аргумента равное «Гость»
function output_message($name, $def_value = 'Гость') {
    if ($name) {
        echo "Добро пожаловать,  $name!<br>";
    } else echo"Добро пожаловать, $def_value!<br>";
}
output_message("User");
output_message(null);













//Задача 2
//Допустим, пользователь вводит названия городов через пробел. Вы их присваиваете переменной.
//Переставьте названия так, чтобы названия были упорядочены по алфавиту.
$name_town = "Москва Вологда Череповец";
function sort_town($str) {
    
}

//Задача 3
//Написать функцию - конвертер строки.
//Возможности:
//перевод всех символов в верхний регистр,
//перевод всех символов в нижний регистр,
//перевод всех символов в нижний регистр и первых символов слов в верхний регистр.
//Это должна быть одна функция
function transfSymbol($transf_str, $operation) {
    switch($operation) {
        case "up": 
            $up_str = mb_strtoupper($transf_str);
            echo "перевод всех символов в верхний регистр:  $up_str";
            break;
        case "botton": 
            $botton_str = mb_strtolower($transf_str);
            echo "<br>перевод всех символов в нижний регистр: $botton_str";
            break;
        case "transform_str": {
            $t_str = mb_strtolower($transf_str);
            $t_str = ucwords($transf_str);
            echo "<br>перевод всех символов в нижний регистр и первых символов слов в верхний регистр:   $t_str";
            break;
        }
    }
}

$convert_str = "Тествая строка";
transfSymbol($convert_str,"up");
transfSymbol($convert_str,"botton");
transfSymbol($convert_str,"transform_str");

//Задача 4
//Используя функцию удаления HTML и PHP-тегов из строки, выведите на экран строку «<h1>Hello, world!</h1>».
//Строка не должна выглядеть как заголовок первого уровня – все теги должны быть удалены.
function deleteTag($tags) {
    echo "<br>",strip_tags($tags);
}
deleteTag("<h1>Hello, world!</h1>");

//Задача 5
//Создайте массив. Объедините все элементы массива в строку и выведите её на экран.
$array_str = ["qwe","sdf", "wer"];
$a_str = implode($array_str);
echo "Объединенный массив: $a_str";

//Задача 6
//В переменной $date лежит дата в формате '30-11-2017'. Преобразуйте эту дату в формат '2017.11.30'.
$date = '30-11-2017';
$date = date_create($date);
$date = date_format($date,'Y.m.d');
echo "<br>Реверс даты: $date";

//Задача 7
//Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.
$str = "/php/";
//for ($i = 1; $i < $str-1; $i++) {
//    $str2 = $str[$i];
//}
$str = rtrim($str,"/");
$str = ltrim($str,"/");
echo "<br>строка: $str";

//Задача 8
//Дана строка 'просто строка.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim
$just_str = "просто строка.";
$str = j_str($just_str);
echo "<br>Вывод исправленой строки: $str";
function j_str($just_s) {
    $just_s = rtrim($just_s, ".");
    $just_s = $just_s.".";
    return $just_s;
}
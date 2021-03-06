<?php
//1. Вывести таблицу умножения чисел до 10 с помощью двух циклов for (вложенный цикл);
for ($i = 1; $i < 11; $i++) {
    for ($j = 1; $j < 11; $j++) {
        echo "     ",$i * $j,"   ";
    }
    echo "<br>";
}

//2. Нарисуйте треугольник (или ромб) из символов *. 
//Высота треугольника равна 15.

for ($i = 15; $i > 0; $i--) {
    for ($j = $i; $j > 0; $j--)
        echo "* ";
    echo "<br>";
}

//3. Создать массив из дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите жирным. 
//Текущий день можно получить с помощью функции date.
//Название дней выводить по-русски

//4. Отсортировать массив по 'price'
//$arr = [
//'1'=> [
//'price' => 10,
//'count' => 2
//],
//'2'=> [
//'price' => 5,
//'count' => 5
//],
//'3'=> [
//'price' => 8,
//'count' => 5
//],
//'4'=> [
//'price' => 12,
//'count' => 4
//],
//'5'=> [
//'price' => 8,
//'count' => 4
//],
//];

//5. Дан массив $fruits. 
//Каждому вложенному массиву добавить count - количество элементов в массиве (элементы с одинаковым name)
//Удалить дублирующиеся элементы
//$fruits = [
//[
//"name"=> "apple",
//"color"=> "red",
//],
//[
//"name"=> "orange",
//"color"=> "orange",
//],
//[
//"name"=> "lemon",
//"color"=> "yellow",
//],
//[
//"name"=> "apple",
//"color"=> "green",
//],
//[
//"name"=> "plum",
//"color"=> "violet",
//],
//[
//"name"=> "plum",
//"color"=> "violet",
//],
//[
//"name"=> "apple",
//"color"=> "red",
//],
//[
//"name"=> "lemon",
//"color"=> "yellow",
//],
//[
//"name"=> "banana",
//"color"=> "yellow",
//]
//];

//6. В городе N проезд в трамвае осуществляется по бумажным отрывным билетам. Каждую неделю трамвайное депо заказывает в местной типографии рулон билетов с номерами от 000001 до 999999. «Счастливым» считается билетик у которого сумма первых трёх цифр номера равна сумме последних трёх цифр, как, например, в билетах с номерами 003102 или 567576. Трамвайное депо решило подарить сувенир обладателю каждого счастливого билета и теперь раздумывает, как много сувениров потребуется. Подсчитайте сколько счастливых билетов в одном рулоне (информацию на экран).

//Маленькие задачи на функции работы с массивами:

//7.Создайте массив, заполненный буквами от 'a' до 'j'. 
//Сделайте из него массив с заглавными буквами. 

//8. Создать массив, заполненный цифрами от '1' до '10'. 
//Найдите сумму элементов данного массива
//Найдите произведение элементов данного массива
//Выведите на экран его элементы в следующем порядке: 1102837465.

//9. Создайте массив ['a'=>1, 'b'=2... 'j'=>10] из предыдущих массивов.

//10. Создайте массив вида [[1, 2, 3], [4, 5, 6], [7, 8, 9]] (цикл не использовать). 

//11. Дан массив с элементами ['<p>Some</p>', '<p>info</p>']. 
//Создайте новый массив, в котором из элементов будут удалены теги.


<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
function clearArray($array)
{
    return array_filter($array, function ($value) {
        if ($value != NULL && $value != "") {
            return $value;
        }
    });
}
echo "<pre>";
function randArray($array, $num)
{
    $arr = clearArray($array);
    shuffle($arr);
    $newArr = array_rand($arr, $num);
    $result = array_map(function ($value) use ($arr) {
        return $arr[$value];
    }, $newArr);
    return $result;
}

print_r(randArray($planets, 2));
print_r(randArray($planets, 3));
print_r(randArray($planets, 2));
print_r(randArray($planets, 4));
print_r(randArray($planets, 5));
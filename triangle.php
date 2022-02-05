<?php
function triangle($num)
{
    $result = "";
    $html = "0";
    for ($i = 0; $i < $num; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            $result .= $html;
        }
        $result .= "<br>";
    }
    echo $result;
}

triangle(15);

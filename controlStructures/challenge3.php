﻿<?php
/**Задание 3 - Управляющие констукции + циклы
*Написать скрипт, проверяющий високосный ли год $a.
*$a может быть в диапазоне от 1 до 9999.
*/
$a = 8012;

if (($a < 1) or ($a > 9999)) {
    echo "Значение вне диапазона";
    return;
}
if (($a % 4 == 0 and  $a % 100 != 0) or ($a % 400 == 0 )) {
    echo  "Год високосный";
}


    else {
        echo "Год невисокосный";
    }





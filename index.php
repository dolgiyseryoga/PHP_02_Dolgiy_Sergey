<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title></title>
</head>

<body>

    <?php
    // 1
    echo '<strong style=color:green> 1 Zadacha </strong><br \>';
    $a = null;
    if ($a == ' ') {
        echo 'Верно';
    } else {
        echo 'Неверно';
    }
    echo '<hr \>';

    // 2
    echo '<strong style=color:green> 2 Zadacha </strong><br \>';
    $a = 123;
    $a .= '';
    $a[1] = 0;
    echo $a;
    echo '<hr \>';

    // 3
    echo '<strong style=color:green> 3 Zadacha </strong><br \>';
    $a = 1;
    $b = 3;
    if ($a <= 1 && $b >= 3) {
        echo $c = $a + $b;
    } else {
        echo $c = $a - $b;
    }
    echo '<hr \>';

    // 4
    echo '<strong style=color:green> 4 Zadacha </strong><br \>';
    $str = 'abcde';
    //$str1 = explode(" ", $pizza);
    if ($str[0] == 'a') {
        echo 'Да';
    } else {
        echo 'Нет';
    }
    echo '<hr \>';

    // 5
    echo '<strong style=color:green> 5 Zadacha </strong><br \>';
    $str = '123456';
    if ($str[0] + $str[1] + $str[2] == $str[3] + $str[4] + $str[5]) {
        echo 'Да';
    } else {
        echo 'Нет';
    }
    echo '<hr \>';

    // 6
    echo '<strong style=color:green> 6 Zadacha </strong><br \>';
    ?>
    <form name="time_grad" method="GET">
        <label>Введите значение в градусах от 0 до 360: <input type="text" name="time_g"><br /></label>
        <input type="submit" name="send" value="Отправить">
    </form>
    <?php
    if (is_numeric($_GET['time_g'])) {
        print floor(deg2rad($_GET['time_g']) * 2) . ' Hour'; //функция преобразует число из градусов в радианы.
    };
    echo '<hr \>';

    // 7
    echo '<strong style=color:green> 7 Zadacha </strong><br \>';
    for ($i = 20; $i <= 45; $i++) {
        if (($i % 5) == 0) {
            echo $i . '<br />';
        }
    }
    echo '<hr \>';

    // 8
    echo '<strong style=color:green> 8 Zadacha </strong><br \>';
    $a = 12345;
    $a .= '';
    $a[1] = 0;
    $a[3] = 0;
    echo $a;
    echo '<hr \>';

    // 9
    echo '<strong style=color:green> 9 Zadacha </strong><br \>';
    $num = 1000;
    $i = 0;
    while ($num > 50) {
        $num /= 2;
        $i++;
    }
    echo 'Число: ' . floor($num) . '<br />' . 'Количество итераций ' . $i . '<br />';
    ///////


    $num = 1000;
    for ($j = 0; $num > 50; $j++) {
        $num /= 2;
    }
    echo 'Число: ' . floor($num) . '<br />' . 'Количество итераций ' . $j . '<br />';
    echo '<hr \>';

    // 10
    echo '<strong style=color:green> 10 Zadacha </strong><br \>';

    $str = 5;
    $len = 5;
    for ($i = 1; $i <= $str; $i++) {
        for ($l = 1; $l <= $len; $l++) {
            echo "*";
        }
        echo "</br>";
    }
    echo '<hr \>';
    ?>
</body>

</html>
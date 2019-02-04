
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашка</title>
    <h1>1 задание</h1>
</head>
<body>

<?php

const operation_and = '&&';
const operation_or = '||';
const operation_xor = 'XOR';


function a_and_b($a, $b, $c) {

    if ($c == operation_and) {
        if ($a == $b) {
            return $a .' '. $c .' '. $b . ' = ' . 1;
        } else {
            return $a .' '. $c .' '. $b . ' = ' . 0;
        }
    }


    if ($c == operation_or) {
        if ($a == $b) {
            return $a .' '. $c .' '. $b . ' = ' . 0;
        } else {
            return $a .' '. $c .' '. $b . ' = ' . 1;
        }
    }

    if ($c == operation_xor) {
        if ($a == $b) {
            return $a .' '. $c .' '. $b . ' = ' . 0;
        } else {
            return $a .' '. $c .' '. $b . ' = ' . 1;
        }
    }


}
$a = 1;
$b = 0;
?>


<?php echo a_and_b($a,$b, operation_and); ?>

<?php echo a_and_b($a,$b, operation_or); ?>

<?php echo a_and_b($a,$b, operation_xor); ?>

</body>
</html>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашка</title>
    <h1>2 задание</h1>
</head>
<body>


<?php

function searchDisc($a, $b, $c) {
    $d = ($b * 2) - (4 * $a * $c);

    return $d;
}
assert(-12 == searchDisc(2,2,2));
assert(-76 == searchDisc(10,2,2));

$pp = searchDisc(10,-2,-2);
echo $pp;



function squareRoots($a, $b, $c) {
    $disc = searchDisc($a, $b, $c);

    if (0 < $disc) {
        $x1 = (-$b + sqrt($disc)) / (2 * $a);
        $x2 = (-$b - sqrt($disc)) / (2 * $a);

        return 'x1= ' . $x1 . ' , ' . 'x2= ' . $x2;
    } elseif (0 == $disc) {
        $x = (-$b / 2 * $a);

        return 'x = ' . $x;
    } elseif (0 > $disc) {

        return 'Уравнение не имеет решений в действительных числах.';
    }
}

$root = squareRoots(15,-10,-100);
echo $root;

?>
</body>
</html>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашка</title>
    <h1>3 задание</h1>
</head>
<body>

<?php

$path = include __Dir__ . '/test.php';

if ( $path ) {
    echo 'path correct';
} else {
    echo 'path incorrect';
}

var_dump($path); // путь найден, выводит true


$path_2 = include __DIR__ . '/tes.php';
var_dump($path_2); // путь не найден, выводит false и Warning
// если путь сломанный, то вернет false и warning и продолжит выполнять код


// при успешном подключение php файла, выполняется код в том файле. до оператора return

// оператор return может вернуть значение. например
// $a = [10,20,30];
// return $a;

// в файле из которого мы вызывали include мы сможем получить
// $path = include __DIR__ . '/file.php'
// $element = $path[0]
// мы получили в нашем файле элемент из массива array c 0 идексом



$path_test2 = include __DIR__ . '/test2.php';
$test2_array = $path_test2['list'];
var_dump($test2_array);

echo $test2_array[1];



?>

</body>
</html>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашка</title>
    <h1>4 задание</h1>
</head>
<body>


<?php
function search_gender($name) {
    $last = mb_substr($name,-1,10,'UTF-8');

    if ('а' == $last || 'я' == $last) {
        return 'woman';
    }

    if ('т' == $last || 'й' == $last || 'н' == $last || 'р' == $last) {
        return 'man';
    }
    return null;
}

assert('woman' === search_gender('саша'));
assert('man' === search_gender('александр'));
assert('woman' === search_gender('айгуля'));
assert('man' === search_gender('альберт'));
assert(null === search_gender('манвел'));

$person2 = search_gender('николай');
echo $person2;

?>
</body>
</html>














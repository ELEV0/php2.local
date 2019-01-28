<?php




// 1 Задание
echo '1.1 (&&)';
echo '<br>';

echo '╔═╦══╦═══╗';
echo '<br>';
echo '║ a ║ b ║ && ║';
echo '<br>';
echo '╠═╬══╬═══╣';
echo '<br>';
echo '║ 0 ║ 0 ║ 0 ║';
echo '<br>';
echo '╠═╬══╬═══╣';
echo '<br>';
echo '║ 1 ║ 0 ║ 0 ║';
echo '<br>';
echo '╠═╬══╬═══╣';
echo '<br>';
echo '║ 0 ║ 1 ║ 0 ║';
echo '<br>';
echo '╠═╬══╬═══╣';
echo '<br>';
echo '║ 1 ║ 1 ║ 1 ║';
echo '<br>';
echo '╚═╩══╩═══╝';


echo '<br>';
echo '<br>';
echo '<br>';

echo '1.2 (||)';
echo '<br>';

echo '╔═╦══╦═══╗';
echo '<br>';
echo '║ a ║ b ║ || ║';
echo '<br>';
echo '╠═╬══╬═══╣';
echo '<br>';
echo '║ 0 ║ 0 ║ 0 ║';
echo '<br>';
echo '╠═╬══╬═══╣';
echo '<br>';
echo '║ 1 ║ 0 ║ 1 ║';
echo '<br>';
echo '╠═╬══╬═══╣';
echo '<br>';
echo '║ 0 ║ 1 ║ 1 ║';
echo '<br>';
echo '╠═╬══╬═══╣';
echo '<br>';
echo '║ 1 ║ 1 ║ 1 ║';
echo '<br>';
echo '╚═╩══╩═══╝';


echo '<br>';
echo '<br>';
echo '<br>';


echo '1.3 (XOR)';
echo '<br>';

echo '╔═╦══╦═══╗';
echo '<br>';
echo '║ a ║ b ║ xor ║';
echo '<br>';
echo '╠═╬══╬═══╣';
echo '<br>';
echo '║ 0 ║ 0 ║ 0 ║';
echo '<br>';
echo '╠═╬══╬═══╣';
echo '<br>';
echo '║ 1 ║ 0 ║ 1 ║';
echo '<br>';
echo '╠═╬══╬═══╣';
echo '<br>';
echo '║ 0 ║ 1 ║ 1 ║';
echo '<br>';
echo '╠═╬══╬═══╣';
echo '<br>';
echo '║ 1 ║ 1 ║ 0 ║';
echo '<br>';
echo '╚═╩══╩═══╝';


echo '<br>';
echo '<br>';
echo '<br>';

echo '2 Задание';
echo '<br>';

function searchDisc($a, $b, $c) {
    $d = ($b * 2) - (4 * $a * $c);

    return $d;
}
assert(-12 == searchDisc(2,2,2));
assert(-76 == searchDisc(10,2,2));

$pp = searchDisc(10,-2,-2);
echo $pp;

echo '<br>';
echo '<br>';
echo '<br>';

function squareRoots($a, $b, $c) {
    $disc = searchDisc($a, $b, $c);

    if (0 < $disc) {
        $x1 = (-$b + sqrt($disc)) / (2 * $a);
        $x2 = (-$b - sqrt($disc)) / (2 * $a);
        echo 'x1= ' . $x1;
        echo '<br>';
        echo 'x2= ' . $x2;
    } elseif (0 == $disc) {
        $x = (-$b / 2 * $a);
        echo  'x = ' . $x;
    } elseif (0 > $disc) {
        echo 'Уравнение не имеет решений в действительных числах.';
    }
}

$root = squareRoots(15,-10,-100);
echo $root;

echo '<br>';
echo '<br>';
echo '<br>';

echo '3 Задание';
echo '<br>';


$f = include __Dir__ . '/test.php';

var_dump($f);

/*
 * возвращает bool value. Если файл не найдется то вернется false, если путь получится построить, то вернет true (1)
 * попробуйте в путь добавить лишнюю буквы и вы увидите warning и false
 */


echo '<br>';
echo '<br>';
echo '<br>';

echo '4 Задание';
echo '<br>';

/*
 *  Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол, пытаясь угадать по имени
 * (null - если угадать не удалось). Вам придется самостоятельно найти нужные вам строковые функции.
 * Начните с написания тестов для функции.
 */





// я его не сделал, может завтра придет озорение, и досдам






//function get_gender($name) {
//    $last = mb_substr($name,-1,1,'UTF-8');
//
//    if ('а' == $last) {
//        return 'woman';
//    } elseif ('в' == $last) {
//        return 'man';
//    } elseif ('г' == $last) {
//        return 'man';
//    } else {
//        return null;
//    }
//}


function get($name) {
    $last = mb_substr($name,-1,0,'UTF-8');
    echo $last;

    switch ($last) {
        case 'а':
            return 'woman';
            break;
        case 'б':
            return 'man';
            break;
        default:
            return null;
            break;

    }
}


// || 'в' || 'г' || 'д' || 'ж' || 'з' || 'б' || 'и' || 'к' || 'л' || 'м' || 'н' || 'о' || 'п' || 'р' || 'с' || 'т' || 'у' || 'э' || 'ю' || 'я')



//$string[count($string)-1];
//echo  $name[count($name)-1];

//echo count_chars($name[3]);
//echo str_split($name, -1);




//$start = substr($str, 0, 3);
//echo $start;
//$end = substr($str, -1);
//echo $end;

$str = "Света";
//echo $str[2];
//echo $str[strlen($str)-1];

//echo mb_substr($str,-1,1,'UTF-8');



















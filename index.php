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

$person = search_gender('саша');
echo $person;
echo '<br>';
$person2 = search_gender('николай');
echo $person2;








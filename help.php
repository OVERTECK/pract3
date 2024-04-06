for element in list:

foreach (str_split($string) as $letter) {
    echo $letter . "\n";
    }


=================================

split()

$string = "ghbdt dfg dfg";

print_r(explode(' ', $string));

Array
(
    [0] => ghbdt
    [1] => dfg
    [2] => dfg
)

================================


str_split()

$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

print_r($arr1);
print_r($arr2);


Array
(
    [0] => H
    [1] => e
    [2] => l
    [3] => l
    [4] => o
    [5] =>
    [6] => F
    [7] => r
    [8] => i
    [9] => e
    [10] => n
    [11] => d
)

Array
(
    [0] => Hel
    [1] => lo
    [2] => Fri
    [3] => end
)

====================================

implode or join

$array = ['имя', 'почта', 'телефон'];
var_dump(implode(",", $array)); // string(32) "имя,почта,телефон"

// Пустая строка при использовании пустого массива:
var_dump(implode('привет', [])); // string(0) ""

// Параметр separator не обязателен:
var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"


================================

string to integer

$stringNumberToParse = "2";
// var_dump($stringNumberToParse); // string '2' (length=1)

// Convert the string to type int
$parsedInt = intval($stringNumberToParse);

// var_dump(is_int($parsedInt)); // boolean true
// var_dump($parsedInt); // int 2

echo (int)"12abc", "<br>";    // 12
echo (int)"a123bc", "<br>";   // 0
echo (int)"-12", "<br>";      // -12
echo (int)"12.3", "<br>";     // 12
echo (int)"";


================================


integer to string

echo (int)"12abc", "<br>";    // 12
echo (int)"a123bc", "<br>";   // 0
echo (int)"-12", "<br>";      // -12
echo (int)"12.3", "<br>";     // 12
echo (int)"";


=================================

replace


str_replace($search, $replace, $subject);
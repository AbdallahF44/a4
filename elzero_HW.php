<?php /*hello me*/
// =============== HW1 ====================

use function PHPSTORM_META\type;

?>
<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="">
    <?php echo '<meta charset="UTF-8">'; ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
    <?= 'My First PHP Page' ?>
</title>
</head>

<body>
    <div><?php echo 'We Love'; ?></div>
    <div><?php echo 'Elzero Channel'; ?></div>
</body>

</html> -->
<?php
//echo 'Prevent Me From Running Please';
#echo 'Prevent Me From Running Please';
/*echo 'Prevent Me From Running Please';*/

/*  My Application
    Version 1.0
    Created By Elzero */

// ## First Comment    
# // # Second Comment
/* /* /* Third Comment */
////// Fourth Comment
//all true

// echo (int)15.2 + (int)14.7 + (int)(10.5 + 10.5); // 50
// echo gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer

// echo '<br>';
// echo gettype(100);
// echo '<br>';
// var_dump(100);

// echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"

// echo nl2br('We 
// Love 
// Elzero 
// Web 
// School');

// Needed Output
// We
// Love
// Elzero
// Web
// School

// Needed Output
// echo nl2br(<<<'aa'
// Hello "'Elzero'"
// We Love $Programming$
// Languages Specially "PHP"
// aa);

// $something = "Programming";

// echo <<<code
// Hello \PHP\
// We Love $something
// code;

// // [1] Fix The Error
// // [2] Remove 2 Characters To Get The Output

// // Needed Output
// // Hello \PHP\ We Love Programming

// echo True+(int)"Hello PHP";
// echo '<br>';
// echo gettype((int)"Hello PHP");

// // Needed Output
// // 1
// // integer


// echo '<pre>';
// print_r([
//     "FrontEnd" => [
//         "HTML",
//         "CSS",
//         "JS" => [
//             "Vuejs" =>
//             [
//                 2 => 'v2',
//                 'v3'
//             ],
//             'Reactjs',
//             'Svelte'
//         ]
//     ], "BackEnd" => [
//         "PHP",
//         "MySQL",
//         "Security"
//     ], "Get", "GitHub",
//     "Testing" => [
//         "Unit Testing",
//         "End To End",
//         "Integration"
//     ]
// ]);
// echo '</pre>';

// =============== HW3 ====================
// $name = "Abdallah Fawzi";
// 
?>
<!-- <!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $name ?>">
    <title>Welcome To
        <?php echo $name ?>
    </title>
</head>

<body>
    <h1><?php echo $name ?></h1>
    <p>Here In <?php echo $name ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $name ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $name ?></footer>
</body>

</html>-->
<?php
// $name = "elzero";
// $$name = "Web";
// echo '<br>';
// echo $$name;
// echo '<br>';
// echo "${$name}";
// echo '<br>';
// echo $elzero;
// echo '<br>';

// $a = 200;
// $b = &$a;
// $a = 100;

// echo $b; // 100

// echo '<pre>';
// print_r( $_SERVER);
// echo '</pre>';
// echo '<br>';
// echo $_SERVER['DOCUMENT_ROOT'];
// echo '<br>';
// echo $_SERVER['SERVER_NAME'];
// echo '<br>';
// echo $_SERVER['SystemRoot'];
// echo '<br>';
// echo $_SERVER['OPENSSL_CONF'];
// echo '<br>';

/*
callable
catch
declare
default
do
echo
else
elseif
empty
enddeclare
endfor
endforeach
endif
*/
// echo __line__;
// echo '<br>';
// echo __file__;
// echo '<br>';
// echo __dir__;

// =============== HW4 ====================
// Replace ? With Arithmetic Operators
// echo (10 * 20 - 15 % 3 + 190 + 10) - 400; ; // 0

// $a = "10";

// // Needed Ouput
// echo +"10";
// echo '<br>';
// // 10
// echo gettype(+$a);
// echo '<br>';
// // "integer"
// echo -(-$a);
// echo '<br>';
// // 10
// echo gettype(-(-$a));
// echo '<br>';
// // "integer"
// echo (int)$a;
// echo '<br>';
// // 10
// echo gettype((int)$a);
// echo '<br>';
// // "integer"

// For The People Who Love Searching
// 10
// "integer"
// 10
// "integer"

// $a = 10;
// $b = 20;

// // Needed Output
// echo $a <=> $b;
// // -1

// $a = 10;
// $b = 20;
// $c = 15;

// var_dump($a < $b); // True
// var_dump($c > $a); // True
// var_dump($a <= $b); // True
// var_dump($a != $b); // True
// var_dump($a !== $c); // True
// var_dump($a <= $c); // True
// var_dump(gettype($a) == gettype($b)); // True
// var_dump(gettype($a) === gettype($b)); // True
// var_dump(gettype((float) $a) !== gettype($b)); // True

// $points = 10;

// // Write Your Code Here
// $points++;
// $points++;
// $points++;

// echo $points; // 13

// // Write Your Code Here
// $points--;
// $points--;
// $points--;
// $points--;
// $points--;

// echo $points; // 8;

// $a = "Elzero";
// $b = "Web";
// $c = "School";
// // Method One
// $d = "$a  $b  $c";
// echo $d; // Elzero Web School
// echo '<br>';
// // Method Two
// $d = "{$a}  {$b}  {$c}";
// echo $d; // Elzero Web School
// echo '<br>';
// // Method Three
// $d = $a . " " . $b . " " . $c;
// echo $d; // Elzero Web School
// echo '<br>';
// // Method Four
// $d .= $a . " ";
// $d .= $b . " ";
// $d .= $c . " ";
// echo $d; // Elzero Web School
// echo '<br>';

// // Code 1
// $a = @$b or die("Var fc");

// // Code 2
// $f = @file("Not_A_File") or die("File fc");

// // Code 3
// @(include("Not_A_File")) or die("Include fc");
// =============== HW5 ====================
// // Write Function Content Here

// function greeting($name, $gen = "un")
// {
//     if ($gen === 'Male')
//         return "Hello Mr $name";
//     elseif ($gen === 'Female')
//         return "Hello Miss $name";
//     else
//         return "Hello $name";
// }

// // Needed Output
// echo greeting("Osama", "Male"); // Hello Mr Osama
// echo "<br>";
// echo greeting("Eman", "Female"); // Hello Miss Eman
// echo "<br>";
// echo greeting("Sameh"); // Hello Sameh
// echo "<br>";

// // Write Function Content Here
// function get_arguments(...$all)
// {
//     $result = "";
//     foreach (func_get_args() as $arg) :
//         $result .=  " " . $arg;
//     endforeach;
//     echo $result;
//     echo "<br>";
//     $result = "";
//     foreach ($all as $name) :
//         $result .= " " . $name;
//     endforeach;
//     echo $result;
// }
// // Needed Output
// echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
// echo "<br>";
// echo get_arguments("I", "Love", "PHP"); // I Love PHP


// // Write Function Content Here
// function sum_all(...$all)
// {
//     $result = 0;
//     foreach ($all as $num) :
//         if ($num === 10)
//             $num += 10;
//         elseif ($num === 5)
//             continue;
//         $result += $num;
//     endforeach;
//     echo $result;
// }
// // Needed Output
// echo sum_all(10, 12, 5, 6, 6, 10); // 64
// echo sum_all(5, 10, 5, 10); // 40


// // Write Function Content Here
// function multiply(...$all)
// {
//     $result = 1;
//     foreach ($all as $num) :
//         if (gettype($num) === "integer")
//             $result *= $num;
//         elseif (gettype($num) === "double")
//             $result *= (int)$num;
//         else
//             continue;
//     endforeach;
//     echo $result;
// }
// // Needed Output
// echo multiply(10, 20); // 200
// echo multiply("A", 10, 30); // 300
// echo multiply(100.5, 10, "B"); // 1000

//هاد التحدي حلناه بالجافا سيكربت مقصر اعيده


// // Write Function Content Here
// function calculate($num1, $num2, $op = "a")
// {
//     if ($op === "a" || $op === "adding") {
//         return $num1 + $num2;
//     } elseif ($op === "s" || $op === "subtract") {
//         return $num1 - $num2;
//     } elseif ($op === "m" || $op === "multiply") {
//         return $num1 * $num2;
//     } else {
//         return "Invaild Op.!";
//     }
// }
// // Needed Output
// echo calculate(10, 20); // 30
// echo "<br>";
// echo calculate(10, 20, "a"); // 30
// echo "<br>";
// echo calculate(10, 20, "s"); // -10
// echo "<br>";
// echo calculate(10, 20, "subtract"); // -10
// echo "<br>";
// echo calculate(10, 20, "multiply"); // 200
// echo "<br>";
// echo calculate(10, 20, "m"); // 200
// echo "<br>";

//مقصر اكمل الباقي

// =============== HW6 ====================

// $num_one = -1;
// $num_two = 2.5;

// $let_one = "o";
// $let_two = "z";

// $str = "El%er0";

// // Write Your Code Here
// $str[(int)$num_two]=$let_two;
// $str[$num_one]=$let_one;

// echo $str; // Elzero

//******************************** */

// $str = "Orezle";

// echo ucfirst(strtolower(strrev($str)));

// // Elzero

//******************************** */

// $str = 'aAa';
// $num = 3;
// $char = "_";

// // Write Your Code Here
// echo str_repeat(strtolower(substr_replace($str,$char,$num,0)),$num);
// echo str_repeat(strtolower($str.$char), 3);

// // aaa_aaa_aaa_

//******************************** */

// $str = "<div><b>Elzero</b></div>";
// echo strip_tags($str, "<b>");

// // <b>Elzero</b>

//******************************** */

// $str = "Elzero Web School";
// $e = "e";
// $o = "O";
// $four = 4;

// var_dump(substr_count($str, strtolower($o), $four, (strlen($four) + strlen($four))));
// echo "<br>";
// var_dump(substr_count($str, $e));


// // 1
// // 2

//******************************** */

// $chars = ["E", "l", "z", "e", "r", "o"];

// echo implode("",$chars);

// // Output
// // "Elzero"

//******************************** */

// $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

// echo ucfirst(strtolower(substr_replace(implode("", $chars),"",1,2)));

// // Output
// // "Elzero"

// =============== HW7 ====================
// $friends = [
//     "AG" => "Ahmed Gamal",
//     "OM" => "Osama Mohamed",
//     "MG" => "Mahmoud Gamal",
//     "AS" => "Ahmed Samy",
//     "FA" => "Farid Ahmed",
//     "SM" => "Sayed Mohamed"
// ];
// echo '<pre>';
// print_r(array_chunk(array_change_key_case($friends), 2, true));
// echo '</pre>';
// //   // Output
// //   Array
// //   (
// //     [0] => Array
// //       (
// //         [ag] => Ahmed Gamal
// //         [om] => Osama Mohamed
// //       )
// //     [1] => Array
// //       (
// //         [mg] => Mahmoud Gamal
// //         [as] => Ahmed Samy
// //       )
// //     [2] => Array
// //       (
// //         [fa] => Farid Ahmed
// //         [sm] => Sayed Mohamed
// //       )
// //   )

//******************************** */

// $codes = ["H", "C", "J"];
// $means = ["HTML", "CSS", "JavaScript"];

// echo '<pre>';
// print_r(array_change_key_case(array_combine($codes, $means)));
// echo '</pre>';

// // // Output
// // Array
// // (
// //   [h] => HTML
// //   [c] => CSS
// //   [j] => JavaScript
// // )

//******************************** */

// $friends = [
//     "Ahmed Gamal" => "AG",
//     "Osama Mohamed" => "OM",
//     "Mahmoud Gamal" => "MG",
//     "Ahmed Samy" => "AS"
// ];

// echo '<pre>';
// print_r(array_change_key_case(array_combine(array_values($friends), array_keys($friends))));
// echo '</pre>';

// //   // Output
// //   Array
// //   (
// //     [as] => Ahmed Samy
// //     [mg] => Mahmoud Gamal
// //     [om] => Osama Mohamed
// //     [ag] => Ahmed Gamal
// //   )

//******************************** */

// $nums = [10, 20, 30];

// echo array_reduce($nums, fn ($cu, $it) => $cu + $it);
// echo "<br>";
// echo array_sum($nums);

// // // Output
// // 60
// // 60

//******************************** */

// $nums = [5, 10, 20, 5, 30, 40];

// echo array_sum(array_filter($nums, fn ($it) => $it != 5));

// // Output
// // 100

//******************************** */

// $chars = ["A", "B", "C", "D", "E"];
// $char = "@@";
// $zero = 0;


// echo '<pre>';
// print_r(array_pad($chars, (count($chars) * strlen($char)), $char[$zero]));
// echo '</pre>';

// // Output
// // Array
// // (
// //   [0] => A
// //   [1] => B
// //   [2] => C
// //   [3] => D
// //   [4] => E
// //   [5] => @
// //   [6] => @
// //   [7] => @
// //   [8] => @
// //   [9] => @
// // )

//******************************** */

// $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// // Write Line Here
// next($names);
// next($names);
// // Write Line Here

// echo current($names) . "<br>"; // "Sayed"

// // Write Line Here
// end($names);

// echo current($names) . "<br>"; // "Ali"

// // Write Line Here
// reset($names);

// echo current($names) . "<br>"; // "Osama"

// // Write Line Here
// end($names);
// // Write Line Here
// prev($names);

// echo current($names) . "<br>"; // "Mahmoud"

//******************************** */

// $chars = ["A", "B", "C"];

// // array_push($chars, "D");
// // $chars[] = "D";
// // array_splice($chars, count($chars), 0, "D");
// // 4 way مممححححنننن

// echo '<pre>';
// print_r($chars);
// echo '</pre>';

// // // Output
// // Array
// // (
// //   [0] => A
// //   [1] => B
// //   [2] => C
// //   [3] => D
// // )

//******************************** */

// $nums = [1, 2, 3, 4, 5, 6];

// echo '<pre>';
// print_r(array_slice($nums,-5,-2));
// echo '</pre>';

// // Output
// // Array
// // (
// //   [0] => 2
// //   [1] => 3
// //   [2] => 4
// // )

//******************************** */

// $mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
// $nums = [4, 5, 6];

// // Write Your Code Here

// $mix = array_merge($mix, $nums);
// sort($mix);
// $mix = array_filter($mix, fn ($item) => gettype($item) == "integer");

// echo '<pre>';
// print_r($mix);
// echo '</pre>';

// // Output
// // Array
// // (
// //   [0] => 1
// //   [1] => 2
// //   [2] => 3
// //   [3] => 4
// //   [4] => 5
// //   [5] => 6
// //   [6] => 7
// //   [7] => 8
// //   [8] => 9
// // )
//******************************** */
// =============== HW8 ====================

// echo rand(11,19) ."<br>";
// echo rand(11,19) ."<br>";
// echo rand(11,19) ."<br>";
// echo rand(11,19) ."<br>";
// echo rand(11,19) ."<br>";
// echo rand(11,19) ."<br>";
// echo rand(11,19) ."<br>";

// // Example
// // 13
// // 14
// // 19
// // 12

//******************************** */

// $friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

// echo $friends[rand(0, count($friends) - 1)];

// // Example
// // Ibrahim
// // Ahmed

//******************************** */

// $num1 = 11.5; // 11
// $num2 = 9.4898; // 9.5
// $num3 = -7.5; // -7

// echo round($num1, 0, PHP_ROUND_HALF_DOWN) . "<br>";
// echo round($num2, 1) . "<br>";
// echo round($num3, 0, PHP_ROUND_HALF_DOWN) . "<br>";

//******************************** */

// $arr = [];

// for ($i = 0; $i < count(filter_list()); $i++) {
//     $arr[filter_id(filter_list()[$i])] = filter_list()[$i];
// }

// echo "<pre>";
// print_r($arr);
// echo "</pre>";

//******************************** */

// $url1 = "http://www.elz ero.org";
// $url2 = "http://¥elzero.org";
// $url3 = "https://elzero.org";
// $url4 = "https://elzero.o¥rg";

// $ch = filter_var(
//     $url1,
//     FILTER_VALIDATE_URL
// );
// echo $ch;

// if (filter_var($url1, FILTER_VALIDATE_URL) == false) {
//     echo "Not a Vlaid";
// }

// // Output
// // "Not A Valid URL"
// // "Not A Valid URL"
// // "A Valid URL"
// // "Not A Valid URL"   // مش عارف أحله (¬‿¬)

//******************************** */

// $url1 = "http://www.elz ero.org";
// $url2 = "http://¥elzero.org";
// $url3 = "https://elzero.org";
// $url4 = "https://elzero.o¥rg";

// echo filter_var(
//     $url1,
//     FILTER_SANITIZE_URL,
//     FILTER_NULL_ON_FAILURE
// );
// echo "<br>";
// echo filter_var(
//     $url2,
//     FILTER_SANITIZE_URL,
//     FILTER_NULL_ON_FAILURE
// );
// echo "<br>";
// echo filter_var(
//     $url3,
//     FILTER_SANITIZE_URL,
//     FILTER_NULL_ON_FAILURE
// );
// echo "<br>";
// echo filter_var(
//     $url4,
//     FILTER_SANITIZE_URL,
//     FILTER_NULL_ON_FAILURE
// );

// // Output
// // http://www.elzero.org
// // http://elzero.org
// // https://elzero.org
// // https://elzero.org
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body style="background: #000;color:#fff;">

</body>

</html>
<?php
// echo "Hi Ahmad.";
// echo "<br>";
// echo 1 == "1" ? "Hi" : "U2";

// =============== HW9 ====================

// echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2) . "<br>";
// echo round(disk_total_space("D:") / 1024 / 1024 / 1024 / 1024, 2);
// // Output Examples
// // "1.37 Terabyte"
// // "0.46 Terabyte"
//********************** */
// echo "Size In Megabyte Is " . (int)(filesize("C:\Users\abdal\Downloads\Video\Learn PHP 8 In Arabic 2022 - #082 - File System Function Part One 4 Functions.mp4") / 1024 / 1024) . "<br>";
// echo "Size In Kilobyte Is " . (int)(filesize("C:\Users\abdal\Downloads\Video\Learn PHP 8 In Arabic 2022 - #082 - File System Function Part One 4 Functions.mp4") / 1024);
// // Output
// // "Size In Megabyte Is 32"
// // "Size In Kilobyte Is 33261"
//********************** */
// if (!is_dir("Programming/PHP")) {
//     mkdir("Programming/PHP", 0711, true);
// }
// if (is_dir("Programming/PHP")) {
//     rmdir("Programming/PHP");
//     echo "Directory Programming/PHP Removed" . "<br>";
// }
// if (is_dir("Programming")) {
//     rmdir("Programming");
//     echo "Directory Programming Removed";
// }
// // Output
// // "Directory Programming/PHP Removed"
// // "Directory Programming Removed"
//********************** */
// function change_permissions($name)
// {
//     if (!str_contains($name, ".")) echo "This Is Directory And Only Files Allowed" . "<br>"; // حاولت احلها بطريقة تانية ما عرفت (¬‿¬)
//     else if (pathinfo($name)["extension"] !== "txt") echo "File Extension Is Not Txt" . "<br>";
//     else echo "Permissions Changed" . "<br>";
// }
// // Test Cases

// echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
// echo change_permissions("Work.docx"); // File Extension Is Not Txt
// echo change_permissions("Result.txt"); // Permissions Changed
//********************** */

// echo basename("index.php") . "<br>";
// echo basename(__FILE__) . "<br>";
// echo __FILE__ . "<br>";
// echo pathinfo(__FILE__)["basename"] . "<br>";

// // Output

// // "index.php"
// // "index.php"
// // "index.php"
// // "index.php"

//********************** */

// // elzero.txt Content
// // Hello Elzero Web
// // School
// // No Need To Read

// $file = fopen("abd.txt", "w+");
// fwrite($file, "Hello Elzero Web");
// fwrite($file, "\r\nSchool");
// fwrite($file, "\r\nNo Need To Read");
// echo file("abd.txt")[0] . " " . file("abd.txt")[1] . "<br>"; // way1
// echo file_get_contents("abd.txt", true, NULL, 0, 24); // way2
// fclose($file);

// // Needed Output
// // "Hello Elzero Web School"
// // "Hello Elzero Web School"
// // "Hello Elzero Web School"
// // "Hello Elzero Web School" // مقصر اكملو

//********************** */

// $file = fopen("abd.txt", "w+");
// fwrite($file, "Hello Osamaa Web");
// fwrite($file, "\r\nSchool");
// file_put_contents("abd.txt", "Hello Elzero Web");
// file_put_contents("abd.txt", "\r\nSchool", FILE_APPEND);
// echo "<pre>";
// print_r(file("abd.txt"));
// echo "</pre>";
// fclose($file);
// unlink("abd.txt");
// // elzero.txt Content
// // Hello Osamaa Web
// // School

// // // elzero.txt New Content
// // Hello Elzero Web
// // School

// =============== Test ====================

// var_dump(array_search("key", ["key" => "val"]) == false);
// echo "<br>";
// var_dump(array_search("val", ["key" => "val"]) == false);
// echo "<br>";

// var_dump(isset(["key" => "val"]["val"]));
// echo "<br>";
// var_dump(isset(["key" => "val"]["key"]));
// echo "<br>";



// if (isset($_COOKIE["background"])) {
//     echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     setcookie("background", $_POST["bg-color"], strtotime("+1 year"));
//     header("Location: " . $_SERVER["REQUEST_URI"]); // كود ريفرش الصفحة
//     exit();
// }

?>

<!-- <form action="" method="POST">
    <input type="color" name="bg-color">
    <input type="submit" value="Choose Color">
</form> -->

<?php
// header("Location: " . $_SERVER["REQUEST_URI"]);
// exit(); //ERROOOOOOR
// =============== HW10 ====================
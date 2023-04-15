<?php
// echo "<h1>Welcome PHP</h1>";
// echo "Tomorrow I'll learn PHP global variables.";
$var = "PHP Tutorial";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $var; ?></title>
    <!-- <?php //echo $var; 
            ?> == <?= $var; ?> -->
</head>

<body style="background: #000;color:#fff;">
    <!-- <h1><?php //echo $var; 
                ?></h1>
    <p><?php //echo $var; 
        ?>, hi my name is Abdallah.</p> -->
</body>

</html>

<?php

// echo strlen("abd 22 !@#") . "<br>"; //10
// echo str_word_count("abd a 22 !@#") . "<br>"; //2
// echo strrev("abd 22 !@#") . "<br>";
// echo strpos("abd 22 !@#", "a") . "<br>"; //0
// echo strpos("abd 22 !@#", "22") . "<br>"; //4
// var_dump(strpos("abd 22 !@#", "4"));
// echo "<br>";
// echo str_replace("abd", "Abd", "abdallah abdallah abdallah abdallah") . "<br>"; //Abdallah Abdallah Abdallah Abdallah
// $name = "abdallah abdallah abdallah abdallah";
// // str_replace("abd", "Abd", $name);
// echo $name . "<br>"; //abdallah abdallah abdallah abdallah
// print_r(explode(" ", $name, 1)); // 1 عدد عناصر الاري
// echo "<br>";
// print_r(explode(" ", $name, 10));
// echo "<br>";
// print_r(explode(" ", $name, -1)); // اذا بالسالب بحذف العناصر من الخلف
// echo "<br>";
// print_r(str_split($name, 10)); // 10 طول العنصر الي هيطلع بالاري
// echo "<br>";
// echo implode(" ", ["abd", "abd", "abd", "abd"]);
// echo "<br>";
// echo trim("abdallah", "abh");
// echo "<br>";
// echo rtrim("abdallah", "abh");
// echo "<br>";
// echo ltrim("abdallah", "abh");
// echo "<br>";
// echo similar_text("abda", "jbda");
// echo "<br>";
// echo str_shuffle("abda");
// echo "<br>";
// echo strtolower(strtoupper("abda"));
// echo "<br>";
// echo substr("abda", -4);
// echo "<br>";

// *********************
// const aaa = "d";
// define("aaaa", "da");
// echo aaa;
// echo "<br>";
// echo aaaa;
// echo "<br>";
// echo __FILE__;
// echo "<br>";
// echo __LINE__;
// echo "<br>";
// echo __DIR__;
// echo "<br>";
// echo var_dump(5 == 5);
// echo "<br>";
// $a = 5;
// $aa = 5;
// echo var_dump($a = $aa);
// echo "<br>";
// echo var_dump(5 != 5);
// echo "<br>";
// echo var_dump(5 <> 5);
// echo "<br>";
// *********************

$marks = [95, 96, 94, 90, 88];

?>
<!-- 
<table border="1">
    <tr>
        <?php
        // for ($i = 1; $i <= 5; $i++) {
        //     echo "<th>$i" . "th</th>";
        // }
        ?>
    </tr>
    <tr>
        <?php
        // for ($i = 0; $i < count($marks); $i++) {
        //     echo "<td>$marks[$i]</td>";
        // }
        ?>
    </tr>
</table> -->

<?php

// echo array_keys([4 => 4])[0];
// echo "<br>";

// $f = fopen("test.txt", "r+");

$str = <<<aa
Name : Abdallah Fawzi Abdallah Abu Mostafa
ID   : 1301204594
Name : Abdallah Fawzi Abdallah Abu Mostafa
ID   : 1301204594
Name : Abdallah Fawzi Abdallah Abu Mostafa
ID   : 1301204594
Name : Abdallah Fawzi Abdallah Abu Mostafa
ID   : 1301204594

aa;

// fwrite($f, $str);

// echo fgets($f);
// while ($line = fgets($f)) { // get lines
//     echo $line . "<br>";
// }
// while ($char = fread($f, 4)) { // get characters
//     echo $char . "<br>";
// }
// echo file_put_contents("test.txt", $str);

// echo "<pre>";
// echo file_get_contents("test.txt");
// echo "</pre>";
//------------------------------
// $f = fopen("test.txt", "r+");

// // fwrite($f, $str);

// echo fgets($f); // will show

// echo "<pre>";
// echo file_get_contents("test.txt");
// echo "</pre>";
//------------------------------
// $f = fopen("test.txt", "r");

// // fwrite($f, $str);

// echo fgets($f); // will show

// echo "<pre>";
// echo file_get_contents("test.txt");
// echo "</pre>";
//------------------------------
// $f = fopen("test.txt", "w+");

// // fwrite($f, $str);

// echo fgets($f); // will not show

// echo "<pre>";
// echo file_get_contents("test.txt");
// echo "</pre>";
//------------------------------
// $f = fopen("test.txt", "w");

// // fwrite($f, $str);

// echo fgets($f); // will not show

// echo "<pre>";
// echo file_get_contents("test.txt");
// echo "</pre>";
//------------------------------
// $f = fopen("test.txt", "w+");

// fwrite($f, $str);

// echo fgets($f); // will not show

// echo "<pre>";
// echo file_get_contents("test.txt");
// echo "</pre>";
//------------------------------
// $f = fopen("test.txt", "r+");

// fwrite($f, $str);

// echo fgets($f); // will not show

// echo "<pre>";
// echo file_get_contents("test.txt");
// echo "</pre>";
//------------------------------
// $f = fopen("test.txt", "r");

// fwrite($f, $str); // error

// echo fgets($f); // will show

// echo "<pre>";
// echo file_get_contents("test.txt");
// echo "</pre>";
//------------------------------

// $server = "localhost";
// $username = "root";
// $password = "";
// $dbName = "a4";

// $con = new mysqli($server, $username, $password, $dbName); // connect as object orinted

// if ($con->connect_error) {
//     echo "Connection Error " .$con->erroe_list();
// } else {
//     echo "Connection successed!";
//     // $q = "insert into stu value(2,'Abdallah','0593423031')"; // بزبطش انكرمنت
//     $q = "insert into stu set name='Abdallah',phone='0593423031'"; // بزبط انكرمنت
//     // $res = $con->query($q);
//     // $q = "delete from stu where name='Abdallah'"; 
//     $res = $con->query($q);
//     if ($res)  echo "<br>Student added " . $con->insert_id;
//     else  echo "<br>Query Error!";
// }

// $con->close();
//-------------------------------------
// $server = "localhost";
// $username = "root";
// $password = "";
// $dbName = "a4";

// $con = mysqli_connect($server, $username, $password, $dbName); // connect as procedural

// if (mysqli_connect_error()) {
//     echo "Connection Error " . mysqli_error_list($con);
// } else {
//     echo "Connection successed!";
//     $q = "insert into stu set name='Ahmed',phone='0595502882';";
//     $q .= "insert into stu set name='Deyaa',phone='0595646556';";
//     mysqli_multi_query($con, $q);
//     if (mysqli_error($con))
//         echo "<br>Query Error!";
//     else
//         echo "<br>Student added " . mysqli_insert_id($con);
// }
// mysqli_close($con);
//--------------------------------------------------------------------------------------
// $name = "";
// $phone = "";
// if (isset($_POST["submit"])) {
//     $name = $_POST["name"];
//     $phone = $_POST["phone"];
// }
?>
<!-- <html>

<body>
    <form action="#" method="post">
        <input type="text" name="name" value="<?php //echo $name; 
                                                ?>">
        <input type="text" name="phone" value="<?php //echo $phone; 
                                                ?>">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html> -->

<?php
// $server = "localhost";
// $username = "root";
// $password = "";
// $dbName = "a4";

// $con = mysqli_connect($server, $username, $password, $dbName); // connect as procedural

// if (mysqli_connect_error()) {
//     echo "Connection Error " . mysqli_error_list($con);
// } else {
//     if (isset($_POST["submit"])) {
//         echo "Connection successed!";
//         $name = $_POST["name"];
//         $phone = $_POST["phone"];
//         $q = "insert into stu set name='$name',phone='$phone';";
//         mysqli_query($con, $q);
//         if (mysqli_error($con))
//             echo "<br>Query Error!";
//         else
//             echo "<br>Student added " . mysqli_insert_id($con);
//     }
//     $q = "select * from stu";
//     $res = mysqli_query($con, $q);
//     // echo "<pre>";
//     // print_r($res);
//     // echo "</pre>";
//     if ($res->num_rows > 0) {
//         echo "<table border='1'>";
//         while ($student = $res->fetch_assoc()) {
//             // echo "<pre>";
//             // print_r($student);
//             // echo "</pre>";
//             echo "<tr>";
//             echo "<td>";
//             echo $student["id"];
//             echo "</td>";
//             echo "<td>";
//             echo $student["name"];
//             echo "</td>";
//             echo "<td>";
//             echo $student["phone"];
//             echo "</td>";
//             echo "</td>";
//         }
//         echo "</table>";
//     } else echo "No result";
// }
// mysqli_close($con);


//------------------------------------------------------------------------------
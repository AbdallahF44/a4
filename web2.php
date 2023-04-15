<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body style="background: #000;color:#fff;">


</body>

</html> -->

<?php

// L1 ******************************************


// echo "Hi" . "<br>";
// static $x = 5;
// 4 == "4" ? $x = 4 : "";
// echo $x . "<br>";
// echo gettype("null") . "<br>";
// var_dump('""""""""""""""""""""""""""""""""""""""""""""');
// echo "<br>";


// function a()
// {
//     static $x = 4;
//     static $y = 1;
//     echo $x * $y . "<br>";
//     $y += 10;
// }
// a();
// a();
// a();
// a();
// a();
// a();


// $aa = 4;
// function f()
// {
//     echo $GLOBALS["aa"] . "<br>";
// }
// f();
// f();
// f();
// echo "<pre>";
// print_r($GLOBALS);
// echo "</pre>";

// echo "a\r\na";

// L2 ******************************************

// echo @("4g" + 4);
// echo "<br>";
// echo "4" + 4;
// echo "<br>";
// echo 4 + "4";
// echo "<br>";
// echo "4" - 4;
// echo "<br>";
// echo "4" / 4;
// echo "<br>";
// echo "4" * 4;
// echo "<br>";
//ايام الاسبوع سوتش واجب
// $day = "sa";
// switch ($day) {
//     case strtolower('Sa'):
//         echo "Today is Sa.";
//         break;
//     case strtolower('Su'):
//         echo "Today is Su.";
//         break;
//     case strtolower('Mo'):
//         echo "Today is Mo.";
//         break;
//     case strtolower('Tu'):
//         echo "Today is Tu.";
//         break;
//     case strtolower('We'):
//         echo "Today is We.";
//         break;
//     case strtolower('Th'):
//         echo "Today is Th.";
//         break;
//     case strtolower('Fr'):
//         echo "Today is Fr.";
//         break;
//     default:
//         echo "This is not a day!";
// }
//, بتمرر كل جزء لحال للطباعة 
//. بتمرر كل اشي للطباعة

// **************************************** */

// $arr = [2, 3, 5];
// $arr[5] = 0;
// echo "<pre>";
// array_splice($arr, 2, 1, [4]);
// print_r($arr);
// echo "</pre>";

// $arr = [2, 3, 5, 6];
// echo array_pop($arr); // بيرجع الي حذفه
// echo "<br>";
// echo array_push($arr, 4); // بيرجع طول الاري بعد الاضافة
// echo "<br>";
// var_dump(array_push($arr, 4));
// echo "<br>";
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

//-------------------------------------------------
// echo "<h4>Name : Abdallah Fawzi Abu Mostafa<br>ID : 1301204594</h4>";

// function checkNumbers($rangeStart, $rangeEnd)
// {
//     if (gettype($rangeStart) == "integer" && gettype($rangeEnd) == "integer") {
//         if ($rangeStart > $rangeEnd) { //>
//             $temp = $rangeStart;
//             $rangeStart = $rangeEnd;
//             $rangeEnd = $temp;
//         }
//         $numberArray = [];
//         for ($i = $rangeStart; $i <= $rangeEnd; $i++) { //>
//             array_push($numberArray, $i);
//         }
//         echo "<br><table border='1'>";
//         echo "<tr><th>Number</th><th>Type</th></tr>";
//         for ($i = 0; $i < count($numberArray); $i++) { //>
//             echo "<tr>";
//             echo "<td>$numberArray[$i]</td>";
//             $type = $numberArray[$i] % 2 == 0 ? "Even" : "Odd";
//             echo "<td>" . $type . "</td>";
//             echo "</tr>";
//         }
//         echo "</table>";
//     } else {
//         $type = gettype($rangeStart)  == "integer" ? gettype($rangeEnd) : gettype($rangeStart);
//         echo "<br>Range start or end must be Integer not " . ucfirst($type) . ".<br>";
//     }
// }
// checkNumbers(1, 10);
// checkNumbers("fdgdfg", "abd");
// checkNumbers(6.3, 15);
// checkNumbers(20, 15);
//-------------------------------------------------

// array_combine
// Creates an array by using 2 parameters, one for keys and one for values
// two arrayśmust be the same length
// returns a new array, will not update the oreginal array

// $keys = ["Name", "ID", "Dep"];
// $values = ["Abdallah Fawzi", "1301204594", "CS"];
// echo "<h3>array_combine</h3>";
// echo "<pre>";
// print_r(array_combine($keys, $values));
// echo "</pre>";


// array_unique
// removes duplicate values from any array
// returns a new array, will not update the oreginal array

// $arr = [4, 5, 9, 6, 4, 5, 7, 6, 9];
// echo "<h3>array_unique</h3>";
// echo "<pre>";
// print_r(array_unique($arr));
// echo "</pre>";


// shuffle
// randomize the elements of an array
// returns boolean, and update the oreginal array

// $arr = ["A4", 4, 44, 95];
// echo "<h3>shuffle</h3>";
// shuffle($arr);
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

//---------------------------------------------------

// //إنشاء المف ووضع فيه الاسم والرقم الجامعي
// $fh = fopen("test.txt", "w");
// fwrite($fh, "Abdallah Fawzi\r\n1301204594");
// fclose($fh);

// // نسخ محتويات الملف في متغير لإضافتها مع كلمة ولكم
// $current = file_get_contents("test.txt");

// // فتح الملف في وضع الكتابة لإضافة كلمة ولكم في بداية الملف ونضيف معها
// // المحتويات التي اخذناها في الخطوة السابقة
// $fh = fopen("test.txt", "w");
// fwrite($fh, "Wellcome\r\n" . $current);
// fclose($fh);

// // إضافة رقم الهاتف في نهاية الملف
// $fh = fopen("test.txt", "a");
// fwrite($fh, "\r\n0593423031");
// fclose($fh);

// // طباعة المحتوى
// echo file_get_contents("test.txt");

//---------------------------------------------------------------------------------
?>
<?php

$errors = [];
// فحص إذا تم الضغط على زر الإرسال
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // جلب بيانات النموذج
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $remember_me = isset($_POST['remember-me']);

    if (empty($name)) {
        $errors["name"] = "enter name";
        echo 'Enter name. <br>';
    }
    if (empty($email)) {
        $errors["email"] = "enter email";
        echo 'Enter email. <br>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
        echo 'Invalid email format. <br>';
    }
    if (empty($password)) {
        $errors["password"] = "enter password";
        echo 'enter password. <br>';
    } elseif (strlen($password) < 6) {
        $errors['password'] = "Password should be at least 6 characters.";
        echo 'Password should be at least 6 characters. <br>';
    }

    if (isset($_POST['gender'])) {
        if ($_POST['gender'] == 'male') {
            // echo 'MALE';
        } elseif ($_POST['gender'] == 'female') {
            // echo 'FEMALE';
        }
    }




    if (isset($_FILES['image'])) {
        if ($_FILES['image']['size'] > 1024) {
            $errors['image'] = 'size must be less than 1 MB.';
        }
    }
    echo md5($_REQUEST['password']);


    if (count($errors) == 0) {

        // //DB
        // $host = "localhost";
        // $username = "root";
        // $password = "";
        // $dbName = "web2";


        // $con = new mysqli($host, $username, $password, $dbName);
        // if ($con->connect_error) {
        //     die("Connection Error" . $con->connect_error);
        // }




        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        //     $sql = 'INSERT INTO users (Name,Email,Password,Gender,Img)
        //  values ("' . $_POST["name"] . '","' . $_POST["email"] .
        //         '","' . $_POST["password"] . '","' . $_POST["gender"] . '","' . $_FILES['image']['name'] .  '")';
        //     if ($con->query($sql) === TRUE) {
        //         echo "New Recored was inserted";
        //     } else {
        //         echo "Error" . $con->error;
        //     }



        // $con->close();

    }
}









?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Sign Up</title>
</head>

<body>
    <h3>Form Sign Up</h3>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <label name="gender" for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male" checkdate>Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>

        <label for="remember-me">Remember Me:</label>
        <input type="checkbox" id="remember-me" name="remember-me"><br><br>

        <label for="image">Image Upload:</label>
        <input type="file" id="image" name="image" accept="image/*"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
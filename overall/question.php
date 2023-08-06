<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mno = $_POST['mno'];
$gen = $_POST['gender'];
$email = $_POST['email'];
$detail = $_POST['detail'];



echo "<b>Form Content <br></b>";
echo "First name: $fname<br>";
echo "Last name: $lname <br>";
echo "Mobile number: $mno<br>";
echo "Gender: $gen <br>";
echo "Email: $email <br>";
echo "Favourite music: ";

if (isset($_POST['submit'])){
    $fav = $_POST['fav'];
   

    foreach ($fav as $value){
        echo "$value ";
        
    }

}

echo "<br>Additional details: $detail";





?>
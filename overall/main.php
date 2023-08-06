<?php

$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "register";

$conn = new mysqli($dbserver,$dbuser,$dbpass,$dbname);

if($conn){
    echo "Database Connected Successfully";
}

$fname = $_POST['fname'];
$age = $_POST['age'];
$byear = $_POST['byear'];
$hobby = $_POST['hobby'];

$sql = "INSERT INTO data (Fullname,Age,Birthyear,Hobby) 
VALUES ('$fname','$age','$byear','$hobby')";
mysqli_query($conn,$sql);


// //file handling
// $filename = $_FILES['file1']['name'];
// $filetype = $_FILES['file1']['type'];
// $filesize = $_FILES['file1']['size'];
// $filetemp = $_FILES['file1']['tmp_name'];

// $newlocation = move_uploaded_file($filetemp,"D:/temp_images/$filename");

// $newsize = $filesize / (1024*1024);
// $size = round($newsize);

// //displaying file details
// echo "File name: $filename<br>";
// echo "File type: $filetype<br>";
// echo "File size: $size<br>";
// echo "File temp location: $filetemp<br>"

?>
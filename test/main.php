<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "formdata";

$conn = new mysqli($dbserver,$dbuser,$dbpass,$dbname); 

if($conn){
    echo "Connection Successful";
}

$Fname = $_POST['fname'];
$Age = $_POST['age'];
$Byear = $_POST['byear'];
$Email = $_POST['email'];
$Gender = $_POST['gender'];

//insert
//  $sql = "INSERT INTO information (Fullname,Age,Birthyear,Email,Gender)
//  VALUES ('$Fname','$Age','$Byear','$Email','$Gender')";
// mysqli_query($conn,$sql);


//delete
// $sql = "DELETE FROM information WHERE Age = 22";
// mysqli_query($conn,$sql);

//select and fetch
// $sql = "SELECT * FROM information WHERE Fullname = 'Rusith'";
// $result = mysqli_query($conn,$sql);

// echo "<br>";

// if(mysqli_num_rows($result) > 0)
// {
//     while($row = mysqli_fetch_assoc($result) )
//     {
//         echo "| Fullname: " .$row["Fullname"]. "| Age: ".$row["Age"]. "| Birthyear: " .$row["Birthyear"]. "| Email: " .$row["Email"]. "<br>";
//     }
// }



?>
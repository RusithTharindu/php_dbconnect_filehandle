<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="check.php" method="post">

        <input type="checkbox" name="songs[]" value="POP">POP <br>
        <input type="checkbox" name="songs[]" value="JAZZ">JAZZ <br>
        <input type="checkbox" name="songs[]" value="OTHER">Other <br>
         
        <input type="submit" name="submit">
    </form>


    <?php
    
        if (isset($_POST['submit'])){
            $songs = $_POST['songs'];
           

            foreach ($songs as $value){
                echo $value . "<br>";
            }

        }

    ?>

</body>
</html>
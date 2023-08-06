<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Handling</title>
</head>
<body>
    <form action="file.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file1" size="50">
        <br> <br>
        <input type="submit" value="Send File">
    </form>

    <?php

        $fname = $_FILES['file1'] ['name'];
        $ftype = $_FILES['file1'] ['type'];
        $fsize = $_FILES['file1'] ['size'];
        $ftemp = $_FILES['file1'] ['tmp_name'];

        $newlocation = move_uploaded_file ($ftemp,"E:/temp_images/$fname");

        //rounding off the size of the document
        $newsize = $fsize / (1024*1024);
        $newsize1 = round ($newsize);

        echo "Name: $fname <br>";
        echo "File type: $ftype <br>";
        echo "File size: $newsize1 MB <br>";
        echo "Temp: $ftemp <br>";

    ?>
</body>
</html>


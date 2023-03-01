<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $random_id = random_int(1, 100);

            $name = trim($_POST['name']);
            $name = stripslashes($name);
            $name = strip_tags($name);
            $name = htmlspecialchars($name);

            $sname = trim($_POST['sname']);
            $sname = stripslashes($sname);
            $sname = strip_tags($sname);
            $sname = htmlspecialchars($sname);

            $age = trim($_POST['age']);
            $age = stripslashes($age);
            $age = strip_tags($age);
            $age = htmlspecialchars($age);

            echo "<label for= br > Id: ".$random_id."<br/> <label for= br > Name: ". $name."<br/> <label for= br > Surname: ".$sname."<br/> <label for= br > Age: ".$age."<br/>";
        }
    ?>
</body>

</html>
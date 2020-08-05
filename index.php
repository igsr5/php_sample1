<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="sample.php" method="post" enctype="multipart/form-data">
        <input type="text" name="ok">
        写真：<input type="file" name="picture">
        <input type="submit" value="送信する">
    </form>
</body>

</html>
<?php
    $file=$_FILES["picture"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ファイル名： <?php echo $file["name"]; ?>
    ファイルタイプ： <?php echo $file["type"]; ?>
    アップロードされたファイル： <?php echo $file["tmp_name"]; ?>
    エラー内容： <?php $file["error"]; ?>
    サイズ： <?php $file["size"]; ?>

    <?php
        $ext=substr($file["name"],-4);
        if($ext==".gif" || $ext=".jpg" || $ext == ".png"):
            $filePath="./user_img/".$file["name"];
            $success=move_uploaded_file($file["tmp_name"],$filePath);

            if($success):
    ?>

    <img src="<?php echo $filePath ?>" alt="">

            <?php else: ?>
            ※ファイルのアップロードに失敗しました
            <?php endif; ?>

            <?php else: ?>
            ※拡張子が～～
            <?php endif; ?>
</body>
</html>
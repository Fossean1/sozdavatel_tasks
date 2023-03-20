<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.4</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <?php
        if (isset($_FILES["file"])) {
            $uploaddir = 'img/';
            $uploadfile = $uploaddir . basename($_FILES["file"]["name"]);
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadfile)) {
                echo "<div class='alert success'>Файл был успешно загружен</div>";
            } else {
                echo "<div class='alert unsuccess'>Не удалось загрузить файл</div>";
            }
        }
        ?>
        <div class="wrapper">
            <div class="photo-gallery">
                <?php
                    $featured_dir = 'img/';
                    $scan = scandir($featured_dir);
                    for ($i = 0; $i < count($scan); $i++) {
                        if ($scan[$i] != '.' && $scan[$i] != '..') {
                            echo '<img class="photo" src="' . $featured_dir . $scan[$i] . '" alt="image" />';
                        }
                    }
                ?>
            </div>
        </div>
        <a href="add_photo.php" class="btn">Добавить фото</a>
    </div>
</body>

</html>
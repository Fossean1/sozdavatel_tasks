<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.3</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #e8edf0;
            margin-top: 30px;
        }

        .container {
            margin: 0 auto;
            width: 800px;
        }

        .photo-gallery {
            background: #ffffff;
            border-radius: 5px;
            display: grid;
            width: 100%;
            padding: 20px;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .photo {
            width: 100%;
            height: 180px;
            border-radius: 5px;
            object-fit: cover;
        }

        .btn {
            width: 100%;
            margin-top: 10px;
            border: none;
            height: 45px;
            font-size: 23px;
            background-color: #2890ff;
            color: #fff;    
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="photo-gallery">
            <img class="photo" src="https://www.planetware.com/wpimages/2019/11/canada-in-pictures-beautiful-places-to-photograph-morraine-lake.jpg" alt="gallery image" />
            <img class="photo" src="https://www.planetware.com/wpimages/2019/11/canada-in-pictures-beautiful-places-to-photograph-morraine-lake.jpg" alt="gallery image" />
            <img class="photo" src="https://www.planetware.com/wpimages/2019/11/canada-in-pictures-beautiful-places-to-photograph-morraine-lake.jpg" alt="gallery image" />
            <img class="photo" src="https://www.planetware.com/wpimages/2019/11/canada-in-pictures-beautiful-places-to-photograph-morraine-lake.jpg" alt="gallery image" />
        </div>
        <a class="btn" href="add_photo.php">Добавить фото</button>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.2</title>
</head>

<body>
    <?php
        function generateDateInRussian($num, $month_number) {
            $months = [
                "января",
                "февраля",
                "марта",
                "апреля",
                "мая",
                "июня",
                "июля",
                "августа",
                "сентября",
                "октября",
                "ноября",
                "декабря",
            ];

            if ($num < 1 || $num > 31) {
                throw new Exception('Ошибка: неверное значение даты');
            }

            if ($month_number < 1 || $month_number > 12) {
                throw new Exception('Ошибка: неверное значение месяца');
            }

            echo $num . " " . $months[$month_number - 1];
        }

        generateDateInRussian(31, 11);
    ?>
</body>

</html>
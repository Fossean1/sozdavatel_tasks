<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.3</title>
</head>

<body>
    <form method="get">
        <input type="text" name="num1" placeholder="Введите первое число" value="<?php 
        if (isset($_GET["num1"])) { 
            echo $_GET["num1"];
        }
        ?>" required><br><br>
        <select name="operation">
            <option value="+" <?php if (isset($_GET["operation"]) && "+" === $_GET["operation"]){ echo "selected";}?>>+</option>
            <option value="-" <?php if (isset($_GET["operation"]) && "-" === $_GET["operation"]){ echo "selected";}?>>-</option>
            <option value="/" <?php if (isset($_GET["operation"]) && "/" === $_GET["operation"]){ echo "selected";}?>>/</option>
            <option value="*" <?php if (isset($_GET["operation"]) && "*" === $_GET["operation"]){ echo "selected";}?>>*</option>
        </select><br><br>
        <input type="text" name="num2" placeholder="Введите второе число" value="<?php 
        if (isset($_GET["num2"])) { 
            echo $_GET["num2"];
        }
        ?>" required><br><br>
        <input type="submit" value="Вычислить">
    </form>
    <br>
    <?php
    if (
        isset($_GET["num1"])
        && isset($_GET["num2"])
    ) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operation = $_GET["operation"];

        switch ($operation) {
            case "+":
                echo "$num1 + $num2 = " . ($num1 + $num2);
                break;
            case "-":
                echo "$num1 - $num2 = " . ($num1 - $num2);
                break;
            case "*":
                echo "$num1 * $num2 = " . ($num1 * $num2);
                break;
            case "/":
                if ($num2 == 0) {
                    echo "Ошибка: деление на ноль";
                } else {
                    echo "$num1 / $num2 = " . ($num1 / $num2);
                }
                break;
            default:
                echo "Ошибка: выберите операцию";
        }
    } else {
        echo "Не все поля заполнены";
    }
    ?>
</body>

</html>
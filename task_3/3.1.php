<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: 0;
        }

        label,
        input {
            display: block;
        }

        label {
            margin-bottom: 3px;
        }

        input {
            margin-bottom: 15px;
        }

        #term,
        #interest_rate {
            width: 45px;
        }

        .deposit_calculator_form {
            margin: 50px auto 0;
            width: 500px;
            padding: 20px;
            background: #efefef;
            border-radius: 10px;
        }

        #deposit_amount {
            font-weight: 700;
            font-size: 25px;
        }

        .btn {
            padding: 8px;
            background: #5a5a5a;
            border: none;
            color: #fff;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="deposit_calculator_form">
        <form name="deposit_calculator" method="get">
            <label for="sum">Сумма вклада</label>
            <input type="number" name="sum" id="sum" value="<?php
                if (isset($_GET["sum"])) {
                    echo $_GET["sum"];
                }
            ?>" required>
            <label for="term_in_months">Срок в месяцах</label>
            <input type="number" name="term_in_months" id="term" value="<?php
                if (isset($_GET["term_in_months"])) {
                    echo $_GET["term_in_months"];
                }
            ?>" required>
            <label for="interest_rate">Процентная ставка</label>
            <input type="number" name="interest_rate" id="interest_rate" value="<?php
                if (isset($_GET["interest_rate"])) {
                    echo $_GET["interest_rate"];
                }
            ?>" required>
            <input type="submit" value="Рассчитать" class="btn" />
        </form>
        <div>Сумма вклада:</div>
        <div id="deposit_amount">
            <?php
            if (isset($_GET["sum"]) 
                && isset($_GET["term_in_months"])
                && isset($_GET["interest_rate"])) {
                $sum = $_GET["sum"];
                $term_in_months = $_GET["term_in_months"];
                $interest_rate = $_GET["interest_rate"];

                $now = time();
                $final_date = strtotime("+$term_in_months month");

                $term_in_days = round(($final_date - $now) / (60 * 60 * 24));

                $deposit_amount = ($sum * $interest_rate * $term_in_days / 365) / 100;

                echo floor($sum + $deposit_amount) . ' ₽';
            }
            ?>
        </div>
    </div>
</body>

</html>
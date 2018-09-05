<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--    <meta name="viewport"-->
    <!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Программирование интернет-приложений</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/icons/skull.ico" sizes="">


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Local Fallback -->
    <script>window.jQuery || document.write('<script src="../../js/jquery-3.3.1.js"><\/script>')</script>
    <script type="application/javascript" src="script.js">
    </script>
</head>
<body>
<table>
    <tr>
        <td class="column_placeholder"></td>
        <td class="column_placeholder_small"></td>
        <td class="column_placeholder_extra_small"></td>
        <td rowspan="3" class="block_results" id="results">
            <p>Ожидвние ввода...</p>
        </td>
        <td class="column_placeholder_small"></td>
        <td class="block_name">
            <p>Айгузин Иван Олегович | P3218 | Вариант 28801</p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td class="row_placeholder_small"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td rowspan="3" class="block_chart">
            <p><img src="images/chart.png"></p>
        </td>
    </tr>
    <tr>
        <td class="row_placeholder"></td>
    </tr>
    <tr>
        <td></td>
        <td class="block_variables">
            <p>X</p>
            <p>Y</p>
            <p>R</p>
        </td>
        <td></td>
        <td id="block_input">
            <form action="index.php" method="get" onsubmit="submitForm(this); return false;" id="form">
                <p class="checkbox_round" id="x">
                    <?php
                    @include 'generate_checkbox.php';
                    generateCheckbox();
                    ?>
                </p>
                <p class="input_text">
                    <input type="text" name="y" autocomplete="off" placeholder="(-3, 3)" maxlength="10">
                </p>
                <p>
                    <?php
                    @include 'generate_radio.php';
                    generateRadio();
                    ?>
                </p>
                <p id="button" class="input_button">
                    <input type="submit" value="Проверить результат">
                </p>
            </form>
        </td>
        <td></td>
    </tr>
</table>
</body>
</html>
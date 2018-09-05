<?php
$start_time = microtime(true);

if (areFieldsNotSet()) {
    reportMessage();
    return;
}

$x = floatval($_GET['x']);
$y = floatval($_GET['y']);
$r = floatval($_GET['r']);

$is_in_shape = checkThePoint($x, $y, $r);

reportVariables($x, $y, $r);
reportResult($is_in_shape);
reportCurrentTime();
reportExecutionTime($start_time);

function reportVariables($x, $y, $r)
{
    echo "<p>X: $x Y: $y R: $r</p>";
}

function areFieldsNotSet()
{
    if (!isset($_GET['x'])) {
        return true;
    }

    if (!isset($_GET['y'])) {
        return true;
    }

    if (!isset($_GET['r'])) {
        return true;
    }

    return false;
}

function checkSecondQuarter($x, $y, $r)
{
    return $x >= -$r && $y <= $r;
}

function checkThirdQuarter($x, $y, $r)
{
    return $y >= -$x / 2 - $r / 2;
}

function checkFourthQuarter($x, $y, $r)
{
    return $x * $x + $y * $y <= $r * $r;
}

function checkThePoint($x, $y, $r)
{
    if ($x <= 0 && $y >= 0 && checkSecondQuarter($x, $y, $r)) {
        return true;
    }

    if ($x <= 0 && $y <= 0 && checkThirdQuarter($x, $y, $r)) {
        return true;
    }

    if ($x >= 0 && $y <= 0 && checkFourthQuarter($x, $y, $r)) {
        return true;
    }

    return false;
}

function reportMessage()
{
    echo "<p>Ожидание ввода...</p>";
}

function reportResult($is_in_shape)
{
    $text = $is_in_shape ? "Да" : "Нет";
    echo "<p>Попадание: $text</p>";
}

function reportCurrentTime()
{
    $date = date("d.m.y H:i:s");
    echo "<p>Выполнено $date</p>";
}

function reportExecutionTime($start_time)
{
    $execution_time_in_ms = (microtime(true) - $start_time) * 1000;
    $execution_time = round($execution_time_in_ms, 3);

    setlocale(LC_NUMERIC, 'ru_RU');
    echo "<p>Время выполнения: $execution_time мс</p>";
}
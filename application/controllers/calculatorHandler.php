<?php

require_once 'calculator.php';

if (isset($_POST['shape']))
{
    $calculator = new Calculator();
    $result = $calculator->calculate();
    echo $result;
}
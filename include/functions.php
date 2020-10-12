<?php
function pars($var)
{
    $backtrace = debug_backtrace();
    echo '<pre>' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'] . '</pre>';
    echo '<pre>';
    var_dump($var);
    die();
}

function summFormat ($summ)
{
    $round = ceil($summ);
    $formatSumm = ($round > "1000") ? number_format($round, 0, ',', ' ') : "$round";
    $formatSumm = $formatSumm . ' ' . '&#x20bd;';
    return $formatSumm;
}

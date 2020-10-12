<?php
function pars($var)
{
    $backtrace = debug_backtrace();
    echo '<pre>' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'] . '</pre>';
    echo '<pre>';
    var_dump($var);
    die();
}

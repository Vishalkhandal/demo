<?php

function dd($name)
{
    echo "<pre>";
    var_dump($name);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

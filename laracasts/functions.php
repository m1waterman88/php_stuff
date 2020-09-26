<?php

function dd($val) {
    echo '<pre>';
    die(var_dump($val));
    echo '</pre>';
}

function checkAge($age) {
    return ($age >= 21) ? "Come on in" : "Sorry: 21+ only";
}

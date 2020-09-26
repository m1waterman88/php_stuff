<?php

function dd($val) {
    die(var_dump($val));
}

function checkAge($age) {
    return ($age >= 21) ? "Come on in" : "Sorry: 21+ only";
}

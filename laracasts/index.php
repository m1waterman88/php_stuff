<?php

require 'functions.php';

// Use super global to get a parameter and escape w/htmlspecialchars function.
$greeting = "Hello, " . htmlspecialchars($_GET['name']) . "!";

// Array.
$names = ['Mama', 'Dada', 'Shwageh', 'Deedee', 'Fah'];

// Associative array.
$person = [
    'age' => 32,
    'hair' => 'blonde',
    'career' => 'software engineer'
];

// Add a new key/value.
$person['name'] = "Mike";

// dd($person);
// dd(checkAge(19));

$task = [
    'title' => 'Go to sleep',
    'due' => 'now',
    'assigned_to' => $person['name'],
    'completed' => false
];

require 'index.view.php';

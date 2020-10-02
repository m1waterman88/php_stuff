<?php

require 'class.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
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

/*
$todo = [
    'title' => 'Go to sleep',
    'due' => 'now',
    'assigned_to' => $person['name'],
    'completed' => false
];
*/

/*
$tasks = [
    new Task('Learn PHP'),
    new Task('Learn Vue'),
    new Task('Profit')
];

$tasks[0]->complete();
*/

// dd($tasks);


// Connect to database with function.
$pdo = Connection::make();
$query = new QueryBuilder($pdo);
$tasks = $query->selectAll('todos');

//dd($tasks[0]->description());

require 'index.view.php';

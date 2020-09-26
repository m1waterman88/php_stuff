<?php

require 'functions.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todo_list', 'root', '');
} catch (PDOException $e) {
    die($e);
}

$statement = $pdo->prepare('SELECT * FROM todo_list');

$statement->execute;
dd($statement->fetchAll());

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

$todo = [
    'title' => 'Go to sleep',
    'due' => 'now',
    'assigned_to' => $person['name'],
    'completed' => false
];


class Task {
    protected $description;
    protected $completed = false;

    public function __construct($description) {
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }

    public function description() {
        return $this->description;
    }
}

$tasks = [
    new Task('Learn PHP'),
    new Task('Learn Vue'),
    new Task('Profit')
];

$tasks[0]->complete();

// dd($tasks);

require 'index.view.php';

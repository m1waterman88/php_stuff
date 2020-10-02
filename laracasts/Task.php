<?php

class Task {
    protected $description;
    protected $completed = false;
/*
    public function __construct($description) {
        $this->description = $description;
    }
*/
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

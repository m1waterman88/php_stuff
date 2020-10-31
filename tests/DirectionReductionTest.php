<?php
    use PHPUnit\Framework\TestCase;

    require 'array_counts.php';

    class DirectionReductionTest extends TestCase {
        private function revTest($actual, $expected) {
            $this->assertEquals($expected, $actual);
            // print_r($expected);
        }

        public function testBasics() {
            $a = ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"];
            $this->revTest(dirReduc($a), ["WEST"]);
            $b=["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH"];
            $this->revTest(dirReduc($b), []);
            $c = ["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH","NORTH"];
            $this->revTest(dirReduc($c), ["NORTH"]);
        }
    }
?>

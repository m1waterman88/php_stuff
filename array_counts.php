<?php declare(strict_types=1);
    function dirReduc(array $arr) {
        foreach ($arr as $key => $value) {
            $arr[$key] = strtoupper($value);
        }

        $count = array_count_values($arr);

        if ($count["NORTH"] >= $count["SOUTH"]) {
          $count["NORTH"] = ($count["NORTH"] - $count["SOUTH"]);
          unset($count["SOUTH"]);
        } else {
          $count["SOUTH"] = ($count["SOUTH"] - $count["NORTH"]);
          unset($count["NORTH"]);
        }

        if ($count["EAST"] >= $count["WEST"]) {
          $count["EAST"] = ($count["EAST"] - $count["WEST"]);
          unset($count["WEST"]);
        } else {
          $count["WEST"] = ($count["WEST"] - $count["EAST"]);
          unset($count["EAST"]);
        }

        foreach ($count as $key => $value) {
            if ($value === 0) unset($count[$key]);
        }

        return array_keys($count);
    }
?>

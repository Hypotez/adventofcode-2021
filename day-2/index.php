<?php

    function task1() {
        $horizontal = 0;
        $depth = 0;

        $file = fopen("input.txt", "r");

        while($row = fgets($file)) {
            $line = explode(" ", $row);
            
            $dir = $line[0];
            $pos = intval($line[1]);
            
            switch ($dir) {
                case "forward":
                    $horizontal += $pos;
                    break;
                case "down":
                    $depth += $pos;
                    break;
                case "up":
                    $depth -= $pos;
                    break;
            }
            
        }
        fclose($file);
        return $horizontal * $depth;
    }

    function task2() {
        $horizontal = 0;
        $depth = 0;
        $aim = 0;

        $file = fopen("input.txt", "r");

        while($row = fgets($file)) {
            $line = explode(" ", $row);
            
            $dir = $line[0];
            $pos = intval($line[1]);
            
            switch ($dir) {
                case "forward":
                    $depth += $aim * $pos;
                    $horizontal += $pos;
                    break;
                case "down":
                    $aim += $pos;
                    break;
                case "up":
                    $aim -= $pos;
                    break;
            }
            
        }
        fclose($file);
        return $horizontal * $depth;
    }

    echo task1();

    echo "\n";

    echo task2();

?>
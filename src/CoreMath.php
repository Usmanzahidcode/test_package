<?php

namespace UsmanZahid\TestPackage;

class CoreMath {
    public function __construct() {
        //
    }

    public function sum($a, $b): float|int {
        return $a + $b;
    }

    public function subtract($a, $b): float|int {
        return $a - $b;
    }

    public function multiply($a, $b): float|int {
        return $a * $b;
    }

    public function divide($a, $b): float|int {
        if ($b==0) {
            throw new \InvalidArgumentException("Division by zero.");
        }
        return $a / $b;
    }
}

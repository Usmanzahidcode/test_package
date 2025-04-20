<?php

namespace Usman\TestPackage;

class AdvancedMath {
    protected CoreMath $coreMath;

    public function __construct() {
        $this->coreMath = new CoreMath();
    }

    public function average(array $numbers): float {
        $count = count($numbers);
        if ($count === 0) {
            throw new \InvalidArgumentException("Empty array provided.");
        }

        $sum = array_reduce($numbers, fn($carry, $item) => $this->coreMath->sum($carry, $item), 0);
        return $this->coreMath->divide($sum, $count);
    }

    public function power($base, $exponent): float|int {
        return pow($base, $exponent);
    }

    public function percentage($total, $portion): float {
        return $this->coreMath->divide($portion, $total) * 100;
    }

    public function factorial(int $n): int {
        if ($n < 0) {
            throw new \InvalidArgumentException("Negative number not allowed.");
        }
        return $n === 0 ? 1 : $n * $this->factorial($n - 1);
    }
}

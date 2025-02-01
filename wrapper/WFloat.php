<?php

namespace Wrapper;
class WFloat extends Wrapper implements WrapperInterface
{
    private float $value;

    public function __construct(float $value) {
        $this->value = $value;
    }

    public function getValue(): float {
        return $this->value;
    }

    public function setValue($value): void {
        $this->value = (float) $value;
    }

    public function increment(): void {
        $this->value++;
    }

    public function decrement(): void {
        $this->value--;
    }

    public function add(float $amount): void {
        $this->value += $amount;
    }

    public function subtract(float $amount): void {
        $this->value -= $amount;
    }

    public function __toString(): string {
        return (string)$this->value;
    }
}
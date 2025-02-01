<?php

class WInteger extends Wrapper implements WrapperInterface
{
    private int $value;

    public function __construct(int $value) {
        $this->value = $value;
    }

    public function getValue(): int {
        return $this->value;
    }

    public function setValue($value): void {
        $this->value = (int) $value;
    }

    public function increment(): void {
        $this->value++;
    }

    public function decrement(): void {
        $this->value--;
    }

    public function add(int $amount): void {
        $this->value += $amount;
    }

    public function subtract(int $amount): void {
        $this->value -= $amount;
    }

    public function __toString(): string {
        return (string)$this->value;
    }
}
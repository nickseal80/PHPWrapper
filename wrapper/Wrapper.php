<?php

namespace Wrapper;

class Wrapper implements WrapperInterface {
    private mixed $value;

    public function __construct(mixed $value) {
        $this->value = $value;
    }

    public function getValue(): mixed {
        return $this->value;
    }

    public function setValue(mixed $value): void {
        $this->value = $value;
    }

    public function __toString(): string {
        return (string)$this->value;
    }
}
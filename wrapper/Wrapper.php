<?php

namespace Wrapper;

class Wrapper implements WrapperInterface {
    private mixed $value = null;

    public function __construct(mixed $value) {
        $this->value = $value;
    }

    public function getValue(): mixed {
        return $this->value;
    }

    public function setValue(mixed $value): void {
        $this->value = $value;
    }

    public function isEmpty(): bool {
        return $this->value === null;
    }

    public function __toString(): string {
        return (string)$this->value;
    }
}
<?php

namespace Wrapper;
class WString extends Wrapper implements WrapperInterface
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue($value): void
    {
        $this->value = (string) $value;
    }

    public function append(string $str): void
    {
        $this->value .= $str;
    }

    public function toUpperCase(): void
    {
        $this->value = strtoupper($this->value);
    }

    public function toLowerCase(): void
    {
        $this->value = strtolower($this->value);
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
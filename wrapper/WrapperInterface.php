<?php

interface WrapperInterface
{
    public function getValue(): mixed;

    public function setValue(mixed $value): void;

    public function __toString(): string;
}
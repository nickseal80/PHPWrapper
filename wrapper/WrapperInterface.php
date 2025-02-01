<?php

namespace Wrapper;

interface WrapperInterface
{
    public function getValue(): mixed;

    public function setValue(mixed $value): void;

    public function isEmpty(): bool;

    public function __toString(): string;
}
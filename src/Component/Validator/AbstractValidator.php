<?php

namespace Misery\Component\Validator;

use Misery\Component\Validator\ValidatorInterface;

abstract class AbstractValidator implements ValidatorInterface
{
    private $collector;

    public function __construct(ValidationCollector $collector)
    {
        $this->collector = $collector;
    }

    public function getValidationCollector(): ValidationCollector
    {
        return $this->collector;
    }

    abstract function validate($value, array $context = []): void;
}
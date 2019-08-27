<?php

namespace Misery\Component\Csv\Validator\Constraint;

use Misery\Component\Validator\Constraint\Constraint;

class UniqueValueConstraint implements Constraint
{
    public const UNIQUE_VALUE = 'Duplicate Value(s) found: %s';
}
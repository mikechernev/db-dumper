<?php

namespace Spatie\DbDumper\Exceptions;

use Exception;

class CannotSetParameter extends Exception
{
    /**
     * @param string $name
     * @param string $conflictName
     *
     * @return \Spatie\DbDumper\Exceptions\CannotSetParameter
     */
    public static function conflictParameters($name, $conflictName)
    {
        return new static("Cannot set {$name}! Conflicts with parameter {$conflictName}.");
    }
}

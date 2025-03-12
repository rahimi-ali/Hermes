<?php

declare(strict_types=1);

namespace RahimiAli\Hermes\Container\AutoWired\Exceptions;

use Exception;
use Psr\Container\ContainerExceptionInterface;

class CircularDependencyException extends Exception implements ContainerExceptionInterface
{
    /**
     * @param string[] $resolutionStack
     */
    public function __construct(string $class, array $resolutionStack)
    {
        parent::__construct("circular dependency detected for $class : " . implode(' -> ', $resolutionStack));
    }
}

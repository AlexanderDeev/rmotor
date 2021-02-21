<?php

namespace RMotor;

use Psr\Container\ContainerInterface as Container;

class Resolver
{
    public function __construct(
        protected Container $_container)
    {
    }
}
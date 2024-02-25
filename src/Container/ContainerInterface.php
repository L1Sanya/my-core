<?php

namespace Core\src\Container;

interface ContainerInterface
{
    public function get(string $class): object;

    public function set(string $class, callable $callback);

}
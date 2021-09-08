<?php

/*
 * Copyright (c) 2021 Juan Valero
 *
 * Licensed under the MIT license.
 * See LICENSE file in the project root for full license information.
 */

namespace DI;

/**
 * @author Juan Valero <juan.valero@nodeo.fr>
 */
abstract class AbstractBinder implements Binder
{
    private array $bindings;

    abstract public function bind();

    public function type(string $type, mixed $value)
    {
        // TODO: Implement bindType() method.
    }

    public function scalar(string $key, mixed $value)
    {
        // TODO: Implement bindScalar() method.
    }
}

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
interface Binder
{
    public function type(string $type, mixed $value);

    public function scalar(string $key, mixed $value);
}

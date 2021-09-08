<?php

/*
 * Copyright (c) 2021 Juan Valero
 *
 * Licensed under the MIT license.
 * See LICENSE file in the project root for full license information.
 */

namespace DI;

use JetBrains\PhpStorm\Pure;

/**
 * This class is the default implementation of {@link Container}.
 *
 * @author Juan Valero <juan.valero@nodeo.fr>
 */
class ContainerImpl implements Container
{
    /**
     * @inheritDoc
     */
    public function get(string $key): mixed
    {
        // TODO: Implement get() method.
    }

    /**
     * @inheritDoc
     */
    #[Pure]
    public function has(string $key): bool
    {
        // TODO: Implement has() method.
    }
}

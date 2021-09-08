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
 * This interface represents the container in which all the dependencies are
 * stored.
 *
 * It is <strong>strongly</strong> recommended using this interface as
 * little as possible, and rather let Pluto take care of automatically injecting
 * dependencies into your classes.
 *
 * @author Juan Valero <juan.valero@nodeo.fr>
 */
interface Container
{
    /**
     * Returns the dependency associated to the specified key.
     *
     * @param string $key The dependency key.
     * @return mixed The dependency associated to the specified key.
     */
    public function get(string $key): mixed;

    /**
     * Checks if the container contains the dependency associated to the
     * specified key.
     *
     * This method will return <code>true</code> only if the dependency
     * associated to the specified key was previously registered
     * in a {@link Binder}.
     *
     * @param string $key The dependency key.
     * @return bool <code>true</code> if the container contains a dependency
     * associated to the specified key, <code>false</code> otherwise.
     */
    #[Pure]
    public function has(string $key): bool;
}

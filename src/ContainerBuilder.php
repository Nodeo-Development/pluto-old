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
 * This class is the application entry point.
 * It contains various methods to create a {@link Container}.
 *
 * Several properties can be used depending on your needs :
 * <ul>
 *  <li> Auto wiring (bool) : Determine if the container can automatically
 * resolve dependencies or not.
 * </ul>
 *
 * The {@link ContainerBuilder} bellow create a {@link Container} which has a
 * unique binder called <code>MyBinder</code> and which <em>cannot</em>
 * automatically resolve dependencies :
 * <code>
 * $container = ContainerBuilder::from(new MyBinder())
 *                  ->withoutAutoWiring()
 *                  ->build();
 * </code>
 *
 * @author Juan Valero <juan.valero@nodeo.fr>
 */
class ContainerBuilder
{
    /**
     * The binders associated to the container.
     *
     * @var Binder[]
     */
    private array $binders;

    /**
     * ContainerBuilder constructor.
     *
     * @param array $binders An array of binders associated to the container.
     */
    #[Pure]
    private function __construct(array $binders)
    {
        $this->binders = $binders;
    }

    #[Pure]
    public static function from(Binder ...$binders): self
    {
        return new self($binders);
    }

    #[Pure]
    public function build(): Container
    {
        return new ContainerImpl();
    }
}

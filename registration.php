<?php
/**
 * Noindex NonProd module registration.
 *
 * @copyright Scandiweb, Inc. All rights reserved.
 */

declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'ReadyMage_NoindexNonprod',
    __DIR__
);

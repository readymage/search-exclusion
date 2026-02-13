<?php

declare(strict_types=1);

namespace ReadyMage\NoindexNonprod\Block;

use Magento\Framework\View\Element\Template;

class MetaRobots extends Template
{
    private const META_ROBOTS_CONTENT = 'noindex,nofollow';

    public function getMetaRobotsContent(): string
    {
        return self::META_ROBOTS_CONTENT;
    }
}

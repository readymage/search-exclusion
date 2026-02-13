<?php
/**
 * Block that outputs the noindex,nofollow meta tag.
 * Module is only installed on non-live envs (gated by portal/drone); when enabled, we output the tag.
 *
 * @copyright Scandiweb, Inc. All rights reserved.
 */

declare(strict_types=1);

namespace ReadyMage\NoindexNonprod\Block;

use Magento\Framework\View\Element\Template;

class MetaRobots extends Template
{
    /**
     * Meta robots content value.
     */
    private const META_ROBOTS_CONTENT = 'noindex,nofollow';

    /**
     * Return the meta robots content (noindex,nofollow).
     *
     * @return string
     */
    public function getMetaRobotsContent(): string
    {
        return self::META_ROBOTS_CONTENT;
    }
}

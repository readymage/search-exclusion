<?php
/**
 * ReadyMage SearchExclusion
 *
 * @copyright Scandiweb, Inc. All rights reserved.
 */

declare(strict_types=1);

namespace ReadyMage\SearchExclusion\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class RecurringData implements InstallDataInterface
{
    private const CORE_CONFIG_TABLE_NAME = 'core_config_data';

    private const CONFIG_PATH_DEFAULT_ROBOTS = 'design/search_engine_robots/default_robots';

    private const CONFIG_VALUE_DEFAULT_ROBOTS = 'NOINDEX,NOFOLLOW';

    private const CONFIG_PATH_CUSTOM_INSTRUCTIONS = 'design/search_engine_robots/custom_instructions';

    private const CONFIG_VALUE_CUSTOM_INSTRUCTIONS = "User-Agent: *
Disallow: /
";

    /**
     * Re-apply robots config on every setup:upgrade (e.g. after DB import).
     *
     * @inheritdoc
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $tableName = $setup->getTable(self::CORE_CONFIG_TABLE_NAME);
        $connection = $setup->getConnection();

        $connection->insertOnDuplicate(
            $tableName,
            [
                'path'  => self::CONFIG_PATH_DEFAULT_ROBOTS,
                'value' => self::CONFIG_VALUE_DEFAULT_ROBOTS,
            ],
            ['value']
        );

        $connection->insertOnDuplicate(
            $tableName,
            [
                'path'  => self::CONFIG_PATH_CUSTOM_INSTRUCTIONS,
                'value' => self::CONFIG_VALUE_CUSTOM_INSTRUCTIONS,
            ],
            ['value']
        );

        $setup->endSetup();
    }
}

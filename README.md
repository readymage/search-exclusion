# ReadyMage Search Exclusion

Magento 2 module that injects `<meta name="robots" content="noindex,nofollow">` in the frontend `<head>`.

## Purpose

- Ensures non-production (non-live) instances are not indexed by search engines.
- **Runtime-only:** The meta tag is output by the module when it is enabled. It does not rely on Magento's `core_config_data` (e.g. `design/search_engine_robots/*`), so it **survives DB imports** and does not get overwritten when importing a production database.

## When the module is installed

Installation is gated by the build pipeline and portal: the module is only installed when the environment is **not live** (`is_live === false`). The module does not perform its own "prod vs non-prod" check; if it is enabled, it outputs the tag.

## Installation (Composer)

```bash
composer require readymage/search-exclusion
bin/magento module:enable ReadyMage_SearchExclusion
bin/magento setup:upgrade
```

For Readymage builds, the module is installed automatically for non-live environments via the `INSTALL_READYMAGE_SEARCH_EXCLUSION` flag in drone-shared-cli.

## Requirements

- Magento 2.4.x (or compatible 2.x)
- PHP 7.4+ or 8.1+

## License

Proprietary.

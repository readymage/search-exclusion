# ReadyMage Search Exclusion

Magento 2 module that injects `<meta name="robots" content="noindex,nofollow">` in the frontend `<head>`.

## Purpose

- Ensures non-production (non-live) instances are not indexed by search engines.
- **Runtime-only:** The meta tag is output by the module when it is enabled. It does not rely on Magento's `core_config_data` (e.g. `design/search_engine_robots/*`), so it **survives DB imports** and does not get overwritten when importing a production database.

## Installation (Composer)

```bash
composer require readymage/search-exclusion
bin/magento module:enable ReadyMage_SearchExclusion
bin/magento setup:upgrade
```

## License

Proprietary.

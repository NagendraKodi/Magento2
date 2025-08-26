# Orange_CustomTierPrice

## Overview
The `Orange_CustomTierPrice` module is a custom Magento 2 extension that adds a new column to the Tier Price grid in the admin panel. This module allows store administrators to manage additional data for tier pricing.

## Features
- Adds a custom column to the Tier Price grid in the admin panel.
- Allows customization of the column width and styling.
- Fully compatible with Magento 2.4.6.
<img width="649" height="356" alt="image" src="https://github.com/user-attachments/assets/5f7141a1-2437-4a91-a915-16430b438518" />

## Compatibility
- Tested on Magento 2.4.6.
- Working fine on both the backend and frontend.
- Backend value is getting saved.

## Installation
1. Navigate to the Magento root directory.
2. Place the module files in the following directory structure:
```
Orange_CustomTierPrice
├── etc
│   ├── module.xml
│   └── adminhtml
│       └── di.xml
├── Plugin
│   └── TierPriceColumnPlugin.php
├── view
│   └── adminhtml
│       ├── ui_component
│       │   └── catalog_product_tier_price.xml
│       └── web
│           └── css
│               └── custom.css
├── registration.php
├── [composer.json](http://_vscodecontentref_/0)
└── README.md
```
3. Run the following commands to enable the module:
```bash
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento cache:flush
```

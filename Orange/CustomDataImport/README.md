# Orange_CustomDataImport

## Overview
`Orange_CustomDataImport` is a Magento 2 module that provides a custom import entity named `custom_import`. It allows importing data into the `custom_import` table with columns `entity_id`, `name`, and `duration`.

## Features
- Custom import entity: `custom_import`
- Imports data into the `custom_import` table
- Validates required fields (`name`, `duration`)
- Supports append, replace, and delete behaviors
- Uses Magento's ImportExport framework

## Installation
1. Place the module in:
	```
	app/code/Orange/CustomDataImport
	```
2. Run the following commands:
	```bash
	php bin/magento setup:upgrade
	php bin/magento setup:di:compile
	php bin/magento cache:flush
	```

## Usage
1. Prepare a CSV file with columns: `entity_id`, `name`, `duration`
2. Go to **System > Data Transfer > Import** in the Magento Admin
3. Select `Custom Import` as the entity type and upload your file
4. Run the import process

## Database Table
The module creates a table named `custom_import` with the following columns:
- `entity_id` (primary key)
- `name`
- `duration`

## File Structure
```
Orange_CustomDataImport
├── etc
│   ├── module.xml
│   ├── db_schema.xml
│   ├── import.xml
├── Model
│   └── Import
│       └── CustomImport.php
├── registration.php
└── README.md
```

## Support
If you encounter any issues or have questions, please contact the module developer.

## License
This module is licensed under the MIT License. See the LICENSE file for details.

# DataTable for laravel-admin

**Add advanced interaction controls to your HTML tables** the free & easy way.

[![996.icu](https://img.shields.io/badge/link-996.icu-red.svg)](https://996.icu)

## ScreenShot

<img src="https://user-images.githubusercontent.com/2421068/55276143-0e4ae800-532b-11e9-8031-48d5a575f221.png">

## Install

```bash
composer require jxlwqq/data-table
php artisan vendor:publish --tag=laravel-admin-data-table
```

## Update

```bash
composer require jxlwqq/data-table
php artisan vendor:publish --tag=laravel-admin-data-table --force
```

## Configurations

Add `extensions` option in your `config/admin.php` configuration file:

```php
'extensions' => [
    'data-table' => [
        // If the value is set to false, this extension will be disabled
        'enable' => true,
        // global options
        'options' => [
             'paging' => false,
             'lengthChange' => false,
             'searching' => false,
             'ordering' => false,
             'info' => false,
             'language' => 'English', // or Chinese
        ]
    ]
]
```

More languages can be found in [DataTable i18n](https://github.com/DataTables/Plugins/tree/master/i18n).

## Use

```php
use Jxlwqq\DataTable\DataTable;

// table
$headers = ['Id', 'Email', 'Name', 'Company'];
$rows = [
    [1, 'labore21@yahoo.com', 'Ms. Clotilde Gibson', 'Goodwin-Watsica'],
    [2, 'omnis.in@hotmail.com', 'Allie Kuhic', 'Murphy, Koepp and Morar'],
    [3, 'quia65@hotmail.com', 'Prof. Drew Heller', 'Kihn LLC'],
    [4, 'xet@yahoo.com', 'William Koss', 'Becker-Raynor'],
    [5, 'ipsa.aut@gmail.com', 'Ms. Antonietta Kozey Jr.', 'Goooogle'],
];

$style = ['table-bordered','table-hover', 'table-striped'];

$options = [
    'paging' => true,
    'lengthChange' => false,
    'searching' => false,
    'ordering' => true,
    'info' => true,
    'autoWidth' => false,
];

$dataTable = new DataTable($headers, $rows, $style, $options);

echo $dataTable->render();
```

more options can be found in [DataTable Documentation](https://datatables.net/reference/option/).


## More resources

[Awesome Laravel-admin](https://github.com/jxlwqq/awesome-laravel-admin)

## License

Licensed under [The MIT License (MIT)](LICENSE).

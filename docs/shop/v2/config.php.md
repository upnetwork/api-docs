### [Главная страница](https://github.com/upnetwork/api-docs/blob/master/README.md) | [API магазинов](https://github.com/upnetwork/api-docs/blob/master/docs/shop/v2/README.md)

# Создание файла config.php

Данный файл инициализируют переменные для работы с API магазина

```php
<?php
  $shop_id = 31;
  $product_id = 31;
  $token = ...;
  $api_url = ...>;
?>
```

- `$api_url` - url на api для создания магазина (обычно `http://upnetwork.ru/api/shops/v2/shops/`)
- `$token - токен огранизации, который принадлежит магазин, для работы с api
- `$shop_id` - id магазина в системе
- `#product_id` - id продукта в системе (продукт обязательно должен принадлежать магазину)

## Пример 

```php
<?php
  $shop_id = 31;
  $product_id = 31;
  $token = "0560e7021c606ac793610adc0e956078";
  $api_url = 'http://upnetwork.ru/api/shops/v2/shops/';
?>
```

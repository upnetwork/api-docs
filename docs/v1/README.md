# UpnApi v1(deprecated)

Клиент для API версия 1.

## Использование

```php
<?php
$apiKey = "Some Key (Example)";
$client = new UpnApi($apiKey);

$client->createOrder($order);
?>
```

## Пример заказа

```php
<?php
$order = array(
  "id" => 341,
  "note" => "Комментарий",
  "contact_information" => array(
    "name" => "Реженок Степан", // имя покупателя
    "country_code" => "BY",
    "address" => "Минск, пр. Дзержинского 11",
    "zip_code" => "220000",
    "phone_number" => "+375 29 4514511"
  ),
  "cart" => array(
    "items" => array(
      array(
        "name" => "Биомагниты zerosmoke",
        "count" => 1,
        "price" => 300000,
        "currency" => "BYR"
      ),
      array(
        "name" => "Биомагниты zerosmoke",
        "count" => 2,
        "price" => 150000,
        "currency" => "BYR"
      )
    )
  )
);
```

## Пример заказа с общей стоимостью

```php
<?php
$order = array(
  "id" => 341,
  "note" => "Комментарий",
  "contact_information" => array(
    "name" => "Реженок Степан", // имя покупателя
    "country_code" => "BY",
    "address" => "Минск, пр. Дзержинского 11",
    "zip_code" => "220000",
    "phone_number" => "+375 29 4514511"
  ),
  "cart" => array(
    "total_cost" => 600000,
    "currency" => "BYR",
    "items" => array(
      array(
        "name" => "Биомагниты zerosmoke",
        "count" => 3,
      )
    )
  )
);
```

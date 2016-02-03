### [Главная страница](https://github.com/upnetwork/api-docs/blob/master/README.md)

# UpnApi v2 Shops

API UPNetwork магазинам создавать заказы в системе.

### [Пример магазина](https://github.com/upnetwork/test-php-shop)

## Подключение магазина к  системе

#### 1) Подключаем скрипт для обработки параметров

```
<script src="http://upnetwork.ru/javascripts/shops_set_cokkies.js"></script>
```

Данный скрипт позволяет привязать поток к заказу.

#### 2) Создаем обработчик для отправки запроса на создание заказа

Пример данного обработчика можно посмотреть [по этой ссылке](https://github.com/upnetwork/test-php-shop/blob/master/order.php)

> Для работы выше представленного обработчика надо сконфигурировать файл config.php, который будет уникален для каждого магазина. [Правила конфигурации файла config.ru]()


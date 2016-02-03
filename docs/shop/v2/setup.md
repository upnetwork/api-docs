### [Главная страница](https://github.com/upnetwork/api-docs/blob/master/README.md) | [API магазинов](https://github.com/upnetwork/api-docs/blob/master/docs/shop/v2/README.md)

# Подключение магазина к системе

## 1) Подключаем скрипт для обработки параметров

```
<script src="http://upnetwork.ru/javascripts/shops_set_cokkies.js"></script>
```

Данный скрипт позволяет привязать поток к заказу. Он записывание в куки нужную информацию для создание заказа (auth_token, ключ потока и т.д.)

## 2) Создаем обработчик для отправки запроса на создание заказа

Реализацию данного обработчика можно посмотреть [по этой ссылке](https://github.com/upnetwork/test-php-shop/blob/master/order.php)

> Для работы выше представленного обработчика надо сконфигурировать файл config.php, который будет уникален для каждого магазина. [Правила создания файла config.ru](https://github.com/upnetwork/api-docs/blob/master/docs/shop/v2/config.php.md)

## 3) Подключение обработчика к форме заказа

Пример

```
<form action="order.php" method="post">
```

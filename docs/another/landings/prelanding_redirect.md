### [Главная страница](https://github.com/upnetwork/api-docs/blob/master/README.md) | [Настройка лендингов и прелендингов](https://github.com/upnetwork/api-docs/blob/master/docs/another/landings/README.md)

# Настройка редиректа с прелендинга на лендинг

## 1) Подключаем скрипт с утилитой для редиректа

```
<script src="http://upnetwork.ru/javascripts/prelanding_redirect.js"></script>
```
## 2) Добавляем на ссылки, отвечающие за редирект на лендинг, нужный селектор

```
<a href="..." class="to-landing">
<a href="..." id="to-landing">
```

В первом случая селектор будет `.to-landing`, во втором `#to-landing`. 

> В данных ссылках можно оставить значение `href`. Оно будет активно, если в параметрах не пришел урл для редиректа

## 3) Добавляем обработчик для выбранных селекторов.

```
<script type="text/javascript">
  $( document ).ready(function() {
      PrelandingUtil.addEvent("<Выбранный селектор>");
  });
</script>
```

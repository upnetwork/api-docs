### [Главная страница](https://github.com/upnetwork/api-docs/blob/master/README.md) | [API внешних организаций](https://github.com/upnetwork/api-docs/blob/master/docs/organization/v2/external/README.md)

## PATCH(PUT) /api/organizations/v2/external/orders/<id заказа в системе>

#### request
```
{ "order" => {
    "state" => ... новый статус (clarification canceled confirmed processing sent returned paid)
  }
}
```

#### response
```
{ "order" => { "id } }
```

###### order not found

Status code 404

```
{ "error" => "Couldn't find Order with 'id'=..." }
```

###### error on update

Status code 400

```
{'error' => "We're sorry, but something went wrong."}
```

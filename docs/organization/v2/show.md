### [Главная страница](https://github.com/upnetwork/api-docs/blob/master/README.md) | [API организаций](https://github.com/upnetwork/api-docs/blob/master/docs/organization/v2/README.md)

## GET /api/organizations/v2/orders/<id>

#### response

```
{"order" => {
  "id" => order.id,
  "external_id" => order.external_id,
  "note" => order.note,
  "state" => "new",
  "organization_id" => order.organization_id,
  "activities"=> [
    {"action"=> {"previous_state"=>"new", "new_state"=>"canceled"},
    "updated_at"=> "June 19, 2015 15:05"}],
  "calls" => [{
    "description" => order.calls.first.description,
    "status" => order.calls.first.status.text,
    "created_at" => "June 19, 2015 15:05"}]
  }
}
```

###### not found
```
"error" => "Couldn't find Order with 'id'=10"
```

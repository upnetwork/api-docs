### [Главная страница](https://github.com/upnetwork/api-docs/blob/master/README.md) [API организаций](https://github.com/upnetwork/api-docs/blob/master/docs/organization/v2/README.md)

## POST /api/organizations/v2/orders

#### request
```
{ "order" => {
  "note" => comment ,
   "id" => external_id,
   "contact_information" => {
      "name" => ..., 
      "address" => ..., 
      "zip_code" => ..., 
      "phone_number" => ..., 
      "country_code" => ... },
   "cart"=>{
      "items"=> [
        {"count" => ..., "currency" => ..., "price" => ..., "name" => .. }, 
        {"count" => ..., "currency" => ..., "price" => ..., "name" => .. }
      ]},
   "session_information" => {
     "ip" => ... ,
     "time_on_page" => ... in seconds
   }
  }
}
```

#### response
```
"api_request" => {
   "state"=> "created" or "error", 
   "order_errors" => ..., 
   "order_id" => ...,
   "external_id" => ...
 }
```

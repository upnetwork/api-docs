### [Главная страница](https://github.com/upnetwork/api-docs/blob/master/README.md) | [API магазинов](https://github.com/upnetwork/api-docs/blob/master/docs/shop/v2/README.md)

## POST /api/shops/v2/orders

#### request
```
{ "order" => {
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
     "time_token" => $_COOKIE['auth_token']
   },
   "referal" => {
      "stream_key" => $_COOKIE['stream_key']
   },
   "params_string" => $_COOKIE['params_string']
  }
}
```

#### response
```
"api_request" => {
   "state"=> "created" or "error", 
   "order_errors" => ..., 
   "order_id" => ...
 }
```

<?php
class UpnApi {
  private $authToken = '';
  private $api_url = 'https://hotnetwork.org/api/v1/';

  function __construct($authToken) {
    $this->authToken = $authToken;
  }

  function createOrder($params) {
    $resp = $this->makePost('orders', $this->wrapEntity($params, 'order'));
  }

  private

    function makePost($action, $params) {
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $this->api_url.$action,
        CURLOPT_USERAGENT => 'UpnApi v0.1',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $this->jsonData($params),
        CURLOPT_HTTPHEADER => array(
          'Content-Type: application/json',
          'Content-Length: '.strlen($this->jsonData($params)),
          'Authorization: Token token='.$this->authToken
        )
      ));

      $resp = curl_exec($curl);
      curl_close($curl);
      return $resp;
    }

    function wrapEntity($entity, $root) {
      return array($root => $entity);
    }

    // TODO: Cache this
    function jsonData($data) {
      return json_encode($data);
    }
}

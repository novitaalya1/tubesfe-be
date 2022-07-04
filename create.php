<?php
$data_array =  array(
        "customer"        => $user['User']['customer_id'],
        "payment"         => array(
        "number"         => $this->request->data['account'],
        "routing"        => $this->request->data['routing'],
        "method"         => $this->request->data['method']
      ),
);
$make_call = callAPI('POST', 'https://y9d9l5wr.directus.app/items/biodata', json_encode($data_array));
$response = json_decode($make_call, true);
$errors   = $response['response']['errors'];
$data     = $response['response']['data'][0];

?>
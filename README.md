# SwaggerClient-php
No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1
- Build date: 2017-01-25T03:49:06.982Z
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrdersApi();
$from_date = new \DateTime(); // \DateTime | 
$to_date = new \DateTime(); // \DateTime | 
$status = 56; // int | 
$product_id = 56; // int | 
$order_id = 56; // int | 
$affiliate_id = "affiliate_id_example"; // string | 
$customer_id = 56; // int | 
$shipped = true; // bool | 
$address = "address_example"; // string | 
$address2 = "address2_example"; // string | 
$first_name = "first_name_example"; // string | 
$last_name = "last_name_example"; // string | 
$sub_id = "sub_id_example"; // string | 
$email = "email_example"; // string | 
$city = "city_example"; // string | 
$zip = "zip_example"; // string | 
$phone = "phone_example"; // string | 
$state = "state_example"; // string | 
$country = "country_example"; // string | 
$transaction_id = "transaction_id_example"; // string | 
$rma = "rma_example"; // string | 
$ip = "ip_example"; // string | 
$depth = 56; // int | 
$order_view = true; // bool | 

try {
    $result = $api_instance->ordersFind($from_date, $to_date, $status, $product_id, $order_id, $affiliate_id, $customer_id, $shipped, $address, $address2, $first_name, $last_name, $sub_id, $email, $city, $zip, $phone, $state, $country, $transaction_id, $rma, $ip, $depth, $order_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersFind: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost:5001*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrdersApi* | [**ordersFind**](docs/Api/OrdersApi.md#ordersfind) | **GET** /api/orders/find | 
*OrdersApi* | [**ordersGet**](docs/Api/OrdersApi.md#ordersget) | **GET** /api/orders/{id} | 
*OrdersApi* | [**ordersPost**](docs/Api/OrdersApi.md#orderspost) | **POST** /api/orders | 
*OrdersApi* | [**ordersProcess**](docs/Api/OrdersApi.md#ordersprocess) | **POST** /api/orders/process/{id} | 
*OrdersApi* | [**ordersRebill**](docs/Api/OrdersApi.md#ordersrebill) | **GET** /api/orders/rebill/{id} | 
*OrdersApi* | [**ordersUpsell**](docs/Api/OrdersApi.md#ordersupsell) | **POST** /api/orders/upsell/{id} | 
*PartialsApi* | [**partialsGet**](docs/Api/PartialsApi.md#partialsget) | **GET** /api/partials/{id} | 
*PartialsApi* | [**partialsOrder**](docs/Api/PartialsApi.md#partialsorder) | **POST** /api/partials/order/{id} | 
*PartialsApi* | [**partialsPost**](docs/Api/PartialsApi.md#partialspost) | **POST** /api/partials | 


## Documentation For Models

 - [OrderCreateModel](docs/Model/OrderCreateModel.md)
 - [OrderProduct](docs/Model/OrderProduct.md)
 - [PartialCreateModel](docs/Model/PartialCreateModel.md)
 - [PartialToOrderModel](docs/Model/PartialToOrderModel.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




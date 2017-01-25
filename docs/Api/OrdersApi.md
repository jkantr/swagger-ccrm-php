# Swagger\Client\OrdersApi

All URIs are relative to *http://localhost:5001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersFind**](OrdersApi.md#ordersFind) | **GET** /api/orders/find | 
[**ordersGet**](OrdersApi.md#ordersGet) | **GET** /api/orders/{id} | 
[**ordersPost**](OrdersApi.md#ordersPost) | **POST** /api/orders | 
[**ordersProcess**](OrdersApi.md#ordersProcess) | **POST** /api/orders/process/{id} | 
[**ordersRebill**](OrdersApi.md#ordersRebill) | **GET** /api/orders/rebill/{id} | 
[**ordersUpsell**](OrdersApi.md#ordersUpsell) | **POST** /api/orders/upsell/{id} | 


# **ordersFind**
> object ordersFind($from_date, $to_date, $status, $product_id, $order_id, $affiliate_id, $customer_id, $shipped, $address, $address2, $first_name, $last_name, $sub_id, $email, $city, $zip, $phone, $state, $country, $transaction_id, $rma, $ip, $depth, $order_view)



### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **to_date** | **\DateTime**|  |
 **status** | **int**|  | [optional]
 **product_id** | **int**|  | [optional]
 **order_id** | **int**|  | [optional]
 **affiliate_id** | **string**|  | [optional]
 **customer_id** | **int**|  | [optional]
 **shipped** | **bool**|  | [optional]
 **address** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **first_name** | **string**|  | [optional]
 **last_name** | **string**|  | [optional]
 **sub_id** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **zip** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **state** | **string**|  | [optional]
 **country** | **string**|  | [optional]
 **transaction_id** | **string**|  | [optional]
 **rma** | **string**|  | [optional]
 **ip** | **string**|  | [optional]
 **depth** | **int**|  | [optional]
 **order_view** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersGet**
> object ordersGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrdersApi();
$id = 56; // int | 

try {
    $result = $api_instance->ordersGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersPost**
> object ordersPost($order)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrdersApi();
$order = new \Swagger\Client\Model\OrderCreateModel(); // \Swagger\Client\Model\OrderCreateModel | 

try {
    $result = $api_instance->ordersPost($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\Swagger\Client\Model\OrderCreateModel**](../Model/\Swagger\Client\Model\OrderCreateModel.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersProcess**
> object ordersProcess($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrdersApi();
$id = 56; // int | 

try {
    $result = $api_instance->ordersProcess($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersRebill**
> object ordersRebill($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrdersApi();
$id = 56; // int | 

try {
    $result = $api_instance->ordersRebill($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersRebill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersUpsell**
> object ordersUpsell($id, $upsellproducts)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrdersApi();
$id = 56; // int | 
$upsellproducts = array(new OrderProduct()); // \Swagger\Client\Model\OrderProduct[] | 

try {
    $result = $api_instance->ordersUpsell($id, $upsellproducts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersUpsell: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **upsellproducts** | [**\Swagger\Client\Model\OrderProduct[]**](../Model/OrderProduct.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


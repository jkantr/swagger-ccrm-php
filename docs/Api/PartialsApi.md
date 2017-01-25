# Swagger\Client\PartialsApi

All URIs are relative to *http://localhost:5001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partialsGet**](PartialsApi.md#partialsGet) | **GET** /api/partials/{id} | 
[**partialsOrder**](PartialsApi.md#partialsOrder) | **POST** /api/partials/order/{id} | 
[**partialsPost**](PartialsApi.md#partialsPost) | **POST** /api/partials | 


# **partialsGet**
> object partialsGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PartialsApi();
$id = 56; // int | 

try {
    $result = $api_instance->partialsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartialsApi->partialsGet: ', $e->getMessage(), PHP_EOL;
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

# **partialsOrder**
> object partialsOrder($id, $model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PartialsApi();
$id = 56; // int | 
$model = new \Swagger\Client\Model\PartialToOrderModel(); // \Swagger\Client\Model\PartialToOrderModel | 

try {
    $result = $api_instance->partialsOrder($id, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartialsApi->partialsOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **model** | [**\Swagger\Client\Model\PartialToOrderModel**](../Model/\Swagger\Client\Model\PartialToOrderModel.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partialsPost**
> object partialsPost($partialcreatemodel)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PartialsApi();
$partialcreatemodel = new \Swagger\Client\Model\PartialCreateModel(); // \Swagger\Client\Model\PartialCreateModel | 

try {
    $result = $api_instance->partialsPost($partialcreatemodel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartialsApi->partialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partialcreatemodel** | [**\Swagger\Client\Model\PartialCreateModel**](../Model/\Swagger\Client\Model\PartialCreateModel.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


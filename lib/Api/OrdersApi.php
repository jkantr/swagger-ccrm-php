<?php
/**
 * OrdersApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Continuity CRM
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * OrdersApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrdersApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://localhost:5001');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return OrdersApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation ordersFind
     *
     * 
     *
     * @param \DateTime $from_date  (required)
     * @param \DateTime $to_date  (required)
     * @param int $status  (optional)
     * @param int $product_id  (optional)
     * @param int $order_id  (optional)
     * @param string $affiliate_id  (optional)
     * @param int $customer_id  (optional)
     * @param bool $shipped  (optional)
     * @param string $address  (optional)
     * @param string $address2  (optional)
     * @param string $first_name  (optional)
     * @param string $last_name  (optional)
     * @param string $sub_id  (optional)
     * @param string $email  (optional)
     * @param string $city  (optional)
     * @param string $zip  (optional)
     * @param string $phone  (optional)
     * @param string $state  (optional)
     * @param string $country  (optional)
     * @param string $transaction_id  (optional)
     * @param string $rma  (optional)
     * @param string $ip  (optional)
     * @param int $depth  (optional)
     * @param bool $order_view  (optional)
     * @return object
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function ordersFind($from_date, $to_date, $status = null, $product_id = null, $order_id = null, $affiliate_id = null, $customer_id = null, $shipped = null, $address = null, $address2 = null, $first_name = null, $last_name = null, $sub_id = null, $email = null, $city = null, $zip = null, $phone = null, $state = null, $country = null, $transaction_id = null, $rma = null, $ip = null, $depth = null, $order_view = null)
    {
        list($response) = $this->ordersFindWithHttpInfo($from_date, $to_date, $status, $product_id, $order_id, $affiliate_id, $customer_id, $shipped, $address, $address2, $first_name, $last_name, $sub_id, $email, $city, $zip, $phone, $state, $country, $transaction_id, $rma, $ip, $depth, $order_view);
        return $response;
    }

    /**
     * Operation ordersFindWithHttpInfo
     *
     * 
     *
     * @param \DateTime $from_date  (required)
     * @param \DateTime $to_date  (required)
     * @param int $status  (optional)
     * @param int $product_id  (optional)
     * @param int $order_id  (optional)
     * @param string $affiliate_id  (optional)
     * @param int $customer_id  (optional)
     * @param bool $shipped  (optional)
     * @param string $address  (optional)
     * @param string $address2  (optional)
     * @param string $first_name  (optional)
     * @param string $last_name  (optional)
     * @param string $sub_id  (optional)
     * @param string $email  (optional)
     * @param string $city  (optional)
     * @param string $zip  (optional)
     * @param string $phone  (optional)
     * @param string $state  (optional)
     * @param string $country  (optional)
     * @param string $transaction_id  (optional)
     * @param string $rma  (optional)
     * @param string $ip  (optional)
     * @param int $depth  (optional)
     * @param bool $order_view  (optional)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function ordersFindWithHttpInfo($from_date, $to_date, $status = null, $product_id = null, $order_id = null, $affiliate_id = null, $customer_id = null, $shipped = null, $address = null, $address2 = null, $first_name = null, $last_name = null, $sub_id = null, $email = null, $city = null, $zip = null, $phone = null, $state = null, $country = null, $transaction_id = null, $rma = null, $ip = null, $depth = null, $order_view = null)
    {
        // verify the required parameter 'from_date' is set
        if ($from_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $from_date when calling ordersFind');
        }
        // verify the required parameter 'to_date' is set
        if ($to_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $to_date when calling ordersFind');
        }
        // parse inputs
        $resourcePath = "/api/orders/find";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($from_date !== null) {
            $queryParams['fromDate'] = $this->apiClient->getSerializer()->toQueryValue($from_date);
        }
        // query params
        if ($to_date !== null) {
            $queryParams['toDate'] = $this->apiClient->getSerializer()->toQueryValue($to_date);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if ($product_id !== null) {
            $queryParams['productId'] = $this->apiClient->getSerializer()->toQueryValue($product_id);
        }
        // query params
        if ($order_id !== null) {
            $queryParams['orderId'] = $this->apiClient->getSerializer()->toQueryValue($order_id);
        }
        // query params
        if ($affiliate_id !== null) {
            $queryParams['affiliateId'] = $this->apiClient->getSerializer()->toQueryValue($affiliate_id);
        }
        // query params
        if ($customer_id !== null) {
            $queryParams['customerId'] = $this->apiClient->getSerializer()->toQueryValue($customer_id);
        }
        // query params
        if ($shipped !== null) {
            $queryParams['shipped'] = $this->apiClient->getSerializer()->toQueryValue($shipped);
        }
        // query params
        if ($address !== null) {
            $queryParams['address'] = $this->apiClient->getSerializer()->toQueryValue($address);
        }
        // query params
        if ($address2 !== null) {
            $queryParams['address2'] = $this->apiClient->getSerializer()->toQueryValue($address2);
        }
        // query params
        if ($first_name !== null) {
            $queryParams['firstName'] = $this->apiClient->getSerializer()->toQueryValue($first_name);
        }
        // query params
        if ($last_name !== null) {
            $queryParams['lastName'] = $this->apiClient->getSerializer()->toQueryValue($last_name);
        }
        // query params
        if ($sub_id !== null) {
            $queryParams['subId'] = $this->apiClient->getSerializer()->toQueryValue($sub_id);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        // query params
        if ($city !== null) {
            $queryParams['city'] = $this->apiClient->getSerializer()->toQueryValue($city);
        }
        // query params
        if ($zip !== null) {
            $queryParams['zip'] = $this->apiClient->getSerializer()->toQueryValue($zip);
        }
        // query params
        if ($phone !== null) {
            $queryParams['phone'] = $this->apiClient->getSerializer()->toQueryValue($phone);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = $this->apiClient->getSerializer()->toQueryValue($state);
        }
        // query params
        if ($country !== null) {
            $queryParams['country'] = $this->apiClient->getSerializer()->toQueryValue($country);
        }
        // query params
        if ($transaction_id !== null) {
            $queryParams['transactionId'] = $this->apiClient->getSerializer()->toQueryValue($transaction_id);
        }
        // query params
        if ($rma !== null) {
            $queryParams['rma'] = $this->apiClient->getSerializer()->toQueryValue($rma);
        }
        // query params
        if ($ip !== null) {
            $queryParams['ip'] = $this->apiClient->getSerializer()->toQueryValue($ip);
        }
        // query params
        if ($depth !== null) {
            $queryParams['depth'] = $this->apiClient->getSerializer()->toQueryValue($depth);
        }
        // query params
        if ($order_view !== null) {
            $queryParams['orderView'] = $this->apiClient->getSerializer()->toQueryValue($order_view);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/api/orders/find'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation ordersGet
     *
     * 
     *
     * @param int $id  (required)
     * @return object
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function ordersGet($id)
    {
        list($response) = $this->ordersGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation ordersGetWithHttpInfo
     *
     * 
     *
     * @param int $id  (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function ordersGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling ordersGet');
        }
        // parse inputs
        $resourcePath = "/api/orders/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/api/orders/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation ordersPost
     *
     * 
     *
     * @param \Swagger\Client\Model\OrderCreateModel $order  (required)
     * @return object
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function ordersPost($order)
    {
        list($response) = $this->ordersPostWithHttpInfo($order);
        return $response;
    }

    /**
     * Operation ordersPostWithHttpInfo
     *
     * 
     *
     * @param \Swagger\Client\Model\OrderCreateModel $order  (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function ordersPostWithHttpInfo($order)
    {
        // verify the required parameter 'order' is set
        if ($order === null) {
            throw new \InvalidArgumentException('Missing the required parameter $order when calling ordersPost');
        }
        // parse inputs
        $resourcePath = "/api/orders";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','text/json','application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($order)) {
            $_tempBody = $order;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/api/orders'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation ordersProcess
     *
     * 
     *
     * @param int $id  (required)
     * @return object
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function ordersProcess($id)
    {
        list($response) = $this->ordersProcessWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation ordersProcessWithHttpInfo
     *
     * 
     *
     * @param int $id  (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function ordersProcessWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling ordersProcess');
        }
        // parse inputs
        $resourcePath = "/api/orders/process/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/api/orders/process/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation ordersRebill
     *
     * 
     *
     * @param int $id  (required)
     * @return object
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function ordersRebill($id)
    {
        list($response) = $this->ordersRebillWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation ordersRebillWithHttpInfo
     *
     * 
     *
     * @param int $id  (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function ordersRebillWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling ordersRebill');
        }
        // parse inputs
        $resourcePath = "/api/orders/rebill/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/api/orders/rebill/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation ordersUpsell
     *
     * 
     *
     * @param int $id  (required)
     * @param \Swagger\Client\Model\OrderProduct[] $upsellproducts  (required)
     * @return object
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function ordersUpsell($id, $upsellproducts)
    {
        list($response) = $this->ordersUpsellWithHttpInfo($id, $upsellproducts);
        return $response;
    }

    /**
     * Operation ordersUpsellWithHttpInfo
     *
     * 
     *
     * @param int $id  (required)
     * @param \Swagger\Client\Model\OrderProduct[] $upsellproducts  (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function ordersUpsellWithHttpInfo($id, $upsellproducts)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling ordersUpsell');
        }
        // verify the required parameter 'upsellproducts' is set
        if ($upsellproducts === null) {
            throw new \InvalidArgumentException('Missing the required parameter $upsellproducts when calling ordersUpsell');
        }
        // parse inputs
        $resourcePath = "/api/orders/upsell/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','text/json','application/x-www-form-urlencoded'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($upsellproducts)) {
            $_tempBody = $upsellproducts;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/api/orders/upsell/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
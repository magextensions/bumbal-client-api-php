<?php
/**
 * RouteApi
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client Api
 *
 * Bumbal API documentation
 *
 * OpenAPI spec version: 2.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\API;

use \BumbalClient\ApiClient;
use \BumbalClient\ApiException;
use \BumbalClient\Configuration;
use \BumbalClient\ObjectSerializer;

/**
 * RouteApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RouteApi
{
    /**
     * API Client
     *
     * @var \BumbalClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BumbalClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BumbalClient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BumbalClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BumbalClient\ApiClient $apiClient set the API client
     *
     * @return RouteApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createRoute
     *
     * Add a new Route
     *
     * @param \BumbalClient\Model\RouteModel $body Route object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function createRoute($body = null)
    {
        list($response) = $this->createRouteWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createRouteWithHttpInfo
     *
     * Add a new Route
     *
     * @param \BumbalClient\Model\RouteModel $body Route object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRouteWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/route";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/route'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteRoute
     *
     * Delete an Route
     *
     * @param int $route_id ID of route to update (required)
     * @param bool $cancel_activities Cancel activities on Route (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function deleteRoute($route_id, $cancel_activities)
    {
        list($response) = $this->deleteRouteWithHttpInfo($route_id, $cancel_activities);
        return $response;
    }

    /**
     * Operation deleteRouteWithHttpInfo
     *
     * Delete an Route
     *
     * @param int $route_id ID of route to update (required)
     * @param bool $cancel_activities Cancel activities on Route (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteRouteWithHttpInfo($route_id, $cancel_activities)
    {
        // verify the required parameter 'route_id' is set
        if ($route_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $route_id when calling deleteRoute');
        }
        // verify the required parameter 'cancel_activities' is set
        if ($cancel_activities === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cancel_activities when calling deleteRoute');
        }
        // parse inputs
        $resourcePath = "/route/{routeId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($cancel_activities !== null) {
            $queryParams['cancel_activities'] = $this->apiClient->getSerializer()->toQueryValue($cancel_activities);
        }
        // path params
        if ($route_id !== null) {
            $resourcePath = str_replace(
                "{" . "routeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($route_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/route/{routeId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getExecutableActivities
     *
     * Returns all activities in this route which hav enot been executed yet.
     *
     * @param \BumbalClient\Model\GetExecutableActivitiesArguments $arguments Request Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function getExecutableActivities($arguments)
    {
        list($response) = $this->getExecutableActivitiesWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation getExecutableActivitiesWithHttpInfo
     *
     * Returns all activities in this route which hav enot been executed yet.
     *
     * @param \BumbalClient\Model\GetExecutableActivitiesArguments $arguments Request Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getExecutableActivitiesWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling getExecutableActivities');
        }
        // parse inputs
        $resourcePath = "/route/get-executable-activities";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($arguments)) {
            $_tempBody = $arguments;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/route/get-executable-activities'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListRoute
     *
     * Retrieve List of Routes
     *
     * @param \BumbalClient\Model\RouteRetrieveListArguments $arguments Route RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\RouteListResponse
     */
    public function retrieveListRoute($arguments)
    {
        list($response) = $this->retrieveListRouteWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListRouteWithHttpInfo
     *
     * Retrieve List of Routes
     *
     * @param \BumbalClient\Model\RouteRetrieveListArguments $arguments Route RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\RouteListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListRouteWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListRoute');
        }
        // parse inputs
        $resourcePath = "/route";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($arguments)) {
            $_tempBody = $arguments;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\RouteListResponse',
                '/route'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\RouteListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\RouteListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveRoute
     *
     * Retrieve a Route
     *
     * @param int $route_id ID of route to retrieve (required)
     * @param bool $include_address_object Include Address Objects (required)
     * @param bool $include_route_status Include Status Name (required)
     * @param bool $include_route_tags Include Tags (required)
     * @param bool $include_driver_info Include Driver info (required)
     * @param bool $include_equipment_info_car Include Equipment info car (required)
     * @param bool $include_gps_locations Include GPS locations (required)
     * @param bool $include_activity_ids Include Activity IDs (required)
     * @param bool $include_latest_position Include Latest Known GPS location (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\RouteModel
     */
    public function retrieveRoute($route_id, $include_address_object, $include_route_status, $include_route_tags, $include_driver_info, $include_equipment_info_car, $include_gps_locations, $include_activity_ids, $include_latest_position)
    {
        list($response) = $this->retrieveRouteWithHttpInfo($route_id, $include_address_object, $include_route_status, $include_route_tags, $include_driver_info, $include_equipment_info_car, $include_gps_locations, $include_activity_ids, $include_latest_position);
        return $response;
    }

    /**
     * Operation retrieveRouteWithHttpInfo
     *
     * Retrieve a Route
     *
     * @param int $route_id ID of route to retrieve (required)
     * @param bool $include_address_object Include Address Objects (required)
     * @param bool $include_route_status Include Status Name (required)
     * @param bool $include_route_tags Include Tags (required)
     * @param bool $include_driver_info Include Driver info (required)
     * @param bool $include_equipment_info_car Include Equipment info car (required)
     * @param bool $include_gps_locations Include GPS locations (required)
     * @param bool $include_activity_ids Include Activity IDs (required)
     * @param bool $include_latest_position Include Latest Known GPS location (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\RouteModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveRouteWithHttpInfo($route_id, $include_address_object, $include_route_status, $include_route_tags, $include_driver_info, $include_equipment_info_car, $include_gps_locations, $include_activity_ids, $include_latest_position)
    {
        // verify the required parameter 'route_id' is set
        if ($route_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $route_id when calling retrieveRoute');
        }
        // verify the required parameter 'include_address_object' is set
        if ($include_address_object === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_address_object when calling retrieveRoute');
        }
        // verify the required parameter 'include_route_status' is set
        if ($include_route_status === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_route_status when calling retrieveRoute');
        }
        // verify the required parameter 'include_route_tags' is set
        if ($include_route_tags === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_route_tags when calling retrieveRoute');
        }
        // verify the required parameter 'include_driver_info' is set
        if ($include_driver_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_driver_info when calling retrieveRoute');
        }
        // verify the required parameter 'include_equipment_info_car' is set
        if ($include_equipment_info_car === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_equipment_info_car when calling retrieveRoute');
        }
        // verify the required parameter 'include_gps_locations' is set
        if ($include_gps_locations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_gps_locations when calling retrieveRoute');
        }
        // verify the required parameter 'include_activity_ids' is set
        if ($include_activity_ids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_activity_ids when calling retrieveRoute');
        }
        // verify the required parameter 'include_latest_position' is set
        if ($include_latest_position === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_latest_position when calling retrieveRoute');
        }
        // parse inputs
        $resourcePath = "/route/{routeId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($include_address_object !== null) {
            $queryParams['include_address_object'] = $this->apiClient->getSerializer()->toQueryValue($include_address_object);
        }
        // query params
        if ($include_route_status !== null) {
            $queryParams['include_route_status'] = $this->apiClient->getSerializer()->toQueryValue($include_route_status);
        }
        // query params
        if ($include_route_tags !== null) {
            $queryParams['include_route_tags'] = $this->apiClient->getSerializer()->toQueryValue($include_route_tags);
        }
        // query params
        if ($include_driver_info !== null) {
            $queryParams['include_driver_info'] = $this->apiClient->getSerializer()->toQueryValue($include_driver_info);
        }
        // query params
        if ($include_equipment_info_car !== null) {
            $queryParams['include_equipment_info_car'] = $this->apiClient->getSerializer()->toQueryValue($include_equipment_info_car);
        }
        // query params
        if ($include_gps_locations !== null) {
            $queryParams['include_gps_locations'] = $this->apiClient->getSerializer()->toQueryValue($include_gps_locations);
        }
        // query params
        if ($include_activity_ids !== null) {
            $queryParams['include_activity_ids'] = $this->apiClient->getSerializer()->toQueryValue($include_activity_ids);
        }
        // query params
        if ($include_latest_position !== null) {
            $queryParams['include_latest_position'] = $this->apiClient->getSerializer()->toQueryValue($include_latest_position);
        }
        // path params
        if ($route_id !== null) {
            $resourcePath = str_replace(
                "{" . "routeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($route_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\RouteModel',
                '/route/{routeId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\RouteModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\RouteModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation routeStoreGeoLocations
     *
     * Store tracked Geo Locations in bulk
     *
     * @param \BumbalClient\Model\RouteStoreGeoLocations $arguments Request Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function routeStoreGeoLocations($arguments)
    {
        list($response) = $this->routeStoreGeoLocationsWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation routeStoreGeoLocationsWithHttpInfo
     *
     * Store tracked Geo Locations in bulk
     *
     * @param \BumbalClient\Model\RouteStoreGeoLocations $arguments Request Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function routeStoreGeoLocationsWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling routeStoreGeoLocations');
        }
        // parse inputs
        $resourcePath = "/route/store-geo-locations";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($arguments)) {
            $_tempBody = $arguments;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/route/store-geo-locations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setRoute
     *
     * Set (create or update) an Route
     *
     * @param \BumbalClient\Model\RouteModel $body Route object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function setRoute($body = null)
    {
        list($response) = $this->setRouteWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setRouteWithHttpInfo
     *
     * Set (create or update) an Route
     *
     * @param \BumbalClient\Model\RouteModel $body Route object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setRouteWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/route/set";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/route/set'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateRoute
     *
     * Update a Route
     *
     * @param int $route_id ID of route to update (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function updateRoute($route_id)
    {
        list($response) = $this->updateRouteWithHttpInfo($route_id);
        return $response;
    }

    /**
     * Operation updateRouteWithHttpInfo
     *
     * Update a Route
     *
     * @param int $route_id ID of route to update (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateRouteWithHttpInfo($route_id)
    {
        // verify the required parameter 'route_id' is set
        if ($route_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $route_id when calling updateRoute');
        }
        // parse inputs
        $resourcePath = "/route/{routeId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($route_id !== null) {
            $resourcePath = str_replace(
                "{" . "routeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($route_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/route/{routeId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}

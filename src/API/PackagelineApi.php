<?php
/**
 * PackagelineApi
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
 * PackagelineApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackagelineApi
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
     * @return PackagelineApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createPackageLine
     *
     * Create or update an Package Line
     *
     * @param \BumbalClient\Model\PackageLineModel $body PackageLine model (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function createPackageLine($body = null)
    {
        list($response) = $this->createPackageLineWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createPackageLineWithHttpInfo
     *
     * Create or update an Package Line
     *
     * @param \BumbalClient\Model\PackageLineModel $body PackageLine model (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPackageLineWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/package-line";
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
                '/package-line'
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
     * Operation deletePackageLine
     *
     * Delete an package-line
     *
     * @param int $package_line_id ID of the package-line to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function deletePackageLine($package_line_id)
    {
        list($response) = $this->deletePackageLineWithHttpInfo($package_line_id);
        return $response;
    }

    /**
     * Operation deletePackageLineWithHttpInfo
     *
     * Delete an package-line
     *
     * @param int $package_line_id ID of the package-line to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePackageLineWithHttpInfo($package_line_id)
    {
        // verify the required parameter 'package_line_id' is set
        if ($package_line_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $package_line_id when calling deletePackageLine');
        }
        // parse inputs
        $resourcePath = "/package-line/{packageLineId}";
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
        if ($package_line_id !== null) {
            $resourcePath = str_replace(
                "{" . "packageLineId" . "}",
                $this->apiClient->getSerializer()->toPathValue($package_line_id),
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
                '/package-line/{packageLineId}'
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
     * Operation retrieveListPackageLine
     *
     * Retrieve List of PackageLines
     *
     * @param \BumbalClient\Model\PackageLineRetrieveListArguments $arguments PackageLine RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\PackageLineListResponse
     */
    public function retrieveListPackageLine($arguments)
    {
        list($response) = $this->retrieveListPackageLineWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListPackageLineWithHttpInfo
     *
     * Retrieve List of PackageLines
     *
     * @param \BumbalClient\Model\PackageLineRetrieveListArguments $arguments PackageLine RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\PackageLineListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListPackageLineWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListPackageLine');
        }
        // parse inputs
        $resourcePath = "/package-line";
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
                '\BumbalClient\Model\PackageLineListResponse',
                '/package-line'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\PackageLineListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\PackageLineListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrievePackageLine
     *
     * Find package-line by ID
     *
     * @param int $package_line_id ID of package-line to return (required)
     * @param bool $include_package_line_status Show the text value of the status (required)
     * @param bool $include_package_line_type_name Show the text value of the package-line type (required)
     * @param bool $include_package_line_meta_data Include meta data connected to this PackageLine (required)
     * @param bool $include_address_object Include address data (required)
     * @param bool $include_time_slots Include TimeSlots (required)
     * @param bool $include_time_slot_tags Include tags from TimeSlots (required)
     * @param bool $include_route_info Include route data (required)
     * @param bool $include_driver_info Include driver data (required)
     * @param bool $include_communication Include Communication Settings (required)
     * @param bool $include_package_line_links Include Link Data (required)
     * @param bool $include_package_lines_info Include PackageLines (required)
     * @param bool $include_package_line_files Include files (required)
     * @param bool $include_package_line_files_meta_data Include files meta data (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\PackageLineModel
     */
    public function retrievePackageLine($package_line_id, $include_package_line_status, $include_package_line_type_name, $include_package_line_meta_data, $include_address_object, $include_time_slots, $include_time_slot_tags, $include_route_info, $include_driver_info, $include_communication, $include_package_line_links, $include_package_lines_info, $include_package_line_files, $include_package_line_files_meta_data)
    {
        list($response) = $this->retrievePackageLineWithHttpInfo($package_line_id, $include_package_line_status, $include_package_line_type_name, $include_package_line_meta_data, $include_address_object, $include_time_slots, $include_time_slot_tags, $include_route_info, $include_driver_info, $include_communication, $include_package_line_links, $include_package_lines_info, $include_package_line_files, $include_package_line_files_meta_data);
        return $response;
    }

    /**
     * Operation retrievePackageLineWithHttpInfo
     *
     * Find package-line by ID
     *
     * @param int $package_line_id ID of package-line to return (required)
     * @param bool $include_package_line_status Show the text value of the status (required)
     * @param bool $include_package_line_type_name Show the text value of the package-line type (required)
     * @param bool $include_package_line_meta_data Include meta data connected to this PackageLine (required)
     * @param bool $include_address_object Include address data (required)
     * @param bool $include_time_slots Include TimeSlots (required)
     * @param bool $include_time_slot_tags Include tags from TimeSlots (required)
     * @param bool $include_route_info Include route data (required)
     * @param bool $include_driver_info Include driver data (required)
     * @param bool $include_communication Include Communication Settings (required)
     * @param bool $include_package_line_links Include Link Data (required)
     * @param bool $include_package_lines_info Include PackageLines (required)
     * @param bool $include_package_line_files Include files (required)
     * @param bool $include_package_line_files_meta_data Include files meta data (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\PackageLineModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrievePackageLineWithHttpInfo($package_line_id, $include_package_line_status, $include_package_line_type_name, $include_package_line_meta_data, $include_address_object, $include_time_slots, $include_time_slot_tags, $include_route_info, $include_driver_info, $include_communication, $include_package_line_links, $include_package_lines_info, $include_package_line_files, $include_package_line_files_meta_data)
    {
        // verify the required parameter 'package_line_id' is set
        if ($package_line_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $package_line_id when calling retrievePackageLine');
        }
        // verify the required parameter 'include_package_line_status' is set
        if ($include_package_line_status === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_package_line_status when calling retrievePackageLine');
        }
        // verify the required parameter 'include_package_line_type_name' is set
        if ($include_package_line_type_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_package_line_type_name when calling retrievePackageLine');
        }
        // verify the required parameter 'include_package_line_meta_data' is set
        if ($include_package_line_meta_data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_package_line_meta_data when calling retrievePackageLine');
        }
        // verify the required parameter 'include_address_object' is set
        if ($include_address_object === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_address_object when calling retrievePackageLine');
        }
        // verify the required parameter 'include_time_slots' is set
        if ($include_time_slots === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_time_slots when calling retrievePackageLine');
        }
        // verify the required parameter 'include_time_slot_tags' is set
        if ($include_time_slot_tags === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_time_slot_tags when calling retrievePackageLine');
        }
        // verify the required parameter 'include_route_info' is set
        if ($include_route_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_route_info when calling retrievePackageLine');
        }
        // verify the required parameter 'include_driver_info' is set
        if ($include_driver_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_driver_info when calling retrievePackageLine');
        }
        // verify the required parameter 'include_communication' is set
        if ($include_communication === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_communication when calling retrievePackageLine');
        }
        // verify the required parameter 'include_package_line_links' is set
        if ($include_package_line_links === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_package_line_links when calling retrievePackageLine');
        }
        // verify the required parameter 'include_package_lines_info' is set
        if ($include_package_lines_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_package_lines_info when calling retrievePackageLine');
        }
        // verify the required parameter 'include_package_line_files' is set
        if ($include_package_line_files === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_package_line_files when calling retrievePackageLine');
        }
        // verify the required parameter 'include_package_line_files_meta_data' is set
        if ($include_package_line_files_meta_data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_package_line_files_meta_data when calling retrievePackageLine');
        }
        // parse inputs
        $resourcePath = "/package-line/{packageLineId}";
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
        if ($include_package_line_status !== null) {
            $queryParams['include_package_line_status'] = $this->apiClient->getSerializer()->toQueryValue($include_package_line_status);
        }
        // query params
        if ($include_package_line_type_name !== null) {
            $queryParams['include_package_line_type_name'] = $this->apiClient->getSerializer()->toQueryValue($include_package_line_type_name);
        }
        // query params
        if ($include_package_line_meta_data !== null) {
            $queryParams['include_package_line_meta_data'] = $this->apiClient->getSerializer()->toQueryValue($include_package_line_meta_data);
        }
        // query params
        if ($include_address_object !== null) {
            $queryParams['include_address_object'] = $this->apiClient->getSerializer()->toQueryValue($include_address_object);
        }
        // query params
        if ($include_time_slots !== null) {
            $queryParams['include_time_slots'] = $this->apiClient->getSerializer()->toQueryValue($include_time_slots);
        }
        // query params
        if ($include_time_slot_tags !== null) {
            $queryParams['include_time_slot_tags'] = $this->apiClient->getSerializer()->toQueryValue($include_time_slot_tags);
        }
        // query params
        if ($include_route_info !== null) {
            $queryParams['include_route_info'] = $this->apiClient->getSerializer()->toQueryValue($include_route_info);
        }
        // query params
        if ($include_driver_info !== null) {
            $queryParams['include_driver_info'] = $this->apiClient->getSerializer()->toQueryValue($include_driver_info);
        }
        // query params
        if ($include_communication !== null) {
            $queryParams['include_communication'] = $this->apiClient->getSerializer()->toQueryValue($include_communication);
        }
        // query params
        if ($include_package_line_links !== null) {
            $queryParams['include_package_line_links'] = $this->apiClient->getSerializer()->toQueryValue($include_package_line_links);
        }
        // query params
        if ($include_package_lines_info !== null) {
            $queryParams['include_package_lines_info'] = $this->apiClient->getSerializer()->toQueryValue($include_package_lines_info);
        }
        // query params
        if ($include_package_line_files !== null) {
            $queryParams['include_package_line_files'] = $this->apiClient->getSerializer()->toQueryValue($include_package_line_files);
        }
        // query params
        if ($include_package_line_files_meta_data !== null) {
            $queryParams['include_package_line_files_meta_data'] = $this->apiClient->getSerializer()->toQueryValue($include_package_line_files_meta_data);
        }
        // path params
        if ($package_line_id !== null) {
            $resourcePath = str_replace(
                "{" . "packageLineId" . "}",
                $this->apiClient->getSerializer()->toPathValue($package_line_id),
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
                '\BumbalClient\Model\PackageLineModel',
                '/package-line/{packageLineId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\PackageLineModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\PackageLineModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setPackageLine
     *
     * Set (create or update) an PackageLine
     *
     * @param \BumbalClient\Model\PackageLineModel $body PackageLine model (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function setPackageLine($body = null)
    {
        list($response) = $this->setPackageLineWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setPackageLineWithHttpInfo
     *
     * Set (create or update) an PackageLine
     *
     * @param \BumbalClient\Model\PackageLineModel $body PackageLine model (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setPackageLineWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/package-line/set";
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
                '/package-line/set'
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
     * Operation updatePackageLine
     *
     * Update package-lines in bulk
     *
     * @param \BumbalClient\Model\PackageLineUpdateArguments $body PackageLine Update object that contains all information about this update (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function updatePackageLine($body = null)
    {
        list($response) = $this->updatePackageLineWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation updatePackageLineWithHttpInfo
     *
     * Update package-lines in bulk
     *
     * @param \BumbalClient\Model\PackageLineUpdateArguments $body PackageLine Update object that contains all information about this update (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePackageLineWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/package-line/update";
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/package-line/update'
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
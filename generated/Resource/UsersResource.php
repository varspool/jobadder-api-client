<?php

namespace Varspool\JobAdder\V2\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;

class UsersResource extends Resource
{
    /**
     * @param array $parameters {
     *
     *     @var int $offset The index of the first entry to return from the resource collection
     *     @var int $limit The maximum number of entries to return. <br />
     *     @var array $userId
     *     @var array $groupId
     *     @var array $include
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\UserListRepresentation
     */
    public function findUsers($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('offset', null);
        $queryParam->setDefault('limit', null);
        $queryParam->setDefault('userId', null);
        $queryParam->setDefault('groupId', null);
        $queryParam->setDefault('include', null);
        $url     = '/v2/users';
        $url     = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\UserListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $userId
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\UserRepresentation
     */
    public function getUser($userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/users/{userId}';
        $url        = str_replace('{userId}', urlencode($userId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\UserRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $userId     User Id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\UserGroupListRepresentation
     */
    public function getUserGroups($userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/users/{userId}/usergroups';
        $url        = str_replace('{userId}', urlencode($userId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\UserGroupListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\UserRepresentation
     */
    public function getCurrentUser($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/users/current';
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\UserRepresentation', 'json');
            }
        }

        return $response;
    }
}

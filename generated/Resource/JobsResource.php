<?php

namespace Varspool\JobAdder\V2\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;

class JobsResource extends Resource
{
    /**
     * @param array $parameters {
     *
     *     @var int $offset The index of the first entry to return from the resource collection
     *     @var int $limit The maximum number of entries to return. <br />
     *     @var array $jobId Job Id
     *     @var array $companyId Company Id
     *     @var array $contactId Contact Id
     *     @var bool $active Search for active/open jobs
     *     @var array $userId User Id - search for jobs by owner or associated recruiter
     *     @var array $ownerUserId User Id - search for jobs by owner
     *     @var array $recruiterUserId User Id - search jobs by associated recruiters
     *     @var array $createdBy User Id - search for jobs created by the specified user(s)
     *     @var array $createdAt Search for jobs created at a specific date and time
     *     @var array $updatedBy User Id - search for jobs last updated by the specified user(s)
     *     @var array $updatedAt Search for jobs updated at a specific date and time
     * }
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\JobOrderListRepresentation
     */
    public function findJobOrders($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('offset', null);
        $queryParam->setDefault('limit', null);
        $queryParam->setDefault('jobId', null);
        $queryParam->setDefault('companyId', null);
        $queryParam->setDefault('contactId', null);
        $queryParam->setDefault('active', null);
        $queryParam->setDefault('userId', null);
        $queryParam->setDefault('ownerUserId', null);
        $queryParam->setDefault('recruiterUserId', null);
        $queryParam->setDefault('createdBy', null);
        $queryParam->setDefault('createdAt', null);
        $queryParam->setDefault('updatedBy', null);
        $queryParam->setDefault('updatedAt', null);
        $url     = '/v2/jobs';
        $url     = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\JobOrderListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $jobId      Job Id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\JobOrderRepresentation
     */
    public function getJobOrder($jobId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/jobs/{jobId}';
        $url        = str_replace('{jobId}', urlencode($jobId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\JobOrderRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $jobId      Job Id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation
     */
    public function getJobOrderJobApplications($jobId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/jobs/{jobId}/applications';
        $url        = str_replace('{jobId}', urlencode($jobId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\JobApplicationListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $jobId      Job Id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation
     */
    public function getJobOrderActiveJobApplications($jobId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/jobs/{jobId}/applications/active';
        $url        = str_replace('{jobId}', urlencode($jobId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\JobApplicationListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $jobId      Job Id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\NoteListRepresentation
     */
    public function getJobOrderNotes($jobId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/jobs/{jobId}/notes';
        $url        = str_replace('{jobId}', urlencode($jobId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\NoteListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $jobId      Job Id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\PlacementListRepresentation
     */
    public function getJobOrderPlacements($jobId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/jobs/{jobId}/placements';
        $url        = str_replace('{jobId}', urlencode($jobId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\PlacementListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $jobId      Job Id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\PlacementListRepresentation
     */
    public function getJobOrderApprovedPlacements($jobId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/jobs/{jobId}/placements/approved';
        $url        = str_replace('{jobId}', urlencode($jobId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\PlacementListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $jobId      Job Id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\SubmissionListRepresentation
     */
    public function getJobOrderSubmissions($jobId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/jobs/{jobId}/submissions';
        $url        = str_replace('{jobId}', urlencode($jobId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\SubmissionListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\CustomFieldListRepresentation
     */
    public function getJobOrderCustomFieldList($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/jobs/fields/custom';
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\CustomFieldListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $fieldId
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation
     */
    public function getJobOrderCustomFieldItem($fieldId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/jobs/fields/custom/{fieldId}';
        $url        = str_replace('{fieldId}', urlencode($fieldId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\CustomFieldRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param array $parameters {
     *
     *     @var string $name
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\NoteTypeListRepresentation
     */
    public function getJobOrderNoteTypeList($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('name', null);
        $url     = '/v2/jobs/lists/notetype';
        $url     = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\NoteTypeListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param array $parameters {
     *
     *     @var string $name
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\JobOrderSourceListRepresentation
     */
    public function getJobOrderSourceList($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('name', null);
        $url     = '/v2/jobs/lists/source';
        $url     = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\JobOrderSourceListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param array $parameters {
     *
     *     @var array $statusId
     *     @var string $name
     *     @var bool $active
     *     @var bool $default
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\StatusListRepresentation
     */
    public function getJobOrderStatusList($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('statusId', null);
        $queryParam->setDefault('name', null);
        $queryParam->setDefault('active', null);
        $queryParam->setDefault('default', null);
        $url     = '/v2/jobs/lists/status';
        $url     = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\StatusListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $statusId
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\StatusRepresentation
     */
    public function getJobOrderStatusItem($statusId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/jobs/lists/status/{statusId}';
        $url        = str_replace('{statusId}', urlencode($statusId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'localapi.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\StatusRepresentation', 'json');
            }
            if ('404' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\StatusRepresentation', 'json');
            }
        }

        return $response;
    }
}

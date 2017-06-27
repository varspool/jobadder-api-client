<?php

namespace Varspool\JobAdder\V2\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;

class NotesResource extends Resource
{
    /**
     * @param array $parameters {
     *
     *     @var int $offset The index of the first entry to return from the resource collection
     *     @var int $limit The maximum number of entries to return. <br />
     *     @var array $noteId Note Id
     *     @var array $type Note type
     *     @var array $createdAt Search for notes created at a specific date and time
     *     @var array $candidateId Candidate Id
     *     @var array $companyId Company Id
     *     @var array $contactId Contact Id
     *     @var array $jobId Job Id
     *     @var array $requisitionId Requisition Id
     *     @var array $applicationId Job Application Id
     *     @var array $placementId Placement Id
     *     @var array $submissionId Submission Id
     *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
     Fields available for sorting are: type, createdAt
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\NoteListRepresentation
     */
    public function findNotes($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('offset', null);
        $queryParam->setDefault('limit', null);
        $queryParam->setDefault('noteId', null);
        $queryParam->setDefault('type', null);
        $queryParam->setDefault('createdAt', null);
        $queryParam->setDefault('candidateId', null);
        $queryParam->setDefault('companyId', null);
        $queryParam->setDefault('contactId', null);
        $queryParam->setDefault('jobId', null);
        $queryParam->setDefault('requisitionId', null);
        $queryParam->setDefault('applicationId', null);
        $queryParam->setDefault('placementId', null);
        $queryParam->setDefault('submissionId', null);
        $queryParam->setDefault('sort', null);
        $url     = '/v2/notes';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\NoteListRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param \Varspool\JobAdder\V2\Model\AddNoteCommand $body
     * @param array                                      $parameters List of parameters
     * @param string                                     $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\NoteModel
     */
    public function addNote(\Varspool\JobAdder\V2\Model\AddNoteCommand $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/notes';
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json'], 'Content-Type' => 'application/json'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($body, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('201' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\NoteModel', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $noteId     Note Id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Varspool\JobAdder\V2\Model\NoteRepresentation
     */
    public function getNote($noteId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/notes/{noteId}';
        $url        = str_replace('{noteId}', urlencode($noteId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Varspool\\JobAdder\\V2\\Model\\NoteRepresentation', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $noteId
     * @param array  $parameters {
     *
     *     @var  $fileData
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function addNoteAttachment($noteId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setRequired('fileData');
        $queryParam->setFormParameters(['fileData']);
        $url     = '/v2/notes/{noteId}/attachments';
        $url     = str_replace('{noteId}', urlencode($noteId), $url);
        $url     = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'api.jobadder.com', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();

        return $response;
    }

    /**
     * @param string $noteId       Note Id
     * @param string $attachmentId Attachment Id
     * @param array  $parameters   List of parameters
     * @param string $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getNoteAttachment($noteId, $attachmentId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/v2/notes/{noteId}/attachments/{attachmentId}';
        $url        = str_replace('{noteId}', urlencode($noteId), $url);
        $url        = str_replace('{attachmentId}', urlencode($attachmentId), $url);
        $url        = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'api.jobadder.com'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();

        return $response;
    }
}

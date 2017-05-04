<?php

namespace Varspool\JobAdder;

use Http\Message\MessageFactory;

/**
 * Replaces a static host header when creating requests
 *
 * Unfortunately, OpenAPI before version 3 (unreleased at time of writing) does not support variable server names. The
 * `host` property is either given as a static string (no templating allowed) or is interpreted as the hostname the
 * documentation is served from.
 *
 * The JobAdder swagger contains a host of 'localapi.jobadder.com', by default, but the actual hostname you should
 * use is given by the OAuth flow. In order to allow the HTTP client that's injected to control its own Host header, we
 * ignore the static Host header passed from the generated OpenAPI code.
 */
class HostReplacementMessageFactory implements MessageFactory
{
    private const STATIC_HOST = 'localapi.jobadder.com';

    /**
     * @var MessageFactory
     */
    protected $inner;

    public function __construct(MessageFactory $inner)
    {
        $this->inner = $inner;
    }

    public function createRequest(
        $method,
        $uri,
        array $headers = [],
        $body = null,
        $protocolVersion = '1.1'
    ) {
        if (isset($headers['Host']) && $headers['Host'] === self::STATIC_HOST) {
            unset($headers['Host']);
        }

        return $this->inner->createRequest($method, $uri, $headers, $body, $protocolVersion);
    }

    public function createResponse(
        $statusCode = 200,
        $reasonPhrase = null,
        array $headers = [],
        $body = null,
        $protocolVersion = '1.1'
    ) {
        return $this->inner->createResponse($statusCode, $reasonPhrase, $headers, $body, $protocolVersion);
    }
}

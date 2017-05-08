<?php

namespace Varspool\JobAdder;

use Http\Message\MessageFactory;

/**
 * Replaces a static host header when creating requests
 *
 * Unfortunately, OpenAPI before version 3 (unreleased at time of writing) does not support variable server names. The
 * `host` property is either given as a static string in the JSON (no templating allowed) or is interpreted as the hostname the
 * documentation is served from.
 *
 * But also, more broadly, while OpenAPI does support Security Definitions
 * (http://swagger.io/specification/#securityDefinitionsObject) and the JobAdder OpenAPI schema correctly points to
 * their OAuth flow, our upstream client generation library (Jane) doesn't seem to do anything with that part
 * of the spec.
 *
 * So, the OAuth flow is out of scope for this client, and we rely on the user configuring the injected HTTP
 * client with the correct hostname (as returned in the access token response leg of the OAuth flow) and
 * Authorization header. In order to allow the HTTP client that's injected to control its own Host header, we ignore the
 * static Host header passed from the generated OpenAPI code.
 *
 * Hope that explains this hackery! Improvements welcome. But definitely a client-side limitation here. :)
 */
class HostReplacementMessageFactory implements MessageFactory
{
    private const STATIC_HOST = 'api.jobadder.com';

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

<?php

namespace Varspool\JobAdder;

use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
use Joli\Jane\Runtime\Encoder\RawEncoder;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use Varspool\JobAdder\V2\Normalizer\NormalizerFactory;
use Varspool\JobAdder\V2\Resources;

class Client extends Resources
{
    /**
     * @var \Http\Client\HttpClient
     */
    protected $httpClient;

    /**
     * @var MessageFactory
     */
    protected $messageFactory;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * Client constructor.
     *
     * @param HttpClient|HttpAsyncClient $httpClient
     * @param MessageFactory|null        $messageFactory
     * @param Serializer|null            $serializer
     */
    public function __construct($httpClient, MessageFactory $messageFactory = null, Serializer $serializer = null)
    {
        $this->httpClient = $httpClient;

        if ($serializer === null) {
            $serializer = new Serializer(
                NormalizerFactory::create(),
                [
                    new JsonEncoder(
                        new JsonEncode(),
                        new JsonDecode()
                    ),
                    new RawEncoder(),
                ]
            );
        }

        if ($messageFactory === null) {
            $messageFactory = new GuzzleMessageFactory();
        }

        $this->messageFactory = new HostReplacementMessageFactory($messageFactory);
        $this->serializer = $serializer;
    }

    protected function createResourceInstance(string $type): Resource
    {
        return new $type($this->httpClient, $this->messageFactory, $this->serializer);
    }
}

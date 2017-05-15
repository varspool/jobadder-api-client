<?php

namespace Varspool\JobAdder;

use Http\Message\MessageFactory;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Joli\Jane\Runtime\Encoder\RawEncoder;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use Varspool\JobAdder\V2\Normalizer\NormalizerFactory;
use Varspool\JobAdder\V2\Resources;

class Client extends Resources
{
    public function __construct($httpClient, MessageFactory $messageFactory = null, Serializer $serializer = null)
    {
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

        $messageFactory = new HostReplacementMessageFactory($messageFactory);

        parent::__construct($httpClient, $messageFactory, $serializer);
    }
}

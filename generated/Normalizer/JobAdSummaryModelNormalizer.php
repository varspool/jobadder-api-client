<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class JobAdSummaryModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\JobAdSummaryModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\JobAdSummaryModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\JobAdSummaryModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'adId')) {
            $object->setAdId($data->{'adId'});
        }
        if (property_exists($data, 'state')) {
            $object->setState($data->{'state'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'reference')) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'postAt')) {
            $object->setPostAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'postAt'}));
        }
        if (property_exists($data, 'expireAt')) {
            $object->setExpireAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'expireAt'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAdId()) {
            $data->{'adId'} = $object->getAdId();
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getPostAt()) {
            $data->{'postAt'} = $object->getPostAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getExpireAt()) {
            $data->{'expireAt'} = $object->getExpireAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}

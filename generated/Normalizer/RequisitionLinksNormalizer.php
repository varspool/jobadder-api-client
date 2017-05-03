<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RequisitionLinksNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\RequisitionLinks') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\RequisitionLinks) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\RequisitionLinks();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'self')) {
            $object->setSelf($data->{'self'});
        }
        if (property_exists($data, 'workflow')) {
            $object->setWorkflow($data->{'workflow'});
        }
        if (property_exists($data, 'job')) {
            $object->setJob($data->{'job'});
        }
        if (property_exists($data, 'history')) {
            $object->setHistory($data->{'history'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSelf()) {
            $data->{'self'} = $object->getSelf();
        }
        if (null !== $object->getWorkflow()) {
            $data->{'workflow'} = $object->getWorkflow();
        }
        if (null !== $object->getJob()) {
            $data->{'job'} = $object->getJob();
        }
        if (null !== $object->getHistory()) {
            $data->{'history'} = $object->getHistory();
        }

        return $data;
    }
}

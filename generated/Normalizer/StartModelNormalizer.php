<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class StartModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\StartModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\StartModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\StartModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'immediate')) {
            $object->setImmediate($data->{'immediate'});
        }
        if (property_exists($data, 'relative')) {
            $object->setRelative($this->serializer->deserialize($data->{'relative'}, 'Varspool\\JobAdder\\V2\\Model\\RelativeStartModel', 'raw', $context));
        }
        if (property_exists($data, 'date')) {
            $object->setDate($data->{'date'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getImmediate()) {
            $data->{'immediate'} = $object->getImmediate();
        }
        if (null !== $object->getRelative()) {
            $data->{'relative'} = $this->serializer->serialize($object->getRelative(), 'raw', $context);
        }
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate();
        }

        return $data;
    }
}

<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class IdealSalaryModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\IdealSalaryModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\IdealSalaryModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\IdealSalaryModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'workType')) {
            $object->setWorkType($this->serializer->deserialize($data->{'workType'}, 'Varspool\\JobAdder\\V2\\Model\\WorkTypeModel', 'raw', $context));
        }
        if (property_exists($data, 'salary')) {
            $object->setSalary($this->serializer->deserialize($data->{'salary'}, 'Varspool\\JobAdder\\V2\\Model\\SalaryRangeModel', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getWorkType()) {
            $data->{'workType'} = $this->serializer->serialize($object->getWorkType(), 'raw', $context);
        }
        if (null !== $object->getSalary()) {
            $data->{'salary'} = $this->serializer->serialize($object->getSalary(), 'raw', $context);
        }

        return $data;
    }
}

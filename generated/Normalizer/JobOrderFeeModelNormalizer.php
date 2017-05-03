<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class JobOrderFeeModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\JobOrderFeeModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\JobOrderFeeModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\JobOrderFeeModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'rateType')) {
            $object->setRateType($data->{'rateType'});
        }
        if (property_exists($data, 'rate')) {
            $object->setRate($data->{'rate'});
        }
        if (property_exists($data, 'estimatedTotal')) {
            $object->setEstimatedTotal($data->{'estimatedTotal'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRateType()) {
            $data->{'rateType'} = $object->getRateType();
        }
        if (null !== $object->getRate()) {
            $data->{'rate'} = $object->getRate();
        }
        if (null !== $object->getEstimatedTotal()) {
            $data->{'estimatedTotal'} = $object->getEstimatedTotal();
        }

        return $data;
    }
}

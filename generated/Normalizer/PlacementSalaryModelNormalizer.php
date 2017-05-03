<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PlacementSalaryModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\PlacementSalaryModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\PlacementSalaryModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\PlacementSalaryModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'base')) {
            $object->setBase($data->{'base'});
        }
        if (property_exists($data, 'superannuation')) {
            $object->setSuperannuation($data->{'superannuation'});
        }
        if (property_exists($data, 'benefits')) {
            $object->setBenefits($data->{'benefits'});
        }
        if (property_exists($data, 'total')) {
            $object->setTotal($data->{'total'});
        }
        if (property_exists($data, 'fee')) {
            $object->setFee($data->{'fee'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBase()) {
            $data->{'base'} = $object->getBase();
        }
        if (null !== $object->getSuperannuation()) {
            $data->{'superannuation'} = $object->getSuperannuation();
        }
        if (null !== $object->getBenefits()) {
            $data->{'benefits'} = $object->getBenefits();
        }
        if (null !== $object->getTotal()) {
            $data->{'total'} = $object->getTotal();
        }
        if (null !== $object->getFee()) {
            $data->{'fee'} = $object->getFee();
        }

        return $data;
    }
}

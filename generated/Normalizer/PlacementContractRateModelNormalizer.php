<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PlacementContractRateModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\PlacementContractRateModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\PlacementContractRateModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\PlacementContractRateModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'hoursPerWeek')) {
            $object->setHoursPerWeek($data->{'hoursPerWeek'});
        }
        if (property_exists($data, 'daysPerWeek')) {
            $object->setDaysPerWeek($data->{'daysPerWeek'});
        }
        if (property_exists($data, 'clientRate')) {
            $object->setClientRate($data->{'clientRate'});
        }
        if (property_exists($data, 'candidateRate')) {
            $object->setCandidateRate($data->{'candidateRate'});
        }
        if (property_exists($data, 'onCostsType')) {
            $object->setOnCostsType($data->{'onCostsType'});
        }
        if (property_exists($data, 'onCosts')) {
            $object->setOnCosts($data->{'onCosts'});
        }
        if (property_exists($data, 'netMargin')) {
            $object->setNetMargin($data->{'netMargin'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getHoursPerWeek()) {
            $data->{'hoursPerWeek'} = $object->getHoursPerWeek();
        }
        if (null !== $object->getDaysPerWeek()) {
            $data->{'daysPerWeek'} = $object->getDaysPerWeek();
        }
        if (null !== $object->getClientRate()) {
            $data->{'clientRate'} = $object->getClientRate();
        }
        if (null !== $object->getCandidateRate()) {
            $data->{'candidateRate'} = $object->getCandidateRate();
        }
        if (null !== $object->getOnCostsType()) {
            $data->{'onCostsType'} = $object->getOnCostsType();
        }
        if (null !== $object->getOnCosts()) {
            $data->{'onCosts'} = $object->getOnCosts();
        }
        if (null !== $object->getNetMargin()) {
            $data->{'netMargin'} = $object->getNetMargin();
        }

        return $data;
    }
}

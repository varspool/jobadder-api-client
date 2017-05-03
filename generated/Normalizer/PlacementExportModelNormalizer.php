<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PlacementExportModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\PlacementExportModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\PlacementExportModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\PlacementExportModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'payroll')) {
            $object->setPayroll($data->{'payroll'});
        }
        if (property_exists($data, 'timesheets')) {
            $object->setTimesheets($data->{'timesheets'});
        }
        if (property_exists($data, 'onboarding')) {
            $object->setOnboarding($data->{'onboarding'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPayroll()) {
            $data->{'payroll'} = $object->getPayroll();
        }
        if (null !== $object->getTimesheets()) {
            $data->{'timesheets'} = $object->getTimesheets();
        }
        if (null !== $object->getOnboarding()) {
            $data->{'onboarding'} = $object->getOnboarding();
        }

        return $data;
    }
}

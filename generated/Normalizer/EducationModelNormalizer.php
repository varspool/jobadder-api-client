<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EducationModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\EducationModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\EducationModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\EducationModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'educationId')) {
            $object->setEducationId($data->{'educationId'});
        }
        if (property_exists($data, 'institution')) {
            $object->setInstitution($data->{'institution'});
        }
        if (property_exists($data, 'course')) {
            $object->setCourse($data->{'course'});
        }
        if (property_exists($data, 'endDate')) {
            $object->setEndDate($data->{'endDate'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEducationId()) {
            $data->{'educationId'} = $object->getEducationId();
        }
        if (null !== $object->getInstitution()) {
            $data->{'institution'} = $object->getInstitution();
        }
        if (null !== $object->getCourse()) {
            $data->{'course'} = $object->getCourse();
        }
        if (null !== $object->getEndDate()) {
            $data->{'endDate'} = $object->getEndDate();
        }

        return $data;
    }
}

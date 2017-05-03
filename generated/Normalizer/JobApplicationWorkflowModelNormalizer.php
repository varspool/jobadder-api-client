<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class JobApplicationWorkflowModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\JobApplicationWorkflowModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\JobApplicationWorkflowModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\JobApplicationWorkflowModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'stage')) {
            $object->setStage($data->{'stage'});
        }
        if (property_exists($data, 'step')) {
            $object->setStep($data->{'step'});
        }
        if (property_exists($data, 'progress')) {
            $object->setProgress($data->{'progress'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getStage()) {
            $data->{'stage'} = $object->getStage();
        }
        if (null !== $object->getStep()) {
            $data->{'step'} = $object->getStep();
        }
        if (null !== $object->getProgress()) {
            $data->{'progress'} = $object->getProgress();
        }

        return $data;
    }
}

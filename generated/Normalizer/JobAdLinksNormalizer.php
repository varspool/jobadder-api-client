<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class JobAdLinksNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\JobAdLinks') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\JobAdLinks) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\JobAdLinks();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'self')) {
            $object->setSelf($data->{'self'});
        }
        if (property_exists($data, 'job')) {
            $object->setJob($data->{'job'});
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($data->{'company'});
        }
        if (property_exists($data, 'contact')) {
            $object->setContact($data->{'contact'});
        }
        if (property_exists($data, 'applications')) {
            $object->setApplications($data->{'applications'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSelf()) {
            $data->{'self'} = $object->getSelf();
        }
        if (null !== $object->getJob()) {
            $data->{'job'} = $object->getJob();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $object->getCompany();
        }
        if (null !== $object->getContact()) {
            $data->{'contact'} = $object->getContact();
        }
        if (null !== $object->getApplications()) {
            $data->{'applications'} = $object->getApplications();
        }

        return $data;
    }
}

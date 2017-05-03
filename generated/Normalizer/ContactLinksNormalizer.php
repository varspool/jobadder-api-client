<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ContactLinksNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\ContactLinks') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\ContactLinks) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\ContactLinks();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'self')) {
            $object->setSelf($data->{'self'});
        }
        if (property_exists($data, 'photo')) {
            $object->setPhoto($data->{'photo'});
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($data->{'company'});
        }
        if (property_exists($data, 'notes')) {
            $object->setNotes($data->{'notes'});
        }
        if (property_exists($data, 'jobs')) {
            $object->setJobs($data->{'jobs'});
        }
        if (property_exists($data, 'floats')) {
            $object->setFloats($data->{'floats'});
        }
        if (property_exists($data, 'submissions')) {
            $object->setSubmissions($data->{'submissions'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSelf()) {
            $data->{'self'} = $object->getSelf();
        }
        if (null !== $object->getPhoto()) {
            $data->{'photo'} = $object->getPhoto();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $object->getCompany();
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        if (null !== $object->getJobs()) {
            $data->{'jobs'} = $object->getJobs();
        }
        if (null !== $object->getFloats()) {
            $data->{'floats'} = $object->getFloats();
        }
        if (null !== $object->getSubmissions()) {
            $data->{'submissions'} = $object->getSubmissions();
        }

        return $data;
    }
}

<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CompanyLinksNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\CompanyLinks') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\CompanyLinks) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\CompanyLinks();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'self')) {
            $object->setSelf($data->{'self'});
        }
        if (property_exists($data, 'contacts')) {
            $object->setContacts($data->{'contacts'});
        }
        if (property_exists($data, 'subsidiaries')) {
            $object->setSubsidiaries($data->{'subsidiaries'});
        }
        if (property_exists($data, 'addresses')) {
            $object->setAddresses($data->{'addresses'});
        }
        if (property_exists($data, 'notes')) {
            $object->setNotes($data->{'notes'});
        }
        if (property_exists($data, 'jobs')) {
            $object->setJobs($data->{'jobs'});
        }
        if (property_exists($data, 'requisitions')) {
            $object->setRequisitions($data->{'requisitions'});
        }
        if (property_exists($data, 'floats')) {
            $object->setFloats($data->{'floats'});
        }
        if (property_exists($data, 'submissions')) {
            $object->setSubmissions($data->{'submissions'});
        }
        if (property_exists($data, 'placements')) {
            $object->setPlacements($data->{'placements'});
        }
        if (property_exists($data, 'workflows')) {
            $object->setWorkflows($this->serializer->deserialize($data->{'workflows'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyWorkflowLinks', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSelf()) {
            $data->{'self'} = $object->getSelf();
        }
        if (null !== $object->getContacts()) {
            $data->{'contacts'} = $object->getContacts();
        }
        if (null !== $object->getSubsidiaries()) {
            $data->{'subsidiaries'} = $object->getSubsidiaries();
        }
        if (null !== $object->getAddresses()) {
            $data->{'addresses'} = $object->getAddresses();
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        if (null !== $object->getJobs()) {
            $data->{'jobs'} = $object->getJobs();
        }
        if (null !== $object->getRequisitions()) {
            $data->{'requisitions'} = $object->getRequisitions();
        }
        if (null !== $object->getFloats()) {
            $data->{'floats'} = $object->getFloats();
        }
        if (null !== $object->getSubmissions()) {
            $data->{'submissions'} = $object->getSubmissions();
        }
        if (null !== $object->getPlacements()) {
            $data->{'placements'} = $object->getPlacements();
        }
        if (null !== $object->getWorkflows()) {
            $data->{'workflows'} = $this->serializer->serialize($object->getWorkflows(), 'raw', $context);
        }

        return $data;
    }
}

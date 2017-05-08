<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CompanyNameModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\CompanyNameModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\CompanyNameModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'companyId')) {
            $object->setCompanyId($data->{'companyId'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($this->serializer->deserialize($data->{'status'}, 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'raw', $context));
        }
        if (property_exists($data, 'createdBy')) {
            $object->setCreatedBy($this->serializer->deserialize($data->{'createdBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'createdAt'}));
        }
        if (property_exists($data, 'updatedBy')) {
            $object->setUpdatedBy($this->serializer->deserialize($data->{'updatedBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'updatedAt'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCompanyId()) {
            $data->{'companyId'} = $object->getCompanyId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $this->serializer->serialize($object->getStatus(), 'raw', $context);
        }
        if (null !== $object->getCreatedBy()) {
            $data->{'createdBy'} = $this->serializer->serialize($object->getCreatedBy(), 'raw', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getUpdatedBy()) {
            $data->{'updatedBy'} = $this->serializer->serialize($object->getUpdatedBy(), 'raw', $context);
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}

<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CompanyRepresentationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\CompanyRepresentation') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\CompanyRepresentation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\CompanyRepresentation();
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
        if (property_exists($data, 'mainContact')) {
            $object->setMainContact($this->serializer->deserialize($data->{'mainContact'}, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'raw', $context));
        }
        if (property_exists($data, 'primaryAddress')) {
            $object->setPrimaryAddress($this->serializer->deserialize($data->{'primaryAddress'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyAddressModel', 'raw', $context));
        }
        if (property_exists($data, 'parent')) {
            $object->setParent($this->serializer->deserialize($data->{'parent'}, 'Varspool\\JobAdder\\V2\\Model\\CompanySummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'custom')) {
            $values = [];
            foreach ($data->{'custom'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'raw', $context);
            }
            $object->setCustom($values);
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->serializer->deserialize($data->{'owner'}, 'Varspool\\JobAdder\\V2\\Model\\UserSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'recruiters')) {
            $values_1 = [];
            foreach ($data->{'recruiters'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Varspool\\JobAdder\\V2\\Model\\UserSummaryModel', 'raw', $context);
            }
            $object->setRecruiters($values_1);
        }
        if (property_exists($data, 'links')) {
            $object->setLinks($this->serializer->deserialize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyLinks', 'raw', $context));
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
        if (null !== $object->getMainContact()) {
            $data->{'mainContact'} = $this->serializer->serialize($object->getMainContact(), 'raw', $context);
        }
        if (null !== $object->getPrimaryAddress()) {
            $data->{'primaryAddress'} = $this->serializer->serialize($object->getPrimaryAddress(), 'raw', $context);
        }
        if (null !== $object->getParent()) {
            $data->{'parent'} = $this->serializer->serialize($object->getParent(), 'raw', $context);
        }
        if (null !== $object->getCustom()) {
            $values = [];
            foreach ($object->getCustom() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'custom'} = $values;
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->serializer->serialize($object->getOwner(), 'raw', $context);
        }
        if (null !== $object->getRecruiters()) {
            $values_1 = [];
            foreach ($object->getRecruiters() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'recruiters'} = $values_1;
        }
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->serializer->serialize($object->getLinks(), 'raw', $context);
        }

        return $data;
    }
}

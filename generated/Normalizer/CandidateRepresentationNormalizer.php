<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CandidateRepresentationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\CandidateRepresentation') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\CandidateRepresentation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\CandidateRepresentation();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'candidateId')) {
            $object->setCandidateId($data->{'candidateId'});
        }
        if (property_exists($data, 'firstName')) {
            $object->setFirstName($data->{'firstName'});
        }
        if (property_exists($data, 'lastName')) {
            $object->setLastName($data->{'lastName'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'phone')) {
            $object->setPhone($data->{'phone'});
        }
        if (property_exists($data, 'mobile')) {
            $object->setMobile($data->{'mobile'});
        }
        if (property_exists($data, 'otherEmail')) {
            $values = [];
            foreach ($data->{'otherEmail'} as $value) {
                $values[] = $value;
            }
            $object->setOtherEmail($values);
        }
        if (property_exists($data, 'social')) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'social'} as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setSocial($values_1);
        }
        if (property_exists($data, 'address')) {
            $object->setAddress($this->serializer->deserialize($data->{'address'}, 'Varspool\\JobAdder\\V2\\Model\\AddressModel', 'raw', $context));
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($this->serializer->deserialize($data->{'status'}, 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'raw', $context));
        }
        if (property_exists($data, 'rating')) {
            $object->setRating($data->{'rating'});
        }
        if (property_exists($data, 'source')) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'employment')) {
            $object->setEmployment($this->serializer->deserialize($data->{'employment'}, 'Varspool\\JobAdder\\V2\\Model\\EmploymentModel', 'raw', $context));
        }
        if (property_exists($data, 'availability')) {
            $object->setAvailability($this->serializer->deserialize($data->{'availability'}, 'Varspool\\JobAdder\\V2\\Model\\StartModel', 'raw', $context));
        }
        if (property_exists($data, 'skillTags')) {
            $values_2 = [];
            foreach ($data->{'skillTags'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSkillTags($values_2);
        }
        if (property_exists($data, 'education')) {
            $values_3 = [];
            foreach ($data->{'education'} as $value_3) {
                $values_3[] = $this->serializer->deserialize($value_3, 'Varspool\\JobAdder\\V2\\Model\\EducationModel', 'raw', $context);
            }
            $object->setEducation($values_3);
        }
        if (property_exists($data, 'custom')) {
            $values_4 = [];
            foreach ($data->{'custom'} as $value_4) {
                $values_4[] = $this->serializer->deserialize($value_4, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'raw', $context);
            }
            $object->setCustom($values_4);
        }
        if (property_exists($data, 'recruiters')) {
            $values_5 = [];
            foreach ($data->{'recruiters'} as $value_5) {
                $values_5[] = $this->serializer->deserialize($value_5, 'Varspool\\JobAdder\\V2\\Model\\UserSummaryModel', 'raw', $context);
            }
            $object->setRecruiters($values_5);
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
        if (property_exists($data, 'links')) {
            $object->setLinks($this->serializer->deserialize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\CandidateLinks', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCandidateId()) {
            $data->{'candidateId'} = $object->getCandidateId();
        }
        if (null !== $object->getFirstName()) {
            $data->{'firstName'} = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data->{'lastName'} = $object->getLastName();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getPhone()) {
            $data->{'phone'} = $object->getPhone();
        }
        if (null !== $object->getMobile()) {
            $data->{'mobile'} = $object->getMobile();
        }
        if (null !== $object->getOtherEmail()) {
            $values = [];
            foreach ($object->getOtherEmail() as $value) {
                $values[] = $value;
            }
            $data->{'otherEmail'} = $values;
        }
        if (null !== $object->getSocial()) {
            $values_1 = new \stdClass();
            foreach ($object->getSocial() as $key => $value_1) {
                $values_1->{$key} = $value_1;
            }
            $data->{'social'} = $values_1;
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->serializer->serialize($object->getAddress(), 'raw', $context);
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $this->serializer->serialize($object->getStatus(), 'raw', $context);
        }
        if (null !== $object->getRating()) {
            $data->{'rating'} = $object->getRating();
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getEmployment()) {
            $data->{'employment'} = $this->serializer->serialize($object->getEmployment(), 'raw', $context);
        }
        if (null !== $object->getAvailability()) {
            $data->{'availability'} = $this->serializer->serialize($object->getAvailability(), 'raw', $context);
        }
        if (null !== $object->getSkillTags()) {
            $values_2 = [];
            foreach ($object->getSkillTags() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'skillTags'} = $values_2;
        }
        if (null !== $object->getEducation()) {
            $values_3 = [];
            foreach ($object->getEducation() as $value_3) {
                $values_3[] = $this->serializer->serialize($value_3, 'raw', $context);
            }
            $data->{'education'} = $values_3;
        }
        if (null !== $object->getCustom()) {
            $values_4 = [];
            foreach ($object->getCustom() as $value_4) {
                $values_4[] = $this->serializer->serialize($value_4, 'raw', $context);
            }
            $data->{'custom'} = $values_4;
        }
        if (null !== $object->getRecruiters()) {
            $values_5 = [];
            foreach ($object->getRecruiters() as $value_5) {
                $values_5[] = $this->serializer->serialize($value_5, 'raw', $context);
            }
            $data->{'recruiters'} = $values_5;
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
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->serializer->serialize($object->getLinks(), 'raw', $context);
        }

        return $data;
    }
}

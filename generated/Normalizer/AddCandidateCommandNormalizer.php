<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AddCandidateCommandNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\AddCandidateCommand') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\AddCandidateCommand) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\AddCandidateCommand();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
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
        if (property_exists($data, 'address')) {
            $object->setAddress($this->serializer->deserialize($data->{'address'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitAddressModel', 'raw', $context));
        }
        if (property_exists($data, 'skillTags')) {
            $values = [];
            foreach ($data->{'skillTags'} as $value) {
                $values[] = $value;
            }
            $object->setSkillTags($values);
        }
        if (property_exists($data, 'employment')) {
            $object->setEmployment($this->serializer->deserialize($data->{'employment'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitEmploymentModel', 'raw', $context));
        }
        if (property_exists($data, 'availability')) {
            $object->setAvailability($this->serializer->deserialize($data->{'availability'}, 'Varspool\\JobAdder\\V2\\Model\\StartModel', 'raw', $context));
        }
        if (property_exists($data, 'customFields')) {
            $values_1 = [];
            foreach ($data->{'customFields'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Varspool\\JobAdder\\V2\\Model\\SubmitCustomFieldValueModel', 'raw', $context);
            }
            $object->setCustomFields($values_1);
        }
        if (property_exists($data, 'recruiterUserId')) {
            $values_2 = [];
            foreach ($data->{'recruiterUserId'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRecruiterUserId($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
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
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->serializer->serialize($object->getAddress(), 'raw', $context);
        }
        if (null !== $object->getSkillTags()) {
            $values = [];
            foreach ($object->getSkillTags() as $value) {
                $values[] = $value;
            }
            $data->{'skillTags'} = $values;
        }
        if (null !== $object->getEmployment()) {
            $data->{'employment'} = $this->serializer->serialize($object->getEmployment(), 'raw', $context);
        }
        if (null !== $object->getAvailability()) {
            $data->{'availability'} = $this->serializer->serialize($object->getAvailability(), 'raw', $context);
        }
        if (null !== $object->getCustomFields()) {
            $values_1 = [];
            foreach ($object->getCustomFields() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'customFields'} = $values_1;
        }
        if (null !== $object->getRecruiterUserId()) {
            $values_2 = [];
            foreach ($object->getRecruiterUserId() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'recruiterUserId'} = $values_2;
        }

        return $data;
    }
}

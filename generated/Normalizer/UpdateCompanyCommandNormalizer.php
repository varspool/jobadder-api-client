<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class UpdateCompanyCommandNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\UpdateCompanyCommand') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\UpdateCompanyCommand) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\UpdateCompanyCommand();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'mainContactId')) {
            $object->setMainContactId($data->{'mainContactId'});
        }
        if (property_exists($data, 'parentCompanyId')) {
            $object->setParentCompanyId($data->{'parentCompanyId'});
        }
        if (property_exists($data, 'customFields')) {
            $values = [];
            foreach ($data->{'customFields'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Varspool\\JobAdder\\V2\\Model\\SubmitCustomFieldValueModel', 'raw', $context);
            }
            $object->setCustomFields($values);
        }
        if (property_exists($data, 'ownerUserId')) {
            $object->setOwnerUserId($data->{'ownerUserId'});
        }
        if (property_exists($data, 'recruiterUserId')) {
            $values_1 = [];
            foreach ($data->{'recruiterUserId'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRecruiterUserId($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getMainContactId()) {
            $data->{'mainContactId'} = $object->getMainContactId();
        }
        if (null !== $object->getParentCompanyId()) {
            $data->{'parentCompanyId'} = $object->getParentCompanyId();
        }
        if (null !== $object->getCustomFields()) {
            $values = [];
            foreach ($object->getCustomFields() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'customFields'} = $values;
        }
        if (null !== $object->getOwnerUserId()) {
            $data->{'ownerUserId'} = $object->getOwnerUserId();
        }
        if (null !== $object->getRecruiterUserId()) {
            $values_1 = [];
            foreach ($object->getRecruiterUserId() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'recruiterUserId'} = $values_1;
        }

        return $data;
    }
}

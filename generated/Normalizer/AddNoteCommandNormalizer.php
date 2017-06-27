<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AddNoteCommandNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\AddNoteCommand') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\AddNoteCommand) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\AddNoteCommand();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'text')) {
            $object->setText($data->{'text'});
        }
        if (property_exists($data, 'jobId')) {
            $values = [];
            foreach ($data->{'jobId'} as $value) {
                $values[] = $value;
            }
            $object->setJobId($values);
        }
        if (property_exists($data, 'requisitionId')) {
            $values_1 = [];
            foreach ($data->{'requisitionId'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRequisitionId($values_1);
        }
        if (property_exists($data, 'candidateId')) {
            $values_2 = [];
            foreach ($data->{'candidateId'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCandidateId($values_2);
        }
        if (property_exists($data, 'applicationId')) {
            $values_3 = [];
            foreach ($data->{'applicationId'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setApplicationId($values_3);
        }
        if (property_exists($data, 'placementId')) {
            $values_4 = [];
            foreach ($data->{'placementId'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setPlacementId($values_4);
        }
        if (property_exists($data, 'companyId')) {
            $values_5 = [];
            foreach ($data->{'companyId'} as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setCompanyId($values_5);
        }
        if (property_exists($data, 'contactId')) {
            $values_6 = [];
            foreach ($data->{'contactId'} as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setContactId($values_6);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        }
        if (null !== $object->getJobId()) {
            $values = [];
            foreach ($object->getJobId() as $value) {
                $values[] = $value;
            }
            $data->{'jobId'} = $values;
        }
        if (null !== $object->getRequisitionId()) {
            $values_1 = [];
            foreach ($object->getRequisitionId() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'requisitionId'} = $values_1;
        }
        if (null !== $object->getCandidateId()) {
            $values_2 = [];
            foreach ($object->getCandidateId() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'candidateId'} = $values_2;
        }
        if (null !== $object->getApplicationId()) {
            $values_3 = [];
            foreach ($object->getApplicationId() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'applicationId'} = $values_3;
        }
        if (null !== $object->getPlacementId()) {
            $values_4 = [];
            foreach ($object->getPlacementId() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'placementId'} = $values_4;
        }
        if (null !== $object->getCompanyId()) {
            $values_5 = [];
            foreach ($object->getCompanyId() as $value_5) {
                $values_5[] = $value_5;
            }
            $data->{'companyId'} = $values_5;
        }
        if (null !== $object->getContactId()) {
            $values_6 = [];
            foreach ($object->getContactId() as $value_6) {
                $values_6[] = $value_6;
            }
            $data->{'contactId'} = $values_6;
        }

        return $data;
    }
}

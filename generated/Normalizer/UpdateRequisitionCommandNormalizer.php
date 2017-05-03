<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class UpdateRequisitionCommandNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\UpdateRequisitionCommand') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\UpdateRequisitionCommand) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\UpdateRequisitionCommand();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'contactId')) {
            $object->setContactId($data->{'contactId'});
        }
        if (property_exists($data, 'jobTitle')) {
            $object->setJobTitle($data->{'jobTitle'});
        }
        if (property_exists($data, 'jobDescription')) {
            $object->setJobDescription($data->{'jobDescription'});
        }
        if (property_exists($data, 'category')) {
            $object->setCategory($this->serializer->deserialize($data->{'category'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitCategoryModel', 'raw', $context));
        }
        if (property_exists($data, 'location')) {
            $object->setLocation($this->serializer->deserialize($data->{'location'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitLocationModel', 'raw', $context));
        }
        if (property_exists($data, 'workplaceAddressId')) {
            $object->setWorkplaceAddressId($data->{'workplaceAddressId'});
        }
        if (property_exists($data, 'start')) {
            $object->setStart($this->serializer->deserialize($data->{'start'}, 'Varspool\\JobAdder\\V2\\Model\\StartModel', 'raw', $context));
        }
        if (property_exists($data, 'duration')) {
            $object->setDuration($this->serializer->deserialize($data->{'duration'}, 'Varspool\\JobAdder\\V2\\Model\\DurationModel', 'raw', $context));
        }
        if (property_exists($data, 'workTypeId')) {
            $object->setWorkTypeId($data->{'workTypeId'});
        }
        if (property_exists($data, 'salary')) {
            $object->setSalary($this->serializer->deserialize($data->{'salary'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderSalaryRangeModel', 'raw', $context));
        }
        if (property_exists($data, 'numberOfJobs')) {
            $object->setNumberOfJobs($data->{'numberOfJobs'});
        }
        if (property_exists($data, 'customFields')) {
            $values = [];
            foreach ($data->{'customFields'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Varspool\\JobAdder\\V2\\Model\\SubmitCustomFieldValueModel', 'raw', $context);
            }
            $object->setCustomFields($values);
        }
        if (property_exists($data, 'workflowId')) {
            $object->setWorkflowId($data->{'workflowId'});
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
        if (null !== $object->getContactId()) {
            $data->{'contactId'} = $object->getContactId();
        }
        if (null !== $object->getJobTitle()) {
            $data->{'jobTitle'} = $object->getJobTitle();
        }
        if (null !== $object->getJobDescription()) {
            $data->{'jobDescription'} = $object->getJobDescription();
        }
        if (null !== $object->getCategory()) {
            $data->{'category'} = $this->serializer->serialize($object->getCategory(), 'raw', $context);
        }
        if (null !== $object->getLocation()) {
            $data->{'location'} = $this->serializer->serialize($object->getLocation(), 'raw', $context);
        }
        if (null !== $object->getWorkplaceAddressId()) {
            $data->{'workplaceAddressId'} = $object->getWorkplaceAddressId();
        }
        if (null !== $object->getStart()) {
            $data->{'start'} = $this->serializer->serialize($object->getStart(), 'raw', $context);
        }
        if (null !== $object->getDuration()) {
            $data->{'duration'} = $this->serializer->serialize($object->getDuration(), 'raw', $context);
        }
        if (null !== $object->getWorkTypeId()) {
            $data->{'workTypeId'} = $object->getWorkTypeId();
        }
        if (null !== $object->getSalary()) {
            $data->{'salary'} = $this->serializer->serialize($object->getSalary(), 'raw', $context);
        }
        if (null !== $object->getNumberOfJobs()) {
            $data->{'numberOfJobs'} = $object->getNumberOfJobs();
        }
        if (null !== $object->getCustomFields()) {
            $values = [];
            foreach ($object->getCustomFields() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'customFields'} = $values;
        }
        if (null !== $object->getWorkflowId()) {
            $data->{'workflowId'} = $object->getWorkflowId();
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

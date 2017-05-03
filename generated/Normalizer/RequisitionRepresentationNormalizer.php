<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RequisitionRepresentationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\RequisitionRepresentation') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\RequisitionRepresentation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\RequisitionRepresentation();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'requisitionId')) {
            $object->setRequisitionId($data->{'requisitionId'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'workflowStageIndex')) {
            $object->setWorkflowStageIndex($data->{'workflowStageIndex'});
        }
        if (property_exists($data, 'jobTitle')) {
            $object->setJobTitle($data->{'jobTitle'});
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($this->serializer->deserialize($data->{'company'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'raw', $context));
        }
        if (property_exists($data, 'hiringManager')) {
            $object->setHiringManager($this->serializer->deserialize($data->{'hiringManager'}, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'raw', $context));
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'createdAt'}));
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'updatedAt'}));
        }
        if (property_exists($data, 'workflow')) {
            $object->setWorkflow($this->serializer->deserialize($data->{'workflow'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyWorkflowModel', 'raw', $context));
        }
        if (property_exists($data, 'jobDescription')) {
            $object->setJobDescription($data->{'jobDescription'});
        }
        if (property_exists($data, 'numberOfJobs')) {
            $object->setNumberOfJobs($data->{'numberOfJobs'});
        }
        if (property_exists($data, 'workplaceAddress')) {
            $object->setWorkplaceAddress($this->serializer->deserialize($data->{'workplaceAddress'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyAddressModel', 'raw', $context));
        }
        if (property_exists($data, 'category')) {
            $object->setCategory($this->serializer->deserialize($data->{'category'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderCategoryModel', 'raw', $context));
        }
        if (property_exists($data, 'location')) {
            $object->setLocation($this->serializer->deserialize($data->{'location'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderLocationModel', 'raw', $context));
        }
        if (property_exists($data, 'start')) {
            $object->setStart($this->serializer->deserialize($data->{'start'}, 'Varspool\\JobAdder\\V2\\Model\\StartModel', 'raw', $context));
        }
        if (property_exists($data, 'duration')) {
            $object->setDuration($this->serializer->deserialize($data->{'duration'}, 'Varspool\\JobAdder\\V2\\Model\\DurationModel', 'raw', $context));
        }
        if (property_exists($data, 'workType')) {
            $object->setWorkType($this->serializer->deserialize($data->{'workType'}, 'Varspool\\JobAdder\\V2\\Model\\WorkTypeModel', 'raw', $context));
        }
        if (property_exists($data, 'salary')) {
            $object->setSalary($this->serializer->deserialize($data->{'salary'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderSalaryRangeModel', 'raw', $context));
        }
        if (property_exists($data, 'timePerWeek')) {
            $object->setTimePerWeek($data->{'timePerWeek'});
        }
        if (property_exists($data, 'customFields')) {
            $values = [];
            foreach ($data->{'customFields'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'raw', $context);
            }
            $object->setCustomFields($values);
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
            $object->setLinks($this->serializer->deserialize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\RequisitionLinks', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRequisitionId()) {
            $data->{'requisitionId'} = $object->getRequisitionId();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getWorkflowStageIndex()) {
            $data->{'workflowStageIndex'} = $object->getWorkflowStageIndex();
        }
        if (null !== $object->getJobTitle()) {
            $data->{'jobTitle'} = $object->getJobTitle();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->serializer->serialize($object->getCompany(), 'raw', $context);
        }
        if (null !== $object->getHiringManager()) {
            $data->{'hiringManager'} = $this->serializer->serialize($object->getHiringManager(), 'raw', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getWorkflow()) {
            $data->{'workflow'} = $this->serializer->serialize($object->getWorkflow(), 'raw', $context);
        }
        if (null !== $object->getJobDescription()) {
            $data->{'jobDescription'} = $object->getJobDescription();
        }
        if (null !== $object->getNumberOfJobs()) {
            $data->{'numberOfJobs'} = $object->getNumberOfJobs();
        }
        if (null !== $object->getWorkplaceAddress()) {
            $data->{'workplaceAddress'} = $this->serializer->serialize($object->getWorkplaceAddress(), 'raw', $context);
        }
        if (null !== $object->getCategory()) {
            $data->{'category'} = $this->serializer->serialize($object->getCategory(), 'raw', $context);
        }
        if (null !== $object->getLocation()) {
            $data->{'location'} = $this->serializer->serialize($object->getLocation(), 'raw', $context);
        }
        if (null !== $object->getStart()) {
            $data->{'start'} = $this->serializer->serialize($object->getStart(), 'raw', $context);
        }
        if (null !== $object->getDuration()) {
            $data->{'duration'} = $this->serializer->serialize($object->getDuration(), 'raw', $context);
        }
        if (null !== $object->getWorkType()) {
            $data->{'workType'} = $this->serializer->serialize($object->getWorkType(), 'raw', $context);
        }
        if (null !== $object->getSalary()) {
            $data->{'salary'} = $this->serializer->serialize($object->getSalary(), 'raw', $context);
        }
        if (null !== $object->getTimePerWeek()) {
            $data->{'timePerWeek'} = $object->getTimePerWeek();
        }
        if (null !== $object->getCustomFields()) {
            $values = [];
            foreach ($object->getCustomFields() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'customFields'} = $values;
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

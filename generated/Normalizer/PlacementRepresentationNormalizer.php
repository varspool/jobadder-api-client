<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PlacementRepresentationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\PlacementRepresentation') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\PlacementRepresentation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\PlacementRepresentation();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'placementId')) {
            $object->setPlacementId($data->{'placementId'});
        }
        if (property_exists($data, 'approved')) {
            $object->setApproved($data->{'approved'});
        }
        if (property_exists($data, 'approvedAt')) {
            $object->setApprovedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'approvedAt'}));
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'jobTitle')) {
            $object->setJobTitle($data->{'jobTitle'});
        }
        if (property_exists($data, 'job')) {
            $object->setJob($this->serializer->deserialize($data->{'job'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'candidate')) {
            $object->setCandidate($this->serializer->deserialize($data->{'candidate'}, 'Varspool\\JobAdder\\V2\\Model\\CandidateSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($this->serializer->deserialize($data->{'status'}, 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'raw', $context));
        }
        if (property_exists($data, 'startDate')) {
            $object->setStartDate($data->{'startDate'});
        }
        if (property_exists($data, 'endDate')) {
            $object->setEndDate($data->{'endDate'});
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
        if (property_exists($data, 'company')) {
            $object->setCompany($this->serializer->deserialize($data->{'company'}, 'Varspool\\JobAdder\\V2\\Model\\CompanySummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'contact')) {
            $object->setContact($this->serializer->deserialize($data->{'contact'}, 'Varspool\\JobAdder\\V2\\Model\\ContactSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'source')) {
            $object->setSource($this->serializer->deserialize($data->{'source'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementSourceModel', 'raw', $context));
        }
        if (property_exists($data, 'workplaceAddress')) {
            $object->setWorkplaceAddress($this->serializer->deserialize($data->{'workplaceAddress'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyAddressModel', 'raw', $context));
        }
        if (property_exists($data, 'paymentType')) {
            $object->setPaymentType($data->{'paymentType'});
        }
        if (property_exists($data, 'salary')) {
            $object->setSalary($this->serializer->deserialize($data->{'salary'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementSalaryModel', 'raw', $context));
        }
        if (property_exists($data, 'contractRate')) {
            $object->setContractRate($this->serializer->deserialize($data->{'contractRate'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementContractRateModel', 'raw', $context));
        }
        if (property_exists($data, 'award')) {
            $object->setAward($data->{'award'});
        }
        if (property_exists($data, 'industryCode')) {
            $object->setIndustryCode($data->{'industryCode'});
        }
        if (property_exists($data, 'feeSplit')) {
            $object->setFeeSplit($data->{'feeSplit'});
        }
        if (property_exists($data, 'billing')) {
            $object->setBilling($this->serializer->deserialize($data->{'billing'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementBillingModel', 'raw', $context));
        }
        if (property_exists($data, 'export')) {
            $object->setExport($this->serializer->deserialize($data->{'export'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementExportModel', 'raw', $context));
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->serializer->deserialize($data->{'owner'}, 'Varspool\\JobAdder\\V2\\Model\\UserSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'recruiters')) {
            $values = [];
            foreach ($data->{'recruiters'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Varspool\\JobAdder\\V2\\Model\\PlacementRecruiterModel', 'raw', $context);
            }
            $object->setRecruiters($values);
        }
        if (property_exists($data, 'links')) {
            $object->setLinks($this->serializer->deserialize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementLinks', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPlacementId()) {
            $data->{'placementId'} = $object->getPlacementId();
        }
        if (null !== $object->getApproved()) {
            $data->{'approved'} = $object->getApproved();
        }
        if (null !== $object->getApprovedAt()) {
            $data->{'approvedAt'} = $object->getApprovedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getJobTitle()) {
            $data->{'jobTitle'} = $object->getJobTitle();
        }
        if (null !== $object->getJob()) {
            $data->{'job'} = $this->serializer->serialize($object->getJob(), 'raw', $context);
        }
        if (null !== $object->getCandidate()) {
            $data->{'candidate'} = $this->serializer->serialize($object->getCandidate(), 'raw', $context);
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $this->serializer->serialize($object->getStatus(), 'raw', $context);
        }
        if (null !== $object->getStartDate()) {
            $data->{'startDate'} = $object->getStartDate();
        }
        if (null !== $object->getEndDate()) {
            $data->{'endDate'} = $object->getEndDate();
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
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->serializer->serialize($object->getCompany(), 'raw', $context);
        }
        if (null !== $object->getContact()) {
            $data->{'contact'} = $this->serializer->serialize($object->getContact(), 'raw', $context);
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $this->serializer->serialize($object->getSource(), 'raw', $context);
        }
        if (null !== $object->getWorkplaceAddress()) {
            $data->{'workplaceAddress'} = $this->serializer->serialize($object->getWorkplaceAddress(), 'raw', $context);
        }
        if (null !== $object->getPaymentType()) {
            $data->{'paymentType'} = $object->getPaymentType();
        }
        if (null !== $object->getSalary()) {
            $data->{'salary'} = $this->serializer->serialize($object->getSalary(), 'raw', $context);
        }
        if (null !== $object->getContractRate()) {
            $data->{'contractRate'} = $this->serializer->serialize($object->getContractRate(), 'raw', $context);
        }
        if (null !== $object->getAward()) {
            $data->{'award'} = $object->getAward();
        }
        if (null !== $object->getIndustryCode()) {
            $data->{'industryCode'} = $object->getIndustryCode();
        }
        if (null !== $object->getFeeSplit()) {
            $data->{'feeSplit'} = $object->getFeeSplit();
        }
        if (null !== $object->getBilling()) {
            $data->{'billing'} = $this->serializer->serialize($object->getBilling(), 'raw', $context);
        }
        if (null !== $object->getExport()) {
            $data->{'export'} = $this->serializer->serialize($object->getExport(), 'raw', $context);
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->serializer->serialize($object->getOwner(), 'raw', $context);
        }
        if (null !== $object->getRecruiters()) {
            $values = [];
            foreach ($object->getRecruiters() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'recruiters'} = $values;
        }
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->serializer->serialize($object->getLinks(), 'raw', $context);
        }

        return $data;
    }
}

<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class SubmissionSummaryModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\SubmissionSummaryModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\SubmissionSummaryModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\SubmissionSummaryModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'submissionId')) {
            $object->setSubmissionId($data->{'submissionId'});
        }
        if (property_exists($data, 'jobTitle')) {
            $object->setJobTitle($data->{'jobTitle'});
        }
        if (property_exists($data, 'candidate')) {
            $object->setCandidate($this->serializer->deserialize($data->{'candidate'}, 'Varspool\\JobAdder\\V2\\Model\\CandidateSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($this->serializer->deserialize($data->{'company'}, 'Varspool\\JobAdder\\V2\\Model\\CompanySummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'job')) {
            $object->setJob($this->serializer->deserialize($data->{'job'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderSummaryModel', 'raw', $context));
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
        if (null !== $object->getSubmissionId()) {
            $data->{'submissionId'} = $object->getSubmissionId();
        }
        if (null !== $object->getJobTitle()) {
            $data->{'jobTitle'} = $object->getJobTitle();
        }
        if (null !== $object->getCandidate()) {
            $data->{'candidate'} = $this->serializer->serialize($object->getCandidate(), 'raw', $context);
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->serializer->serialize($object->getCompany(), 'raw', $context);
        }
        if (null !== $object->getJob()) {
            $data->{'job'} = $this->serializer->serialize($object->getJob(), 'raw', $context);
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

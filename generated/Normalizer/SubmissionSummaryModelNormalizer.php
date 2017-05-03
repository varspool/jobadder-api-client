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

        return $data;
    }
}

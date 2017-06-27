<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class NoteModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\NoteModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\NoteModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\NoteModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'noteId')) {
            $object->setNoteId($data->{'noteId'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'source')) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'subject')) {
            $object->setSubject($data->{'subject'});
        }
        if (property_exists($data, 'text')) {
            $object->setText($data->{'text'});
        }
        if (property_exists($data, 'attachments')) {
            $values = [];
            foreach ($data->{'attachments'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Varspool\\JobAdder\\V2\\Model\\NoteAttachmentModel', 'raw', $context);
            }
            $object->setAttachments($values);
        }
        if (property_exists($data, 'jobs')) {
            $values_1 = [];
            foreach ($data->{'jobs'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Varspool\\JobAdder\\V2\\Model\\JobOrderSummaryModel', 'raw', $context);
            }
            $object->setJobs($values_1);
        }
        if (property_exists($data, 'requisitions')) {
            $values_2 = [];
            foreach ($data->{'requisitions'} as $value_2) {
                $values_2[] = $this->serializer->deserialize($value_2, 'Varspool\\JobAdder\\V2\\Model\\RequisitionSummaryModel', 'raw', $context);
            }
            $object->setRequisitions($values_2);
        }
        if (property_exists($data, 'candidates')) {
            $values_3 = [];
            foreach ($data->{'candidates'} as $value_3) {
                $values_3[] = $this->serializer->deserialize($value_3, 'Varspool\\JobAdder\\V2\\Model\\CandidateSummaryModel', 'raw', $context);
            }
            $object->setCandidates($values_3);
        }
        if (property_exists($data, 'jobApplications')) {
            $values_4 = [];
            foreach ($data->{'jobApplications'} as $value_4) {
                $values_4[] = $this->serializer->deserialize($value_4, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationSummaryModel', 'raw', $context);
            }
            $object->setJobApplications($values_4);
        }
        if (property_exists($data, 'placements')) {
            $values_5 = [];
            foreach ($data->{'placements'} as $value_5) {
                $values_5[] = $this->serializer->deserialize($value_5, 'Varspool\\JobAdder\\V2\\Model\\PlacementSummaryModel', 'raw', $context);
            }
            $object->setPlacements($values_5);
        }
        if (property_exists($data, 'companies')) {
            $values_6 = [];
            foreach ($data->{'companies'} as $value_6) {
                $values_6[] = $this->serializer->deserialize($value_6, 'Varspool\\JobAdder\\V2\\Model\\CompanySummaryModel', 'raw', $context);
            }
            $object->setCompanies($values_6);
        }
        if (property_exists($data, 'contacts')) {
            $values_7 = [];
            foreach ($data->{'contacts'} as $value_7) {
                $values_7[] = $this->serializer->deserialize($value_7, 'Varspool\\JobAdder\\V2\\Model\\ContactSummaryModel', 'raw', $context);
            }
            $object->setContacts($values_7);
        }
        if (property_exists($data, 'createdBy')) {
            $object->setCreatedBy($this->serializer->deserialize($data->{'createdBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'createdAt'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getNoteId()) {
            $data->{'noteId'} = $object->getNoteId();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getSubject()) {
            $data->{'subject'} = $object->getSubject();
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        }
        if (null !== $object->getAttachments()) {
            $values = [];
            foreach ($object->getAttachments() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'attachments'} = $values;
        }
        if (null !== $object->getJobs()) {
            $values_1 = [];
            foreach ($object->getJobs() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'jobs'} = $values_1;
        }
        if (null !== $object->getRequisitions()) {
            $values_2 = [];
            foreach ($object->getRequisitions() as $value_2) {
                $values_2[] = $this->serializer->serialize($value_2, 'raw', $context);
            }
            $data->{'requisitions'} = $values_2;
        }
        if (null !== $object->getCandidates()) {
            $values_3 = [];
            foreach ($object->getCandidates() as $value_3) {
                $values_3[] = $this->serializer->serialize($value_3, 'raw', $context);
            }
            $data->{'candidates'} = $values_3;
        }
        if (null !== $object->getJobApplications()) {
            $values_4 = [];
            foreach ($object->getJobApplications() as $value_4) {
                $values_4[] = $this->serializer->serialize($value_4, 'raw', $context);
            }
            $data->{'jobApplications'} = $values_4;
        }
        if (null !== $object->getPlacements()) {
            $values_5 = [];
            foreach ($object->getPlacements() as $value_5) {
                $values_5[] = $this->serializer->serialize($value_5, 'raw', $context);
            }
            $data->{'placements'} = $values_5;
        }
        if (null !== $object->getCompanies()) {
            $values_6 = [];
            foreach ($object->getCompanies() as $value_6) {
                $values_6[] = $this->serializer->serialize($value_6, 'raw', $context);
            }
            $data->{'companies'} = $values_6;
        }
        if (null !== $object->getContacts()) {
            $values_7 = [];
            foreach ($object->getContacts() as $value_7) {
                $values_7[] = $this->serializer->serialize($value_7, 'raw', $context);
            }
            $data->{'contacts'} = $values_7;
        }
        if (null !== $object->getCreatedBy()) {
            $data->{'createdBy'} = $this->serializer->serialize($object->getCreatedBy(), 'raw', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}

<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class JobAdRepresentationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\JobAdRepresentation') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\JobAdRepresentation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\JobAdRepresentation();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'adId')) {
            $object->setAdId($data->{'adId'});
        }
        if (property_exists($data, 'state')) {
            $object->setState($data->{'state'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'reference')) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->serializer->deserialize($data->{'owner'}, 'Varspool\\JobAdder\\V2\\Model\\UserSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'job')) {
            $object->setJob($this->serializer->deserialize($data->{'job'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($this->serializer->deserialize($data->{'company'}, 'Varspool\\JobAdder\\V2\\Model\\CompanySummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'contact')) {
            $object->setContact($this->serializer->deserialize($data->{'contact'}, 'Varspool\\JobAdder\\V2\\Model\\ContactSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'createdBy')) {
            $object->setCreatedBy($this->serializer->deserialize($data->{'createdBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'createdAt'}));
        }
        if (property_exists($data, 'links')) {
            $object->setLinks($this->serializer->deserialize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\JobAdLinks', 'raw', $context));
        }
        if (property_exists($data, 'summary')) {
            $object->setSummary($data->{'summary'});
        }
        if (property_exists($data, 'bulletPoints')) {
            $values = [];
            foreach ($data->{'bulletPoints'} as $value) {
                $values[] = $value;
            }
            $object->setBulletPoints($values);
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'postAt')) {
            $object->setPostAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'postAt'}));
        }
        if (property_exists($data, 'expireAt')) {
            $object->setExpireAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'expireAt'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAdId()) {
            $data->{'adId'} = $object->getAdId();
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->serializer->serialize($object->getOwner(), 'raw', $context);
        }
        if (null !== $object->getJob()) {
            $data->{'job'} = $this->serializer->serialize($object->getJob(), 'raw', $context);
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->serializer->serialize($object->getCompany(), 'raw', $context);
        }
        if (null !== $object->getContact()) {
            $data->{'contact'} = $this->serializer->serialize($object->getContact(), 'raw', $context);
        }
        if (null !== $object->getCreatedBy()) {
            $data->{'createdBy'} = $this->serializer->serialize($object->getCreatedBy(), 'raw', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->serializer->serialize($object->getLinks(), 'raw', $context);
        }
        if (null !== $object->getSummary()) {
            $data->{'summary'} = $object->getSummary();
        }
        if (null !== $object->getBulletPoints()) {
            $values = [];
            foreach ($object->getBulletPoints() as $value) {
                $values[] = $value;
            }
            $data->{'bulletPoints'} = $values;
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getPostAt()) {
            $data->{'postAt'} = $object->getPostAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getExpireAt()) {
            $data->{'expireAt'} = $object->getExpireAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}

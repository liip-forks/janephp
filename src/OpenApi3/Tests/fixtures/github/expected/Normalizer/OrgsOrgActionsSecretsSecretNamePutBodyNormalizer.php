<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OrgsOrgActionsSecretsSecretNamePutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\OrgsOrgActionsSecretsSecretNamePutBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\OrgsOrgActionsSecretsSecretNamePutBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\OrgsOrgActionsSecretsSecretNamePutBody();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('encrypted_value', $data)) {
            $object->setEncryptedValue($data['encrypted_value']);
        }
        if (\array_key_exists('key_id', $data)) {
            $object->setKeyId($data['key_id']);
        }
        if (\array_key_exists('visibility', $data)) {
            $object->setVisibility($data['visibility']);
        }
        if (\array_key_exists('selected_repository_ids', $data)) {
            $values = array();
            foreach ($data['selected_repository_ids'] as $value) {
                $values[] = $value;
            }
            $object->setSelectedRepositoryIds($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEncryptedValue()) {
            $data['encrypted_value'] = $object->getEncryptedValue();
        }
        if (null !== $object->getKeyId()) {
            $data['key_id'] = $object->getKeyId();
        }
        if (null !== $object->getVisibility()) {
            $data['visibility'] = $object->getVisibility();
        }
        if (null !== $object->getSelectedRepositoryIds()) {
            $values = array();
            foreach ($object->getSelectedRepositoryIds() as $value) {
                $values[] = $value;
            }
            $data['selected_repository_ids'] = $values;
        }
        return $data;
    }
}
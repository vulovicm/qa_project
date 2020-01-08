<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 7:24 PM
 */

namespace App\Service;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class SerializerService
 * @package App\Service
 */
class SerializerService implements ISerializerService
{
    /**
     * @param $model
     * @return string
     */
    function serialize($model): string
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $jsonContent = $serializer->serialize($model, 'json');

        return $jsonContent;
    }
}
<?php

namespace App\RequestConverter;

use App\Exception\JsonBadRequestException;
use App\Model\RequestModel\CircleRequestModel;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CircleConverter
 * @package App\RequestConverter
 */
class CircleConverter implements ParamConverterInterface
{
    /**
     * Stores the object in the request.
     *
     * @param Request $request
     * @param ParamConverter $configuration Contains the name, class and options of the object
     *
     * @return void True if the object has been successfully set, else false
     */
    public function apply(Request $request, ParamConverter $configuration)
    {

        if (!is_numeric($request->attributes->get('radius'))){
            throw new JsonBadRequestException('Radius must be numeric');
        }

        /** @var float $radius */
        $radius = $request->attributes->get('radius');

        /** @var CircleRequestModel $circle */
        $circle = new CircleRequestModel($radius);

        $request->attributes->set($configuration->getName(), $circle);
    }

    /**
     * Checks if the object is supported.
     *
     * @param ParamConverter $configuration
     * @return bool True if the object is supported, else false
     */
    public function supports(ParamConverter $configuration)
    {
        return $configuration->getClass() == CircleRequestModel::class;
    }
}
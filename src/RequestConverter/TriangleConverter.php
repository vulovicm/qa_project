<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 6:42 PM
 */

namespace App\RequestConverter;
use App\Exception\JsonBadRequestException;
use App\Model\RequestModel\TriangleRequestModel;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TriangleConverter
 * @package App\RequestConverter
 */
class TriangleConverter implements ParamConverterInterface
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
        if (!is_numeric($request->attributes->get('a')) || !is_numeric($request->attributes->get('b')) || !is_numeric($request->attributes->get('c'))){
            throw new JsonBadRequestException('All values must be numeric');
        }

        /** @var float $a */
        $a = $request->attributes->get('a');

        /** @var float $b */
        $b = $request->attributes->get('b');

        /** @var float $c */
        $c = $request->attributes->get('c');

        /** @var TriangleRequestModel $triangle */
        $triangle = new TriangleRequestModel($a,$b,$c);

        $request->attributes->set($configuration->getName(), $triangle);
    }

    /**
     * Checks if the object is supported.
     *
     * @param ParamConverter $configuration
     * @return bool True if the object is supported, else false
     */
    public function supports(ParamConverter $configuration)
    {
        return $configuration->getClass() == TriangleRequestModel::class;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 4:09 PM
 */

namespace App\Service;

use App\Exception\JsonBadRequestException;
use App\Model\ResponseModel\BaseGeometryResponseModel;

/**
 * Class GeometryCalculator
 * @package App\Service
 */
class GeometryCalculator implements IGeometryCalculator
{
    /**
     * @param BaseGeometryResponseModel $shape1
     * @param BaseGeometryResponseModel $shape2
     * @return float
     * @throws \Exception
     */
    public function calculateSumOfSurface($shape1, $shape2): float
    {
        if (!$shape1 instanceof BaseGeometryResponseModel || !$shape2 instanceof BaseGeometryResponseModel) {
            throw new \Exception('Both shapes must be instance of BaseGeometryResponseModel');
        }
        return $shape1->getSurface() + $shape2->getSurface();
    }

    /**
     * @param BaseGeometryResponseModel $shape1
     * @param BaseGeometryResponseModel $shape2
     * @return float
     * @throws \Exception
     */
    public function calculateSumOfCircumference($shape1, $shape2): float
    {
        if (!$shape1 instanceof BaseGeometryResponseModel || !$shape2 instanceof BaseGeometryResponseModel) {
            throw new \Exception('Both shapes must be instance of BaseGeometryResponseModel');
        }
        return $shape1->getCircumference() + $shape2->getCircumference();
    }
}
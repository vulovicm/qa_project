<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 8:21 PM
 */

namespace App\Service;

use App\Model\RequestModel\TriangleRequestModel;

/**
 * Class TriangleCalculatorService
 * @package App\Service
 */
class TriangleCalculatorService extends MathService implements ITriangleCalculatorService
{
    /**
     * @param TriangleRequestModel $model
     * @return float
     */
    public function calculateSurface($model): float
    {
        return ($model->getA() * $model->getB()) /2;
    }

    /**
     * @param TriangleRequestModel $model
     * @return float
     */
    public function calculateCircumference($model): float
    {
        return $model->getA() + $model->getB() + $model->getC();
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 8:16 PM
 */

namespace App\Service;

use App\Model\RequestModel\CircleRequestModel;

/**
 * Class CircleCalculatorService
 * @package App\Service
 */
class CircleCalculatorService extends MathService implements ICircleCalculatorService
{
    /**
     * @var float $pi
     */
    private $pi = 3.14;

    /**
     * @param CircleRequestModel $model
     * @return float
     */
    public function calculateSurface($model): float
    {
        return  $this->pi * pow($model->getRadius(),2);
    }

    /**
     * @param CircleRequestModel $model
     * @return float
     */
    public function calculateCircumference($model): float
    {
        return  2 * $model->getRadius() * $this->pi;
    }
}
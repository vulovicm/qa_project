<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 4:09 PM
 */

namespace App\Service;


/**
 * Interface IGeometryCalculator
 * @package App\Service
 */
interface IGeometryCalculator
{
    /**
     * @param $shape1
     * @param $shape2
     * @return float
     */
    public function calculateSumOfSurface($shape1, $shape2): float;

    /**
     * @param $shape1
     * @param $shape2
     * @return float
     */
    public function calculateSumOfCircumference($shape1, $shape2): float;

}
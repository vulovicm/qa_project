<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 8:14 PM
 */

namespace App\Service;

/**
 * Interface IMathService
 * @package App\Service
 */
interface IMathService
{
    /**
     * @param $model
     * @return float
     */
    public function calculateSurface($model): float;


    /**
     * @param $model
     * @return float
     */
    public function calculateCircumference($model): float;

}
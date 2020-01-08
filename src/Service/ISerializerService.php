<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 7:23 PM
 */

namespace App\Service;

/**
 * Interface ISerializerService
 * @package App\Service
 */
interface ISerializerService
{
    /**
     * @param $model
     * @return string
     */
    function serialize($model): string;

}
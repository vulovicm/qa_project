<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 7:58 PM
 */

namespace App\Model\RequestModel;

/**
 * Class CircleRequestModel
 * @package App\Model\RequestModel
 */
class CircleRequestModel
{
    /**
     * CircleRequestModel constructor.
     * @param float $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @var float $radius
     */
    protected $radius;

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     */
    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }
}
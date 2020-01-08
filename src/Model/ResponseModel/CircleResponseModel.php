<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 2:59 PM
 */

namespace App\Model\ResponseModel;

/**
 * Class CircleResponseModel
 * @package App\Model\ResponseModel
 */
class CircleResponseModel extends BaseGeometryResponseModel
{
    /**
     * CircleResponseModel constructor.
     * @param float $surface
     * @param float $circumference
     * @param float $radius
     */
    public function __construct(float $surface, float $circumference,float $radius)
    {
        parent::__construct('circle', $surface, $circumference);
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
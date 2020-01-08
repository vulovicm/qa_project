<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 7:39 PM
 */

namespace App\Model\ResponseModel;

/**
 * Class BaseGeometryResponseModel
 * @package App\Model\ResponseModel
 */
class BaseGeometryResponseModel
{
    /**
     * BaseGeometryResponseModel constructor.
     * @param string $type
     * @param float $surface
     * @param float $circumference
     */
    public function __construct(string $type, float $surface, float $circumference)
    {
        $this->type = $type;
        $this->surface = $surface;
        $this->circumference = $circumference;
    }

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var float $surface
     */
    private $surface;

    /**
     * @var float $circumference
     */
    private $circumference;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getSurface(): float
    {
        return $this->surface;
    }

    /**
     * @param float $surface
     */
    public function setSurface(float $surface): void
    {
        $this->surface = $surface;
    }

    /**
     * @return float
     */
    public function getCircumference(): float
    {
        return $this->circumference;
    }

    /**
     * @param float $circumference
     */
    public function setCircumference(float $circumference): void
    {
        $this->circumference = $circumference;
    }
}
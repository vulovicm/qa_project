<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 7:43 PM
 */

namespace App\Model\RequestModel;

/**
 * Class TriangleRequestModel
 * @package App\Model\RequestModel
 */
class TriangleRequestModel
{
    /**
     * TriangleRequestModel constructor.
     * @param float $a
     * @param float $b
     * @param float $c
     */
    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @var float $a
     */
    protected $a;

    /**
     * @var float $b
     */
    protected $b;

    /**
     * @var float $c
     */
    protected $c;


    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @param float $a
     */
    public function setA(float $a): void
    {
        $this->a = $a;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @param float $b
     */
    public function setB(float $b): void
    {
        $this->b = $b;
    }

    /**
     * @return float
     */
    public function getC(): float
    {
        return $this->c;
    }

    /**
     * @param float $c
     */
    public function setC(float $c): void
    {
        $this->c = $c;
    }

}
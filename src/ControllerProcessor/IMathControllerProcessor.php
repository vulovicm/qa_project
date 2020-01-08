<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 3:05 PM
 */

namespace App\ControllerProcessor;
use App\Model\RequestModel\CircleRequestModel;
use App\Model\RequestModel\TriangleRequestModel;
use App\Model\ResponseModel\CircleResponseModel;
use App\Model\ResponseModel\TriangleResponseModel;
use Symfony\Component\HttpFoundation\Request;


/**
 * Interface IMathControllerProcessor
 * @package App\ControllerProcessor
 */
interface IMathControllerProcessor
{
    /**
     * @param Request $request
     * @param TriangleRequestModel $triangleRequest
     * @return TriangleResponseModel
     */
    function calculateTriangle(Request $request , TriangleRequestModel $triangleRequest): TriangleResponseModel;

    /**
     * @param Request $request
     * @param CircleRequestModel $circleRequest
     * @return CircleResponseModel
     */
    function calculateCircle(Request $request , CircleRequestModel $circleRequest): CircleResponseModel;
}
<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 3:06 PM
 */

namespace App\ControllerProcessor;

use App\Model\RequestModel\CircleRequestModel;
use App\Model\RequestModel\TriangleRequestModel;
use App\Model\ResponseModel\CircleResponseModel;
use App\Model\ResponseModel\TriangleResponseModel;
use App\Service\ICircleCalculatorService;
use App\Service\ITriangleCalculatorService;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class MathControllerProcessor
 * @property ITriangleCalculatorService triangleCalculatorService
 * @property ICircleCalculatorService circleCalculatorService
 * @package App\ControllerProcessor
 */
class MathControllerProcessor implements IMathControllerProcessor
{
    /**
     * MathControllerProcessor constructor.
     * @param ITriangleCalculatorService $triangleCalculatorService
     * @param ICircleCalculatorService $circleCalculatorService
     */
    public function __construct(ITriangleCalculatorService $triangleCalculatorService, ICircleCalculatorService $circleCalculatorService)
    {
        $this->triangleCalculatorService = $triangleCalculatorService;
        $this->circleCalculatorService = $circleCalculatorService;

    }

    /**
     * @param Request $request
     * @param TriangleRequestModel $triangleRequest
     * @return TriangleResponseModel
     */
    function calculateTriangle(Request $request, TriangleRequestModel $triangleRequest): TriangleResponseModel
    {
        /** @var float $surface */
        $surface = $this->triangleCalculatorService->calculateSurface($triangleRequest);

        /** @var float $circumference */
        $circumference = $this->triangleCalculatorService->calculateCircumference($triangleRequest);

        return new TriangleResponseModel($surface, $circumference, $triangleRequest->getA(), $triangleRequest->getB(), $triangleRequest->getC());
    }

    /**
     * @param Request $request
     * @param CircleRequestModel $circleRequest
     * @return CircleResponseModel
     */
    function calculateCircle(Request $request, CircleRequestModel $circleRequest): CircleResponseModel
    {
        /** @var float $surface */
        $surface = $this->circleCalculatorService->calculateSurface($circleRequest);

        /** @var float $circumference */
        $circumference = $this->circleCalculatorService->calculateCircumference($circleRequest);

        return new CircleResponseModel($surface, $circumference, $circleRequest->getRadius());
    }
}
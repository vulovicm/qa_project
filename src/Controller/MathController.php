<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 3:05 PM
 */

namespace App\Controller;

use App\ControllerProcessor\IMathControllerProcessor;
use App\Model\RequestModel\CircleRequestModel;
use App\Model\RequestModel\TriangleRequestModel;
use App\Model\ResponseModel\CircleResponseModel;
use App\Model\ResponseModel\TriangleResponseModel;
use App\Service\ICircleCalculatorService;
use App\Service\ISerializerService;
use App\Service\ITriangleCalculatorService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class MathController
 * @property IMathControllerProcessor mathControllerProcessor
 * @property ISerializerService serializerService
 * @property ITriangleCalculatorService triangleCalculatorService
 * @property ICircleCalculatorService circleCalculatorService
 * @package App\Controller
 * @Route("math")
 */
class MathController
{
    /**
     * MathController constructor.
     * @param IMathControllerProcessor $mathControllerProcessor
     * @param ISerializerService $serializerService
     * @param ICircleCalculatorService $circleCalculatorService
     * @param ITriangleCalculatorService $triangleCalculatorService
     */
    public function __construct(IMathControllerProcessor $mathControllerProcessor, ISerializerService $serializerService,
                                ICircleCalculatorService $circleCalculatorService, ITriangleCalculatorService $triangleCalculatorService)
    {
        $this->mathControllerProcessor = $mathControllerProcessor;
        $this->serializerService = $serializerService;
        $this->circleCalculatorService = $circleCalculatorService;
        $this->triangleCalculatorService = $triangleCalculatorService;
    }

    /**
     * @Route("/triangle/{a}/{b}/{c}")
     * @ParamConverter("requestModel", options={"a" = "a", "b" = "b", "c" = "c"})
     * @Method("GET")
     * @param Request $request
     * @param TriangleRequestModel $requestModel
     * @return Response
     */
    public function calculateTriangle(Request $request, TriangleRequestModel $requestModel)
    {
        /** @var TriangleResponseModel $triangleResponseModel */
        $triangleResponseModel = $this->mathControllerProcessor->calculateTriangle($request, $requestModel);

        /** @var string $json */
        $json = $this->serializerService->serialize($triangleResponseModel);

        return new Response($json);
    }

    /**
     * @Route("/circle/{radius}")
     * @ParamConverter("requestModel", options={"radius" = "radius"})
     * @Method("GET")
     * @param Request $request
     * @param CircleRequestModel $requestModel
     * @return Response
     */
    public function calculateCircle(Request $request, CircleRequestModel $requestModel)
    {
        /** @var CircleResponseModel $circleResponseModel */
        $circleResponseModel = $this->mathControllerProcessor->calculateCircle($request, $requestModel);

        /** @var string $json */
        $json = $this->serializerService->serialize($circleResponseModel);

        return new Response($json);
    }


}
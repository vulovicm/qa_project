<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 8:31 PM
 */

namespace App\EventSubscriber;

use App\Exception\IBaseApiException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Class ApiExceptionSubscriber
 * @package App\EventSubscriber
 */
class ApiExceptionSubscriber
{
    public function onKernelException(ExceptionEvent $event)
    {
        /** @var \Exception $e */
        $e = $event->getThrowable();
        if (!$e instanceof IBaseApiException) {
            return;
        }
        /** @var array $json */
        $json = $this->buildResponseData($event->getThrowable());

        $response = new JsonResponse($json);
        $response->setStatusCode($json['error']['code']);
        $event->setResponse($response);
    }

    private function buildResponseData(HttpException $exception)
    {
        $messages = json_decode($exception->getMessage());
        if (!is_array($messages)) {
            $messages = $exception->getMessage() ? [$exception->getMessage()] : [];
        }

        return [
            'error' => [
                'code' => $exception->getStatusCode(),
                'messages' => $messages
            ]];
    }
}
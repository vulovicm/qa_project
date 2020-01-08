<?php
/**
 * Created by PhpStorm.
 * User: miljanvulovic
 * Date: 1/8/20
 * Time: 8:30 PM
 */

namespace App\Exception;

use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class JsonBadRequestException
 * @package App\Exception
 */
class JsonBadRequestException extends HttpException implements IBaseApiException
{
    /**
     * JsonBadRequestException constructor.
     * @param string $message
     */
    public function __construct(string $message)
    {
        parent::__construct(400 , $message);
    }

}
<?php

namespace JoobloBridge\Request\System;

use JoobloBridge\Request\BaseRequest;
use Symfony\Component\HttpFoundation\Request;

class IsSystemDisabledRequest extends BaseRequest
{
    private const URI = "api/system/is-system-disabled";

    /**
     * {@inherticdoc}
     */
    public function getRequestUri(): string
    {
        $uri = self::URI;

        return $uri;
    }

    /**
     * @return string
     */
    public function getRequestMethod(): string
    {
        return Request::METHOD_GET;
    }

}
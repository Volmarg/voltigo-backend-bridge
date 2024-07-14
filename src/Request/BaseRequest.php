<?php

namespace JoobloBridge\Request;

/**
 * Base class for building any bridge between services
 *
 * @package JoobloBridge\Request
 */
abstract class BaseRequest
{
    /**
     * Request Uri to be called
     *
     * @return string
     */
    public abstract function getRequestUri(): string;

    /**
     * GET, POST etc.
     *
     * @return string
     */
    public abstract function getRequestMethod(): string;

}
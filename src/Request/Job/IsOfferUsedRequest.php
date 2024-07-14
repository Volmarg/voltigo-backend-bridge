<?php

namespace JoobloBridge\Request\Job;

use JoobloBridge\Request\BaseRequest;
use Symfony\Component\HttpFoundation\Request;

class IsOfferUsedRequest extends BaseRequest
{
    private const URI = "api/job-offer/is-offer-used";

    private int $offerId;

    /**
     * @return int
     */
    public function getOfferId(): int
    {
        return $this->offerId;
    }

    /**
     * @param int $offerId
     */
    public function setOfferId(int $offerId): void
    {
        $this->offerId = $offerId;
    }

    /**
     * {@inherticdoc}
     */
    public function getRequestUri(): string
    {
        $uri = self::URI . DIRECTORY_SEPARATOR . $this->getOfferId();

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
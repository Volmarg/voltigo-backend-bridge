<?php

namespace JoobloBridge\Service;

use JoobloBridge\Request\Job\IsOfferUsedRequest;
use JoobloBridge\Request\System\IsSystemDisabledRequest;
use JoobloBridge\Request\UpdateFromTransactionRequest;
use JoobloBridge\Response\Job\IsOfferUsedResponse;
use JoobloBridge\Response\System\IsSystemDisabledResponse;
use JoobloBridge\Response\UpdateFromTransactionResponse;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class BridgeService - used for performing calls toward other / external service (project)
 * @package JoobloBridge
 */
class BridgeService extends BridgeBaseService
{

    /**
     * Handles the incoming transaction:
     * - updating order data, granting products etc.
     *
     * @throws GuzzleException
     */
    public function handleTransaction(UpdateFromTransactionRequest $request): UpdateFromTransactionResponse
    {
        $response = new UpdateFromTransactionResponse();

        /** @var UpdateFromTransactionResponse $baseResponse */
        $baseResponse = $this->sendRequest($request, $response);

        return $baseResponse;
    }

    /**
     * Checks if offer of given id is referenced in the called system
     *
     * @throws GuzzleException
     */
    public function isOfferUsed(IsOfferUsedRequest $request): IsOfferUsedResponse
    {
        $response = new IsOfferUsedResponse();

        /** @var IsOfferUsedResponse $baseResponse */
        $baseResponse = $this->sendRequest($request, $response);

        return $baseResponse;
    }

    /**
     * Checks if system is disabled
     *
     * @throws GuzzleException
     */
    public function isSystemDisabled(IsSystemDisabledRequest $request): IsSystemDisabledResponse
    {
        $response = new IsSystemDisabledResponse();

        /** @var IsSystemDisabledResponse $baseResponse */
        $baseResponse = $this->sendRequest($request, $response);

        return $baseResponse;
    }

}
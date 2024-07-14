<?php

namespace JoobloBridge\Response\System;

use JoobloBridge\Request\System\IsSystemDisabledRequest;
use JoobloBridge\Response\BaseResponse;

/**
 * Response for:
 * - {@see IsSystemDisabledRequest}
 */
class IsSystemDisabledResponse extends BaseResponse
{
    private bool $disabled;

    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    public function setDisabled(bool $disabled): void
    {
        $this->disabled = $disabled;
    }

    /**
     * {@inheritDoc}
     * @param string $json
     *
     * @return $this
     */
    public function prefillBaseFieldsFromJsonString(string $json): static
    {
        $response   = parent::prefillBaseFieldsFromJsonString($json);
        $dataArray  = json_decode($json, true);
        $isDisabled = $dataArray['disabled'];

        $response->setDisabled($isDisabled);

        return $response;
    }
}
<?php

namespace JoobloBridge\Enum;

enum OrderStatusEnum: string
{
    # The payment needs to be yet handled by external system
    case PENDING = "PENDING";

    # Payment handled & validated successfully
    case SUCCESS = "SUCCESS";

    # There was some payment error, could be that payment was rejected
    case ERROR = "ERROR";
}

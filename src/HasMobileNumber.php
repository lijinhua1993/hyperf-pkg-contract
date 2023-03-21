<?php

declare(strict_types=1);

namespace HyperfLjh\Contract;

interface HasMobileNumber
{
    /**
     * Get the mobile number of the entity.
     * Must be E.164 international standard format (CC+NDC+SN, eg. +8618812345678).
     */
    public function getMobileNumber(): ?string;
}

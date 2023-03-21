<?php

declare(strict_types=1);

namespace HyperfLjh\Contract;

interface HasLocalePreference
{
    /**
     * Get the preferred locale of the entity.
     */
    public function getPreferredLocale(): ?string;
}

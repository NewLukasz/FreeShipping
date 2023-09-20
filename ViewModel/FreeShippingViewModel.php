<?php
declare(strict_types=1);

namespace STLK\FreeShipping\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use STLK\FreeShipping\Api\Data\ConfigProviderInterface;

class FreeShippingViewModel implements ArgumentInterface
{
    /**
     * @param ConfigProviderInterface $configProvider
     */
    public function __construct(
        private ConfigProviderInterface $configProvider
    ) {}

    /**
     * @return string
     */
    public function getFreeShippingReachedMessage(): string
    {
        return $this->configProvider->getFreeShippingReachedMessage();
    }

    /**
     * @return string
     */
    public function getFreeShippingMessage(): string
    {
        return $this->configProvider->getFreeShippingMessage();
    }

    /**
     * @return float
     */
    public function getFreeShippingAmount(): float
    {
        return (float)$this->configProvider->getFreeShippingAmount();
    }
}

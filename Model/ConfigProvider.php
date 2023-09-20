<?php
declare(strict_types=1);

namespace STLK\FreeShipping\Model;

use STLK\FreeShipping\Api\Data\ConfigProviderInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class ConfigProvider extends AbstractHelper implements ConfigProviderInterface
{
    /**
     * @return bool
     */
    public function isModuleEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::MODULE_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function getFreeShippingMessage(): string
    {
        return $this->scopeConfig->getValue(
            self::FREE_SHIPPING_MESSAGE,
            ScopeInterface::SCOPE_STORE
        ) ?: '';
    }

    /**
     * @return string
     */
    public function getFreeShippingReachedMessage(): string
    {
        return $this->scopeConfig->getValue(
            self::FREE_SHIPPING_REACHED_MESSAGE,
            ScopeInterface::SCOPE_STORE
        ) ?: '';
    }

    /**
     * @return float
     */
    public function getFreeShippingAmount(): float
    {
        return (float)$this->scopeConfig->getValue(
            self::FREE_SHIPPING_AMOUNT,
            ScopeInterface::SCOPE_STORE
        ) ?: 0;
    }
}

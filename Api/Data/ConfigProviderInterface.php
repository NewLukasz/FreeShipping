<?php
declare(strict_types=1);

namespace STLK\FreeShipping\Api\Data;

interface ConfigProviderInterface
{
    /**
     * Module configuration
     */
    const MODULE_ENABLED = 'stlk_freeShipping/general/enable';
    const FREE_SHIPPING_MESSAGE = 'stlk_freeShipping/general/free_shipping_message';
    const FREE_SHIPPING_REACHED_MESSAGE = 'stlk_freeShipping/general/free_shipping_reached_message';
    const FREE_SHIPPING_AMOUNT = 'stlk_freeShipping/general/free_shipping_amount';

    /**
     * @return bool
     */
    public function isModuleEnabled(): bool;

    /**
     * @return String
     */
    public function getFreeShippingMessage(): string;

    /**
     * @return Float
     */
    public function getFreeShippingAmount(): float;

    /**
     * @return string
     */
    public function getFreeShippingReachedMessage(): string;
}

define([
    'STLK_FreeShipping/js/summary/model/free-shipping-configuration'
], function(
        freeShippingConfiguration
) {
    'use strict';
    return function (config) {
        freeShippingConfiguration.setFreeShippingAmount(config.freeShippingAmount);
        freeShippingConfiguration.setFreeShippingMessage(config.freeShippingMessage);
        freeShippingConfiguration.setFreeShippingReachedMessage(config.freeShippingReachedMessage);
    }
});

define([
    'uiComponent',
    'Magento_Checkout/js/model/quote',
    'STLK_FreeShipping/js/summary/model/free-shipping-configuration'
], function (
    Component,
    quote,
    freeShippingConfiguration
) {
    'use strict';
    return Component.extend({
        defaults: {
            template: 'STLK_FreeShipping/summary/free-shipping'
        },
        initialize: function () {
            this._super();
            if (quote.totals().subtotal >= freeShippingConfiguration.getFreeShippingAmount()) {
                self.message = freeShippingConfiguration.getFreeShippingReachedMessage();
            } else {
                let restAmount = freeShippingConfiguration.getFreeShippingAmount() - quote.totals().subtotal;
                self.message = freeShippingConfiguration.getFreeShippingMessage() + restAmount;
            }
        }
    })
})

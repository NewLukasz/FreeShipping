define([], function () {
    'use strict';

    let freeShippingMessage,
        freeShippingReachedMessage,
        freeShippingAmount;

    return {
        setFreeShippingMessage: function (freeShippingMessageToDefine) {
            freeShippingMessage = freeShippingMessageToDefine;
        },
        getFreeShippingMessage: function () {
            return freeShippingMessage
        },
        setFreeShippingReachedMessage: function (freeShippingReachedMessageToDefine) {
            freeShippingReachedMessage = freeShippingReachedMessageToDefine;
        },
        getFreeShippingReachedMessage: function () {
            return freeShippingReachedMessage
        },
        setFreeShippingAmount: function(freeShippingAmountToDefine){
            freeShippingAmount = freeShippingAmountToDefine;
        },
        getFreeShippingAmount: function() {
            return freeShippingAmount
        }
    }
})

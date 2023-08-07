define(['jquery'], function($) {
    'use strict';

    return function(validator) {
        validator.addRule(
            'phone-required-for-sms',
            function (value) {
                return !$.mage.isEmpty(value);
            },
            $.mage.__('Please enter the phone number')
        )
        return validator;
    }
});

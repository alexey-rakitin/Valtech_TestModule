<?php

namespace Valtech\TestModule\Plugin;

use Magento\Checkout\Block\Checkout\AttributeMerger;

class CheckoutShippingAddressPhoneEnabler
{
    /**
     * Plugin is used to enable phone field on shipping address on checkout
     *
     * @param AttributeMerger $subject
     * @param array $elements
     * @param string $providerName
     * @param string $dataScopePrefix
     * @param array $fields
     * @return array
     */
    public function beforeMerge(
        AttributeMerger $subject,
        $elements,
        $providerName,
        $dataScopePrefix,
        array $fields = []
    ): array {
        if ($providerName === 'checkoutProvider'
            && $dataScopePrefix === 'shippingAddress'
            && isset($elements['telephone'])
        ) {
            $elements['telephone']['visible'] = '1';
            $elements['telephone']['required'] = '0';
        }

        return [$elements, $providerName, $dataScopePrefix, $fields];
    }
}

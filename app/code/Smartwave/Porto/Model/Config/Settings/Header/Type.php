<?php
namespace Smartwave\Porto\Model\Config\Settings\Header;

class Type implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [['value' => '1', 'label' => __('Type 1')], ['value' => '2', 'label' => __('Type 2')], ['value' => '3', 'label' => __('Type 3')], ['value' => '4', 'label' => __('Type 4')]];
    }

    public function toArray()
    {
        return ['1' => __('Type 1'), '2' => __('Type 2'), '3' => __('Type 3'), '4' => __('Type 4')];
    }
}

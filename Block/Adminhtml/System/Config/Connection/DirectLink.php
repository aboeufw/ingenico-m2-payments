<?php

namespace Ingenico\Payment\Block\Adminhtml\System\Config\Connection;

class DirectLink extends \Magento\Config\Block\System\Config\Form\Field
{

    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return implode('', [
            '<tr id="row_'.$element->getHtmlId().'">',
            '<td class="label"></td>',
            '<td class="value">',
            '<div class="message message-notice">',
            __('form.connection.label.directlink.label4'),
            '<br/><a href="javascript:void(0);">'.__('form.connection.label.readmore').'</a>',
            '</div>',
            '</td>',
            '<td class=""></td></tr>'
        ]);
    }
}

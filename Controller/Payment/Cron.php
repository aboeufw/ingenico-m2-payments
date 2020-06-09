<?php

namespace Ingenico\Payment\Controller\Payment;

class Cron extends \Ingenico\Payment\Controller\Payment\Base
{
    /**
     * @inheritdoc
     * @throws InvalidArgumentException
     */
    public function execute()
    {
        return $this->_connector->cronHandler();
    }
}

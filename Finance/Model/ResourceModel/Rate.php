<?php

namespace SweetHome\Finance\Model\ResourceModel;

class Rate extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('sweet_home_finance_rate', 'id');
    }
}

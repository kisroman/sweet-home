<?php

namespace SweetHome\Finance\Model\ResourceModel\Rate;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(\SweetHome\Finance\Model\Rate::class, \SweetHome\Finance\Model\ResourceModel\Rate::class);
    }
}

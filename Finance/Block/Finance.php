<?php

namespace SweetHome\Finance\Block;

use Magento\Framework\View\Element\Template;
use SweetHome\Finance\Model\Finance as FinanceModel;

class Finance extends Template
{
    /**
     * @var FinanceModel
     */
    private $finance;

    public function __construct(
        Template\Context $context,
        FinanceModel $finance,
        array $data = []
    ) {
        $this->finance = $finance;

        parent::__construct($context, $data);
    }

    public function getMenuItems()
    {
        return $this->finance->getMenuItems();
    }

    public function getHelloWorldTxt()
    {
        return 'Hello world!';
    }
}

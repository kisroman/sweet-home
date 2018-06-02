<?php

namespace SweetHome\Finance\Model;

class Finance
{
    private $menuItems = [
        'Rate' => 'rateUrl',
    ];

    public function __construct(array $menuItems)
    {
        $this->menuItems = $menuItems;
    }



    public function getMenuItems()
    {
        return $this->menuItems;
    }
}

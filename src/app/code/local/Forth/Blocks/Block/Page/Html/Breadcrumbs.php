<?php


class Forth_Blocks_Block_Page_Html_Breadcrumbs extends Mage_Page_Block_Html_Breadcrumbs
{
    protected function _construct()
    {
        $this->addCrumb("google", [
            'label' => $this->__('Google link'),
            'title' => $this->__('Google link title'),
            'link' => '#',
        ]);
        return parent::_construct();
    }
}
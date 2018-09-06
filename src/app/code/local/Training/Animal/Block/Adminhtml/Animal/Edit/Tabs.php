<?php


class Training_Animal_Block_Adminhtml_Animal_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    protected function _construct()
    {
        $this->setId("page_tabs");
        $this->setDestElementId("edit_form");
        $this->setTitle($this->__("Animal Info"));

        parent::_construct();
    }
}
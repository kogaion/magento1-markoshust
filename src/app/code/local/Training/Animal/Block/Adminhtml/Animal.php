<?php

class Training_Animal_Block_Adminhtml_Animal extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected function _construct()
    {
        $this->_blockGroup = "training_animal";
        $this->_controller = "adminhtml_animal";
        $this->_headerText = $this->__("List Animals");

        parent::_construct();
    }
}
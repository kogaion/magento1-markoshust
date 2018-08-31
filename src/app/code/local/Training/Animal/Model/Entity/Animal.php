<?php


class Training_Animal_Model_Entity_Animal extends Mage_Core_Model_Mysql4_Abstract
{
    /**
     * Resource initialization
     */
    protected function _construct()
    {
        $this->_init("training/animal", "animal_id");
    }
}
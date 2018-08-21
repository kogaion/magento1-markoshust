<?php


class Fifth_Database_Block_AllStores extends Mage_Core_Block_Template
{
    public function getAllStores()
    {
        return Mage::getResourceModel("core/store_collection");
    }
}
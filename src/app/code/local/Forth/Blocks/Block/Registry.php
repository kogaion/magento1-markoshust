<?php


class Forth_Blocks_Block_Registry extends Mage_Core_Block_Template
{
    public function getCustomVariable()
    {
        $value = Mage::registry("myCustomKey");
        return (null !== $value) ? (string) $value : "?unknown";
    }
}
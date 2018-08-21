<?php


class Forth_Blocks_Block_Hello_World extends Mage_Core_Block_Template
{
    protected function _toHtml()
    {
        return "<b>Hello world through block</b><br />" . parent::_toHtml();
    }
}
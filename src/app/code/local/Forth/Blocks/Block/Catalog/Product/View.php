<?php


class Forth_Blocks_Block_Catalog_Product_View extends Mage_Catalog_Block_Product_View
{
    public function getProductDefaultQty($product = null)
    {
        return 15 * parent::getProductDefaultQty($product);
    }

    protected function _toHtml()
    {
        return "<p>Yes!</p>" . parent::_toHtml();
    }
}
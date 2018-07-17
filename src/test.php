<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 17/07/2018
 * Time: 11:30
 */


require_once "app/Mage.php";
Mage::app();



Zend_Debug::dump(
//            Mage::getResourceModel("catalog/product")
//            get_class(Mage::getResourceModel("catalog/product"))
//            get_class(Mage::helper("sales"))
//            Mage::app()->getLayout()->createBlock("core/template")
//            get_class(Mage::getModel("sales/quote_address"))
//            Mage::getModel("sales/quote_address")
//            get_class(Mage::getResourceModel("first/page"))
//            . ":: " .get_class(Mage::getResourceModel("cms/page"))
//            get_class(Mage::getBlockSingleton("checkout/onepage_success"))
//            . "::" . get_class(Mage::getBlockSingleton("first/onepage_success"))
    get_class(Mage::helper("checkout/data"))
    . "::" . get_class(Mage::helper("first/data"))
);
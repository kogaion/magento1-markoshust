<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 17/07/2018
 * Time: 11:30
 */


require_once "app/Mage.php";
Mage::app();


/** @var Mage_Catalog_Model_Product $p */
$p = Mage::getModel("catalog/product")->setName("some name");

/** @var Mage_Catalog_Block_Product_View $b */
$b = Mage::app()->getLayout()->createBlock("catalog/product_view");

/** @var Mage_Catalog_Model_Resource_Product $r */
$r = Mage::getResourceModel("catalog/product");

$h = Mage::helper("catalog");

Zend_Debug::dump(
//    $p->getName()
//    get_class($b)
//    get_class($r)
    get_class($h)
);



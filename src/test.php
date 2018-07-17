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
Zend_Debug::dump(
    $p->getName()
);



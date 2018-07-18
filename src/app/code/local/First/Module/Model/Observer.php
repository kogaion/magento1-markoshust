<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 17/07/2018
 * Time: 13:53
 */

class First_Module_Model_Observer extends Mage_Core_Model_Abstract
{
    public function catalogProductLoadAfter(Varien_Event_Observer $observer)
    {
        $product = $observer->getProduct();
        $product->setName($product->getName() . ' is cool!');
    }

    public function controllerFrontInitBefore(Varien_Event_Observer $observer)
    {
        var_dump($observer->getData());
    }
}
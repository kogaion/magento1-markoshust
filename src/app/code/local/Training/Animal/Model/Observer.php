<?php


class Training_Animal_Model_Observer
{
    public function controllerActionPredispatch(Varien_Event_Observer $observer)
    {
        $user = Mage::getSingleton("admin/session")->getUser();
        if (is_object($user)) {
            $name = $user->getName();
        } else {
            $name = "Anonymous";
        }
        Mage::log(
            '"' . $name . '" visited "' . Mage::app()->getRequest()->getPathInfo() . '"',
            Zend_Log::INFO,
            'admin.log',
            true
        );
    }
}
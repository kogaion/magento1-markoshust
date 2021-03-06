<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 20/07/2018
 * Time: 11:53
 */

class Second_Module_PastaController extends Mage_Core_Controller_Front_Action
{
    public function sleepAction()
    {
        echo "Sleep!";
    }

    public function layoutAction()
    {
        $xml = $this->loadLayout()
            ->getLayout()
            ->getUpdate()
            ->asString();

        $this->getResponse()
            ->setHeader("Content-type", "text/text")
            ->setBody($xml);

        Mage::log($xml, Zend_Log::INFO, 'layout.log', true);
        Mage::log(Mage::getModel("catalog/product")->debug(), Zend_Log::INFO, "model.log", true);

//        $this->renderLayout();
    }

    public function defaultAction()
    {
        $this->loadLayout()
            ->renderLayout();
    }
}
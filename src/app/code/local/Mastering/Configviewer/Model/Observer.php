<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 10/07/2018
 * Time: 15:28
 */

class Observer
{
    const FLAG_SHOW_CONFIG = 'showConfig';
    const FLAG_SHOW_CONFIG_FORMAT = 'showConfigFormat';

    protected $request;

    public function checkForConfigRequest(Varien_Event_Observer $observer)
    {
        $this->request = $observer->getEvent()->getData('front')->getRequest();
        print_r($this->request);exit;
        if ($this->request->{self::FLAG_SHOW_CONFIG} === 'true') {
//            echo get_class($observer);exit;
            $this->setHeader();
            $this->outputConfig();
        }
    }

    protected function setHeader()
    {
        $format = isset($this->request->{self::FLAG_SHOW_CONFIG_FORMAT}) ? $this->request->{self::FLAG_SHOW_CONFIG_FORMAT} : 'xml';
        switch ($format) {
            case "text":
                header("Content-type: text/plain");
                break;
            default:
                header("Content-type: text/xml");
        }
    }

    protected function outputConfig()
    {
        exit(Mage::app()->getConfig()->getNode()->asXML());
    }


}
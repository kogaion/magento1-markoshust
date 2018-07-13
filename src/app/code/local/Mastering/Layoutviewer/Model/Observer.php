<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 10/07/2018
 * Time: 17:27
 */

class Mastering_Layoutviewer_Model_Observer
{
    const FLAG_SHOW_LAYOUT = 'showLayout';
    const FLAG_SHOW_LAYOUT_FORMAT = 'showLayoutFormat';

    protected $request;

    public function checkForLayoutRequest(Varien_Event_Observer $observer)
    {
        $this->request = $observer->getEvent()->getData('front')->getRequest();
        if ($this->request->{self::FLAG_SHOW_LAYOUT} === 'true') {
            $this->setHeader();
            $this->outputLayout();
        }
    }

    protected function setHeader()
    {
        $format = isset($this->request->{self::FLAG_SHOW_LAYOUT_FORMAT}) ? $this->request->{self::FLAG_SHOW_LAYOUT_FORMAT} : 'xml';
        switch ($format) {
            case "text":
                header("Content-type: text/plain");
                break;
            default:
                header("Content-type: text/xml");
        }
    }

    protected function outputLayout()
    {
        print_r(Mage::app()->getLayout()->getNode()->asXML());
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 10/07/2018
 * Time: 16:39
 */

class Mastering_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function goodbyeAction()
    {
        $request = $this->getRequest();
        print_r($request->getParams());

        echo 'Goodbye World!';
    }
}
<?php


class Forth_Layout_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function handleAction()
    {
        $this->loadLayout("my_cool_handle");
        $this->renderLayout();
    }
}